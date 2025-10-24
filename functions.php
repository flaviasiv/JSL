<?php

// Configuração básica do tema
function meu_tema_setup() {
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'meu-tema' ),
    ) );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'meu_tema_setup' );

// Carrega scripts e estilos
function meu_tema_carregar_recursos() {
    // CSS
    wp_enqueue_style( 
    'meu-tema-style', 
    get_stylesheet_uri(),
    array(),
    filemtime( get_template_directory() . '/style.css' ) // Adiciona timestamp para evitar cache
    );
    
    // JS (jQuery é dependência padrão do WordPress)
    wp_enqueue_script('meu-script', get_template_directory_uri() . '/js/javascript.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'meu_tema_carregar_recursos');

// AOS INSTALL
function enqueue_aos_assets() {
    // CSS do AOS
    wp_enqueue_style('aos-css', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css');
    
    // JS do AOS
    wp_enqueue_script('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), null, true);
    
    // Inicialização do AOS no footer
    wp_add_inline_script('aos-js', 'AOS.init();');
}
add_action('wp_enqueue_scripts', 'enqueue_aos_assets');

// recaptcha google cloud chave
// Adiciona reCAPTCHA Enterprise ao WordPress
add_action('init', 'configurar_recaptcha_enterprise');
function configurar_recaptcha_enterprise() {
    // Carrega o autoloader do Composer
    // require_once get_template_directory() . '/vendor/autoload.php';
    
    // Configurações
    define('RECAPTCHA_SITE_KEY', '6LfiV3YrAAAAAE09GOL5sjpgK5ggOwGBHMf3WQp_');
    define('RECAPTCHA_PROJECT_ID', 'alpine-tempo-414913');
    define('RECAPTCHA_ACTION', 'wp_form_submit');
}

// Adiciona script do reCAPTCHA
add_action('wp_enqueue_scripts', 'adicionar_script_recaptcha');
function adicionar_script_recaptcha() {
    wp_enqueue_script(
        'google-recaptcha-enterprise',
        'https://www.google.com/recaptcha/enterprise.js?render=' . RECAPTCHA_SITE_KEY,
        array(),
        null,
        true
    );
}

// Validação do reCAPTCHA para formulários
function validar_recaptcha($token) {
    try {
        $client = new Google\Cloud\RecaptchaEnterprise\V1\RecaptchaEnterpriseServiceClient();
        $projectName = $client->projectName(RECAPTCHA_PROJECT_ID);
        
        $event = (new Google\Cloud\RecaptchaEnterprise\V1\Event())
            ->setSiteKey(RECAPTCHA_SITE_KEY)
            ->setToken($token);
        
        $assessment = (new Google\Cloud\RecaptchaEnterprise\V1\Assessment())
            ->setEvent($event);
        
        $response = $client->createAssessment($projectName, $assessment);
        
        return $response->getTokenProperties()->getValid() && 
               $response->getTokenProperties()->getAction() === RECAPTCHA_ACTION &&
               $response->getRiskAnalysis()->getScore() > 0.5;
        
    } catch (Exception $e) {
        error_log('Erro reCAPTCHA: ' . $e->getMessage());
        return false;
    }
}