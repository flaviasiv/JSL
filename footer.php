<?php
/**
 * Footer template
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="
    https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css
    " rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <meta name="author" content="Flavia Sigoli"/>
    <meta http-equiv="content-type" content="html; charset=UTF-8" />
    <meta name="robots" content="index, follow">
    <style>
        footer{
    font-family: 'Montserrat', sans-serif;
    font-optical-sizing: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
#site-footer{
    margin: 0;
    display: flex;
    flex-direction: column;
}
.footergrid{
    display: flex;
    width: 100%;
    max-width: 1200px;
    justify-content: space-between;
    color:#0C2842;
    margin: auto;
    padding: 60px 30px 30px;
    background-color: #fff;
    border-radius: 30px;
}
a{
    color: inherit;
    text-decoration: none;
}
footer ul{
    list-style: none;
}
.imgfooter{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
}
.logofooter{
    width: 100%;
    max-width: 257px;
    object-fit: cover;
}
.footerinfos{
    display: flex;
    gap: 40px;
}
.footertt{
    display: flex;
    gap: 50px;
}
.labelfooter{
    font-family: 'Montserrat';
    font-size: 12px;
    font-weight: 800;
    line-height: 130%; /* 15.6px */
    padding-bottom: 8px;
}
.footernav ul, .opentime ul{
    display: flex;
    flex-direction: column;
    gap: 5px;
}
.footernav li a{
    font-size: 14px;
    line-height: 150%;
    font-weight: 400;
}
.address ul{
    display: flex;
    flex-direction: column;
    gap:10px;
}
.address ul li a{
    display: flex;
    align-items: center;
    gap: 10px;
}
.address li svg{
    fill:#0C2842;
}
.footer-credits{
    position: relative;
    display: flex;
    justify-content: center;
    height: 60px;
    width: 100%;
    max-width: 1200px;
    margin: auto;
    padding: 0;
    align-items: center;
    text-align: center;    
    border-radius: 30px;
}
.rights{
    color: #0C2842 !important;
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
    line-height: 140%; /* 16.8px */
    letter-spacing: -0.12px;
}
.policies ul{
    display: flex;
    gap: 10px;
    text-decoration: underline;
    color:#0C2842;
    list-style: none;
    font-size: 14.789px;
    font-weight: 400;
    line-height: 150%;
}
.linemob{display: none;}
footer a:hover{
    transition: 0.2s all;
    font-weight: 500;
}
 footer a:hover svg{
    scale: 1.09;
    transition: 0.2s all;
}
@media screen and (max-width:1100px) {
    .footer-credits{
        padding: 30px 10px 0;
    }
}
@media screen and (max-width:890px) {
    #site-footer{
        /* border-radius: 0; */
    }
    .imgfooter ul{
        justify-content: center;
    }
    .logofooter{
        max-width: 207px;
    }
    .linemob{display: block;}
    .footergrid, .footerinfos{
        max-width: 100%;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0;
    }
    .footergrid {
        padding: 40px 0 20px;
    }
    .footertt{
        flex-direction: column;
        gap: 30px;
        padding-top: 40px;
        max-width:135px;
    }
    .locationcontainer ul, .locationcontainer li {
        align-items: center;
    }
    .footergrid div{
        width: 100%;
    }
    .footerinfos{
        gap: 40px;
    }
    .address ul li{
        margin: auto;
    }
    .footer-credits{
        flex-direction: column;
        margin: 0;
        gap: 20px;
        padding: 30px 0 !important;
        height: 100% !important;
    }
    .footer-credits ul{
        flex-direction: column;
        gap: 0px !important;
    }
    .footerinfos{
        padding-bottom: 0;
    }
}
    </style>
