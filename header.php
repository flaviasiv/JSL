<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?> <!-- Essa função é necessária para carregar scripts e estilos do WordPress e plugins -->
    <style>
      *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
header {
  position: fixed;
  display:flex;
  justify-content: space-between;
  width:100%;
  max-width:100vw;
  margin: auto;
  height: 0;
  z-index: 99;
}
#home{
  position: fixed;
  left: 0;
  right: 0;
  width: 100vw;
  z-index: 99;
  box-sizing: border-box;
  height: 70px;
}
.navbar{   
  position: absolute;
  right: 0;
  left: 0;
  top: 0;
  width: 100%;
  max-width: 680px;
  scroll-behavior: smooth;
  transition: 0.7s;
  z-index: 99;
  display: inline-flex;
  height: 70px;
  padding: 16px 0;
  justify-content: space-between;
  margin: auto;
  align-items: center;
}
.logohd{
  width: 100%;
  max-width: 62px;
}
.menu-linksbtn ul{
  display: flex;
  align-items: center;
  list-style: none;
  border-radius: 100px;
  display: flex;
  padding: 20px 24px;
  align-items: center;
  gap: 27px;
}
.menu-linksbtn a {
  display:flex;
  align-items: center;
  color: #fff;
  text-align: center;
  font-family: 'Poppins';
  font-size: 12px;
  font-weight: 400;
  line-height: 137%; /* 16.44px */
  letter-spacing: -0.24px;
}
.menu-linksbtn a:hover{
  font-weight: 500;
  transition: 0.1s all ease-in-out;
}
.menusocials ul{
  display: flex;
  gap: 10px;
  align-items: center;
  list-style: none;
}
.callnow{
  display: flex;
}
.btn1{
  display: flex;
  width: 100%;
  padding: 17px 26px;
  align-items: center;
  gap: 4px;
  flex-shrink: 0;
  background: var(--Background-Background-3, #0C2842);
  color: #fff;
  text-align: center;
  font-family: 'Poppins';
  font-size: 13px;
  font-weight: 400;
  line-height: 90%; /* 11.7px */
  letter-spacing: -0.78px;
  white-space: nowrap;
}
.btn1 svg{
  flex-shrink: 0;
}
.btn1 svg path{
  stroke: #3FB1B8;
}
.callnow:hover{
  scale: 1.04;
  transition: 0.1s all ease-in-out;
}
/* :hover {
  scale: 1.05;
  transition: 0.1s all ease-in-out;
} */
.imgmobhd{width: 124px;}
.imgmobhd a{
  display: flex;
  width: 100%;
  max-width: 90px;
  align-self: center;
}
.imghd{
  width: 90px;
  object-fit: cover;
}
.btn-toggle, .logow{display: none}
@media only screen and (max-width: 800px) {
  .socials, .logo-m, 
  .menu-linksbtn{display: none;}
  .imgmobhd a{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
  }
  .menusocials ul{gap: 1px;}
  .callnow{
    margin: auto;
  }
  .btn1{
    position: absolute;
    width: 140px;
    height: 45px;
    align-items: center;
    justify-content: center;
    padding: 0;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .imgmobh{width:70px;}
  #homenav{
    display: flex;
    position: relative;
    justify-content: start !important;
    gap: 0;
  }
  #home {
  display:flex;
  flex-direction:column;
  width: 100%;
  max-width: 100%;
  margin: auto;
  text-align: right;
  align-items: end;
  padding: 0 15px;
  }   
}

</style>
</head>
<body <?php body_class(); ?>>

<header> 
        <div id="home" class=" bg-gradient-blue">
            <nav class="navbar" id="homenav">
                  <div id="imgmobhd" class="imgmobhd"><a href="<?php echo home_url(); ?>"><img loading="lazy" src="https://jls-cleaning.com/wp-content/uploads/2025/07/JLS-Residential-Commercial-Services-Logo-5-scaled.png" alt="JSL Services logo" class="imghd"></a></div>
                  <div class="menu-linksbtn">
                    <ul>
                      <li><a href="<?php echo home_url(); ?>"> Home </a></li>
                      <li><a href="<?php echo home_url('#services'); ?>"> Services </a></li>
                      <li><a href="<?php echo home_url('#aboutus'); ?>"> About us </a></li>
                      <li><a href="<?php echo home_url('#portfolio'); ?>"> Gallery </a></li>
                      <li><a href="<?php echo home_url('#reviews'); ?>"> Reviews </a></li>
                    </ul>
                  </div>
                  <div class="menusocials">
                    <ul>
                        <li><div class="callnow callw">
                        <a class="btn1" href="tel:+17409539677"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <g clip-path="url(#clip0_27_41)">
                                <path d="M11.9111 4.54699C12.6483 4.69081 13.3257 5.05134 13.8568 5.58241C14.3879 6.11349 14.7484 6.79096 14.8922 7.52812M11.9111 1.52812C13.4426 1.69826 14.8708 2.3841 15.9611 3.47303C17.0514 4.56196 17.739 5.98926 17.9111 7.52058M17.1564 13.5432V15.8074C17.1572 16.0176 17.1142 16.2256 17.03 16.4182C16.9458 16.6108 16.8223 16.7837 16.6674 16.9258C16.5125 17.0679 16.3296 17.176 16.1305 17.2434C15.9314 17.3107 15.7204 17.3357 15.5111 17.3168C13.1887 17.0645 10.9579 16.2709 8.99789 14.9998C7.17437 13.8411 5.62834 12.295 4.46959 10.4715C3.1941 8.50262 2.40034 6.26095 2.15261 3.92812C2.13375 3.71942 2.15855 3.50907 2.22544 3.31048C2.29233 3.11189 2.39983 2.9294 2.54111 2.77463C2.68239 2.61986 2.85435 2.4962 3.04604 2.41153C3.23773 2.32687 3.44494 2.28304 3.6545 2.28284H5.91865C6.28492 2.27923 6.64 2.40894 6.91771 2.64777C7.19543 2.8866 7.37682 3.21827 7.42808 3.58095C7.52365 4.30553 7.70087 5.01697 7.95638 5.70171C8.05793 5.97184 8.0799 6.26542 8.01971 6.54765C7.95952 6.82989 7.81968 7.08896 7.61676 7.29416L6.65827 8.25265C7.73265 10.1421 9.2971 11.7066 11.1866 12.781L12.1451 11.8225C12.3503 11.6195 12.6093 11.4797 12.8916 11.4195C13.1738 11.3593 13.4674 11.3813 13.7375 11.4828C14.4223 11.7383 15.1337 11.9156 15.8583 12.0111C16.2249 12.0629 16.5597 12.2475 16.7991 12.53C17.0384 12.8125 17.1656 13.1731 17.1564 13.5432Z" stroke="#3FB1B8" stroke-width="2.01258" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_27_41">
                                <rect width="18.1132" height="18.1132" fill="white" transform="translate(0.552734 0.773407)"/>
                                </clipPath>
                            </defs>
                            </svg>
                              Call now 
                          </a>
                      </div></li>
                    </ul>
                  </div>
            </nav>
        </div>
              <?php
                    if ( function_exists( 'mobile_menu' ) ) {
                    mobile_menu(); // Função mais comum do plugin
                }
              ?>
    </header>