</head>
<body>

    <footer id="site-footer" role="contentinfo" class="bg-gradient-green">
          <div class="footergrid">
            <div class="imgfooter"><img src="https://jls-cleaning.com/wp-content/uploads/2025/07/JLS-Residential-Commercial-Services-Logo-7-scaled.png" alt="JSL Services logo" class="logofooter">
                <div class="menusocials">
                    <ul>
                      <li><a href="https://www.instagram.com/jlscleaning_/" target="_blank"><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="13.0489" cy="13.4405" r="12.5" fill="#0C2842"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0549 6.38281H9.62627C7.40726 6.38281 5.6084 8.18168 5.6084 10.4007V16.8293C5.6084 19.0483 7.40726 20.8472 9.62627 20.8472H16.0549C18.2739 20.8472 20.0727 19.0483 20.0727 16.8293V10.4007C20.0727 8.18168 18.2739 6.38281 16.0549 6.38281ZM18.6665 16.8293C18.6621 18.2698 17.4954 19.4365 16.0549 19.4409H9.62627C8.18574 19.4365 7.01907 18.2698 7.01465 16.8293V10.4007C7.01907 8.96016 8.18574 7.79348 9.62627 7.78907H16.0549C17.4954 7.79348 18.6621 8.96016 18.6665 10.4007V16.8293ZM16.6575 10.6016C17.1014 10.6016 17.4611 10.2418 17.4611 9.798C17.4611 9.35421 17.1014 8.99443 16.6575 8.99443C16.2137 8.99443 15.854 9.35421 15.854 9.798C15.854 10.2418 16.2137 10.6016 16.6575 10.6016ZM12.8406 9.9989C10.8435 9.9989 9.22448 11.6179 9.22448 13.615C9.22448 15.6121 10.8435 17.2311 12.8406 17.2311C14.8377 17.2311 16.4567 15.6121 16.4567 13.615C16.4588 12.6553 16.0785 11.7343 15.3999 11.0557C14.7213 10.3771 13.8003 9.99676 12.8406 9.9989ZM10.6307 13.615C10.6307 14.8355 11.6201 15.8248 12.8406 15.8248C14.061 15.8248 15.0504 14.8355 15.0504 13.615C15.0504 12.3945 14.061 11.4052 12.8406 11.4052C11.6201 11.4052 10.6307 12.3945 10.6307 13.615Z" fill="white"/>
                        </svg>
                        </a></li>
                      <li><a href="https://www.facebook.com/profile.php?id=61577707157449" target="_blank"><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="13.2325" cy="13.4405" r="12.5" fill="#0C2842"/>
                        <path d="M21.2688 13.6845C21.2688 9.21932 17.6711 5.59961 13.233 5.59961C8.79499 5.59961 5.19727 9.21932 5.19727 13.6845C5.19727 17.7198 8.13581 21.0646 11.9774 21.6711V16.0215H9.9371V13.6845H11.9774V11.9033C11.9774 9.877 13.1772 8.75775 15.0126 8.75775C15.8919 8.75775 16.8114 8.91566 16.8114 8.91566V10.9053H15.7982C14.8 10.9053 14.4886 11.5286 14.4886 12.1679V13.6845H16.7172L16.361 16.0215H14.4886V21.6711C18.3302 21.0646 21.2688 17.7199 21.2688 13.6845Z" fill="white"/>
                        </svg>
                        </a></li>
                      <li><a href="https://share.google/uMhF1hzI7v0pTxCRb" target="_blank"><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="13.4161" cy="13.4405" r="12.5" fill="#0C2842"/>
                        <path d="M20.292 11.0147C20.292 11.9565 19.522 12.7334 18.5733 12.7334C17.6245 12.7334 16.8545 11.9565 16.8545 11.0147C16.8545 11.9565 16.0845 12.7334 15.1358 12.7334C14.187 12.7334 13.417 11.9565 13.417 11.0147C13.417 11.9565 12.647 12.7334 11.6983 12.7334C10.7495 12.7334 9.9795 11.9565 9.9795 11.0147C9.9795 11.9565 9.2095 12.7334 8.26075 12.7334C7.31199 12.7334 6.54199 11.9565 6.54199 11.0147L7.49762 7.2884C7.49762 7.2884 7.697 6.5459 8.39825 6.5459H18.4358C19.137 6.5459 19.3364 7.2884 19.3364 7.2884L20.292 11.0147ZM19.6045 13.5584V18.9209C19.6045 19.6772 18.9858 20.2959 18.2295 20.2959H8.6045C7.84825 20.2959 7.22949 19.6772 7.22949 18.9209V13.5584C7.68144 13.745 8.17531 13.8065 8.6592 13.7363C9.1431 13.6662 9.59917 13.467 9.9795 13.1597C10.4539 13.5378 11.052 13.7647 11.6983 13.7647C12.3514 13.7647 12.9495 13.5378 13.417 13.1597C13.8914 13.5378 14.4895 13.7647 15.1358 13.7647C15.7889 13.7647 16.387 13.5378 16.8545 13.1597C17.322 13.5378 17.927 13.7647 18.5733 13.7647C18.9377 13.7647 19.2883 13.689 19.6045 13.5584ZM18.2295 17.0853C18.2295 16.9478 18.2295 16.8034 18.1952 16.6522L18.1745 16.5422H16.1327V17.3466H17.377C17.3358 17.4978 17.2808 17.6491 17.1639 17.7728C16.937 17.9997 16.6277 18.1234 16.2977 18.1234C15.9539 18.1234 15.617 17.9791 15.3695 17.7384C14.8951 17.2503 14.8951 16.4597 15.3833 15.9647C15.8577 15.4834 16.6414 15.4834 17.1364 15.9441L17.2327 16.0334L17.8102 15.4491L17.7002 15.3528C17.3152 14.9953 16.8064 14.7959 16.2702 14.7959H16.2633C15.7064 14.7959 15.1839 15.0091 14.792 15.3941C14.3864 15.7928 14.1595 16.3153 14.1595 16.8584C14.1595 17.4084 14.3726 17.9172 14.7645 18.2953C15.1729 18.6939 15.7201 18.9182 16.2908 18.9209H16.3045C16.8545 18.9209 17.3427 18.7216 17.7002 18.3709C18.0233 18.0409 18.2295 17.5459 18.2295 17.0853Z" fill="white"/>
                        </svg>
                          </a></li>
                    </ul>
                </div></div>
            <div class="footertt">
              <div class="footerinfos">
                <div class="opentime">
                  <h6 class="labelfooter">Our Hours</h6>
                    <ul>
                        <li>Mon: 8am - 6pm</li>
                        <li>Tue: 8am - 6pm</li>
                        <li>Wed: 8am - 6pm</li>
                        <li>Thu: 8am - 6pm</li>
                        <li>Fri: 8am - 6pm</li>
                        <li>Sat: 8am - 2pm</li>
                        <li>Sun: Closed</li>
                    </ul>
                </div>
              </div>
              <div class="footernav">
                  <h6 class="labelfooter">Sitemap</h6>
                <ul>
                  <li><a href="<?php echo home_url(); ?>"> Home </a></li>
                  <li><a href="<?php echo home_url('#services'); ?>"> Services </a></li>
                  <li><a href="<?php echo home_url('#aboutus'); ?>"> About us </a></li>
                  <li><a href="<?php echo home_url('#portfolio'); ?>"> Gallery </a></li>
                  <li><a href="<?php echo home_url('#reviews'); ?>"> Reviews </a></li>
                </ul>
              </div>
              <div class="footernav">
                  <h6 class="labelfooter">Support</h6>
                <ul>
                    <li><a href="/privacypolicy/">Privacy Policy</a></li>
                    <li><a href="/termsandconditions/">Terms of Service</a></li>
                    <li><a href="/cookiespolicy/">Cookies Settings</a></li>
                </ul>
              </div>
            </div>
            </div>
          </div>
          <div class="footer-credits">
            <p class="rights">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
          </div>
    </footer>
    <script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
    </script>
      <script defer src="./js/swiper-bundle.min.js"></script>
      <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>
