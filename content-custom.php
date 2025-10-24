<?php
/*
Template Name: custom
*/
?>


    <!-- Aqui você pode colocar conteúdo HTML estático --><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?> <!-- Essa função é necessária para carregar scripts e estilos do WordPress e plugins -->
<style>
</style>
</head>
<body>
    <main>
      
        <section class="howtocontainer container">
            <div class="howtogrid">
                <div class="howtocard">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="13.1598" cy="12.66" r="11.7446" fill="#25395C" stroke="white" stroke-width="1.26017"/>
                    <path d="M9.71014 6.53336H15.3787V18.631H11.9568V9.17755H9.71014V6.53336Z" fill="white"/>
                    </svg>
                    <h3>GET YOUR QUOTE <br>IN ONE CLICK</h3>
                </div>
                <div class="howtocard">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12.6637" cy="12.66" r="11.7446" fill="#25395C" stroke="white" stroke-width="1.26017"/>
                    <path d="M12.4908 15.9177H17.1571V18.631H7.7382V16.488L12.2662 12.2538C13.234 11.3551 13.3722 10.8021 13.3722 10.3009C13.3722 9.5232 12.8538 9.05657 11.8168 9.05657C10.9354 9.05657 10.1404 9.45407 9.65653 10.2318L7.11603 8.81462C8.032 7.29378 9.74295 6.2914 12.1279 6.2914C14.9104 6.2914 16.8287 7.72584 16.8287 9.97254C16.8287 11.1477 16.5003 12.2192 14.7721 13.8092L12.4908 15.9177Z" fill="white"/>
                    </svg>
                    <h3>Provide your <br>Cleaning Needs Details</h3>
                </div>
                <div class="howtocard">
                    <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12.4469" cy="12.66" r="11.7446" fill="#25395C" stroke="white" stroke-width="1.26017"/>
                    <path d="M13.7949 11.3724C15.8342 11.8045 16.9057 13.1179 16.9057 14.8462C16.9057 16.9027 15.2812 18.8729 11.6346 18.8729C9.95821 18.8729 8.17813 18.4582 6.9338 17.6805L8.17813 15.1054C9.14594 15.7621 10.3903 16.1078 11.5309 16.1078C12.6888 16.1078 13.4492 15.6584 13.4492 14.8462C13.4492 14.1203 12.9135 13.671 11.6 13.671H10.1656V11.5107L12.3259 9.17755H7.55596V6.53336H16.3008V8.67636L13.7949 11.3724Z" fill="white"/>
                    </svg>
                    <h3>OUR TEAM WILL <br>REACH OUT SHORTLY</h3>
                </div>
            </div>
        </section>
        <section class="ig-embled container servblue">
            <div class="ig-title servicestitle aos-fade">
            <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.7978 6.1709H14.2023C9.50942 6.1709 5.70508 9.97524 5.70508 14.6681V28.2637C5.70508 32.9565 9.50942 36.7609 14.2023 36.7609H27.7978C32.4907 36.7609 36.295 32.9565 36.295 28.2637V14.6681C36.295 9.97524 32.4907 6.1709 27.7978 6.1709ZM33.321 28.2637C33.3117 31.3101 30.8443 33.7775 27.7978 33.7868H14.2023C11.1558 33.7775 8.68843 31.3101 8.6791 28.2637V14.6681C8.68843 11.6216 11.1558 9.15425 14.2023 9.14492H27.7978C30.8443 9.15425 33.3117 11.6216 33.321 14.6681V28.2637ZM29.0724 15.093C30.011 15.093 30.7719 14.3321 30.7719 13.3935C30.7719 12.455 30.011 11.6941 29.0724 11.6941C28.1338 11.6941 27.373 12.455 27.373 13.3935C27.373 14.3321 28.1338 15.093 29.0724 15.093ZM21.0001 13.8184C16.7765 13.8184 13.3526 17.2423 13.3526 21.4659C13.3526 25.6895 16.7765 29.1134 21.0001 29.1134C25.2237 29.1134 28.6476 25.6895 28.6476 21.4659C28.6521 19.4362 27.8478 17.4885 26.4126 16.0533C24.9774 14.6181 23.0297 13.8139 21.0001 13.8184ZM16.3266 21.4659C16.3266 24.047 18.4189 26.1393 21.0001 26.1393C23.5812 26.1393 25.6735 24.047 25.6735 21.4659C25.6735 18.8848 23.5812 16.7924 21.0001 16.7924C18.4189 16.7924 16.3266 18.8848 16.3266 21.4659Z" fill="#011B40"/>
                </svg> 
                <h2>Follow us</h2>
            </div>
            <div class="ig-iframe aos-fade">
                <iframe src="https://www.instagram.com/jlscleaning_/embed" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
            </div>
        </section>
        <section class="contactcontainer container bg-gradient-blue" id="contact">
            <div class="contact">
                <img src="https://jls-cleaning.com/wp-content/uploads/2025/07/JLS-Residential-Commercial-Services-Logo-5-scaled.png" alt="" class="logo aos-fade">
                <div class="contactinfo aos-fade">
                    <h2 class="h2contact">Get a free estimate</h2>
                    <button class="btnestimate open-button" onclick="openForm()"><a>Get a quote</a>
                </div>
                <div class="form-popup" id="myForm">    
                    <form action="https://formspree.io/f/xzzgwyrg" method="POST" id="form">
                    <button type="button" class="btn cancel container" onclick="closeForm()">Close</button>      
                        <input type="text" required placeholder="Enter your name:*" autocomplete="on" name="name" id="name" pattern="{3}">
                        <label for="services">Choose a Service:
                        <select itemid="services" name="services" id="howdidyouheardaboutus">
                            <option value="Residential">Residential Cleaning</option>
                            <option value="Commercial">Commercial Cleaning</option>
                            <option value="MoveInOut">Move-In/Out Cleaning</option>
                            <option value="PostConstruction">Post-Construction Cleaning</option>
                        </select>
                        </label>
                        <input type="email" required autocomplete="on" id="email" name="email" placeholder="Enter your email:*" minlength="5" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
                        <input type="tel" required autocomplete="on" id="phone" name="phone" placeholder="Phone number:*" minlength="5">
                        <textarea name="message" id="message" cols="50" rows="10" placeholder="Type your message here..."></textarea>
                        <input type="hidden" name="_next" value="https://">
                        <div class="g-recaptcha" data-sitekey="6LfiV3YrAAAAAE09GOL5sjpgK5ggOwGBHMf3WQp_" data-action="LOGIN"></div>
                        <input type="text" name="_gotcha" style="display:none;">
                        <button type="submit" class="btnform btnestimate">Submit</button>
                <ul class="ullocation">
                    <li>
                        <h5><svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                        <path d="M17.5082 8.58491C19.1115 10.1882 19.1115 12.6821 17.5082 14.3744L18.3989 15.2651C20.6257 13.2165 20.6257 9.83189 18.3989 7.69422L17.5082 8.58491ZM16.5285 9.56468L15.6378 10.4554C16.0831 11.0789 16.0831 11.8805 15.6378 12.504L16.5285 13.3947C17.5973 12.3258 17.5973 10.7226 16.5285 9.56468ZM12.9657 1.72656H4.05873C3.58628 1.72656 3.13318 1.91424 2.7991 2.24832C2.46503 2.58239 2.27734 3.0355 2.27734 3.50795V19.5405C2.27734 20.0129 2.46503 20.466 2.7991 20.8001C3.13318 21.1342 3.58628 21.3218 4.05873 21.3218H12.9657C13.4381 21.3218 13.8912 21.1342 14.2253 20.8001C14.5594 20.466 14.7471 20.0129 14.7471 19.5405V3.50795C14.7471 3.0355 14.5594 2.58239 14.2253 2.24832C13.8912 1.91424 13.4381 1.72656 12.9657 1.72656ZM12.9657 18.6498H4.05873V4.39865H12.9657V18.6498Z" fill="#0C2842"/>
                        </svg> Phone</h5>
                        <a href="tel:+17409539677">(740) 953-9677</a>
                    </li>
                    <li>
                        <h5><svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                        <path d="M19.5932 6.17983C19.5932 5.20006 18.7916 4.39844 17.8118 4.39844H3.56069C2.58092 4.39844 1.7793 5.20006 1.7793 6.17983V16.8682C1.7793 17.8479 2.58092 18.6496 3.56069 18.6496H17.8118C18.7916 18.6496 19.5932 17.8479 19.5932 16.8682V6.17983ZM17.8118 6.17983L10.6862 10.6333L3.56069 6.17983H17.8118ZM17.8118 16.8682H3.56069V7.96122L10.6862 12.4147L17.8118 7.96122V16.8682Z" fill="#0C2842"/>
                        </svg> Email</h5>
                        <a href="mailto:contact@jls-cleaning.com">contact@jls-cleaning.com</a>
                    </li>
                    <li>
                        <h5><svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                        <path d="M10.9399 6.62531C11.5305 6.62531 12.0969 6.85992 12.5145 7.27751C12.9321 7.6951 13.1667 8.26148 13.1667 8.85205C13.1667 9.14447 13.1091 9.43403 12.9972 9.70419C12.8853 9.97435 12.7213 10.2198 12.5145 10.4266C12.3077 10.6334 12.0622 10.7974 11.7921 10.9093C11.5219 11.0212 11.2324 11.0788 10.9399 11.0788C10.3494 11.0788 9.78299 10.8442 9.3654 10.4266C8.94781 10.009 8.7132 9.44262 8.7132 8.85205C8.7132 8.26148 8.94781 7.6951 9.3654 7.27751C9.78299 6.85992 10.3494 6.62531 10.9399 6.62531ZM10.9399 2.61719C12.5935 2.61719 14.1794 3.27407 15.3487 4.44334C16.5179 5.6126 17.1748 7.19846 17.1748 8.85205C17.1748 13.5282 10.9399 20.4311 10.9399 20.4311C10.9399 20.4311 4.70508 13.5282 4.70508 8.85205C4.70508 7.19846 5.36196 5.6126 6.53123 4.44334C7.70049 3.27407 9.28635 2.61719 10.9399 2.61719ZM10.9399 4.39858C9.75881 4.39858 8.62605 4.86778 7.79086 5.70297C6.95567 6.53816 6.48647 7.67092 6.48647 8.85205C6.48647 9.74275 6.48647 11.5241 10.9399 17.5007C15.3934 11.5241 15.3934 9.74275 15.3934 8.85205C15.3934 7.67092 14.9242 6.53816 14.089 5.70297C13.2538 4.86778 12.1211 4.39858 10.9399 4.39858Z" fill="#0C2842"/>
                        </svg> Location</h5>
                        <a href="#">Columbus, OH</a>
                    </li>
                </ul>
                    </form>
                </div>
            </div>
        </section>
        <section class="areascontainer container bg-gradient-blue">
            <div class="areas">
                <ul class="ullocation">
                    <li class="aos-fade">
                        <h5><svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                        <path d="M17.5082 8.58491C19.1115 10.1882 19.1115 12.6821 17.5082 14.3744L18.3989 15.2651C20.6257 13.2165 20.6257 9.83189 18.3989 7.69422L17.5082 8.58491ZM16.5285 9.56468L15.6378 10.4554C16.0831 11.0789 16.0831 11.8805 15.6378 12.504L16.5285 13.3947C17.5973 12.3258 17.5973 10.7226 16.5285 9.56468ZM12.9657 1.72656H4.05873C3.58628 1.72656 3.13318 1.91424 2.7991 2.24832C2.46503 2.58239 2.27734 3.0355 2.27734 3.50795V19.5405C2.27734 20.0129 2.46503 20.466 2.7991 20.8001C3.13318 21.1342 3.58628 21.3218 4.05873 21.3218H12.9657C13.4381 21.3218 13.8912 21.1342 14.2253 20.8001C14.5594 20.466 14.7471 20.0129 14.7471 19.5405V3.50795C14.7471 3.0355 14.5594 2.58239 14.2253 2.24832C13.8912 1.91424 13.4381 1.72656 12.9657 1.72656ZM12.9657 18.6498H4.05873V4.39865H12.9657V18.6498Z" fill="#F9F9F9"/>
                        </svg> Phone</h5>
                        <a href="tel:+17409539677">(740) 953-9677</a>
                    </li>
                    <li class="aos-fade">
                        <h5><svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                        <path d="M19.5932 6.17983C19.5932 5.20006 18.7916 4.39844 17.8118 4.39844H3.56069C2.58092 4.39844 1.7793 5.20006 1.7793 6.17983V16.8682C1.7793 17.8479 2.58092 18.6496 3.56069 18.6496H17.8118C18.7916 18.6496 19.5932 17.8479 19.5932 16.8682V6.17983ZM17.8118 6.17983L10.6862 10.6333L3.56069 6.17983H17.8118ZM17.8118 16.8682H3.56069V7.96122L10.6862 12.4147L17.8118 7.96122V16.8682Z" fill="#F9F9F9"/>
                        </svg> Email</h5>
                        <a href="mailto:contact@jls-cleaning.com">contact@jls-cleaning.com</a>
                    </li>
                    <li class="aos-fade">
                        <h5><svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                        <path d="M10.9399 6.62531C11.5305 6.62531 12.0969 6.85992 12.5145 7.27751C12.9321 7.6951 13.1667 8.26148 13.1667 8.85205C13.1667 9.14447 13.1091 9.43403 12.9972 9.70419C12.8853 9.97435 12.7213 10.2198 12.5145 10.4266C12.3077 10.6334 12.0622 10.7974 11.7921 10.9093C11.5219 11.0212 11.2324 11.0788 10.9399 11.0788C10.3494 11.0788 9.78299 10.8442 9.3654 10.4266C8.94781 10.009 8.7132 9.44262 8.7132 8.85205C8.7132 8.26148 8.94781 7.6951 9.3654 7.27751C9.78299 6.85992 10.3494 6.62531 10.9399 6.62531ZM10.9399 2.61719C12.5935 2.61719 14.1794 3.27407 15.3487 4.44334C16.5179 5.6126 17.1748 7.19846 17.1748 8.85205C17.1748 13.5282 10.9399 20.4311 10.9399 20.4311C10.9399 20.4311 4.70508 13.5282 4.70508 8.85205C4.70508 7.19846 5.36196 5.6126 6.53123 4.44334C7.70049 3.27407 9.28635 2.61719 10.9399 2.61719ZM10.9399 4.39858C9.75881 4.39858 8.62605 4.86778 7.79086 5.70297C6.95567 6.53816 6.48647 7.67092 6.48647 8.85205C6.48647 9.74275 6.48647 11.5241 10.9399 17.5007C15.3934 11.5241 15.3934 9.74275 15.3934 8.85205C15.3934 7.67092 14.9242 6.53816 14.089 5.70297C13.2538 4.86778 12.1211 4.39858 10.9399 4.39858Z" fill="#F9F9F9"/>
                        </svg> Location</h5>
                        <a href="#">Columbus, OH</a>
                    </li>
                </ul>
                <h2 class="h2areas">Areas we serve</h2>
                <div class="ulareas ulareasdesk aos-fade">
                    <ul>
                        <li>Bexley</li>
                        <li>Bellefontaine</li>
                        <li>Blacklick</li>
                        <li>Buckeye Lake</li>
                        <li>Canal Winchester</li>
                        <li>Clintonville</li>
                        <li>Columbus</li>
                    </ul><ul>
                        <li>Delaware</li>
                        <li>Fredericktown</li>
                        <li>Galena</li>
                        <li>Gahanna</li>
                        <li>Galloway</li>
                        <li>Grove City</li>
                        <li>Groveport</li>
                    </ul><ul>
                        <li>Heaton</li>
                        <li>Hilliard</li>
                        <li>Johnstown</li>
                        <li>Lancaster</li>
                        <li>Lewis Center</li>
                        <li>Logan</li>
                        <li>Lockbourne</li>
                    </ul><ul>
                        <li>Marion</li>
                        <li>Marysville</li>
                        <li>Newark</li>
                        <li>New Albany</li>
                        <li>Pataskala</li>
                        <li>Pickerington</li>
                        <li>Plain City</li>
                    </ul><ul>
                        <li>Powell</li>
                        <li>Reynoldsburg</li>
                        <li>Sunbury</li>
                        <li>Upper Arlington</li>
                        <li>Westerville</li>
                        <li>Worthington</li>
                    </ul>
                </div>
                <div class="ulareas ulareasmob aos-fade">
                    <ul>
                        <li>Bexley</li>
                        <li>Bellefontaine</li>
                        <li>Blacklick</li>
                        <li>Buckeye Lake</li>
                        <li>Canal Winchester</li>
                        <li>Clintonville</li>
                        <li>Columbus</li>
                        <li>Delaware</li>
                        <li>Fredericktown</li>
                        <li>Galena</li>
                        <li>Gahanna</li>
                        <li>Galloway</li>
                        <li>Grove City</li>
                        <li>Groveport</li>
                        <li>Heaton</li>
                        <li>Hilliard</li>
                        <li>Johnstown</li>
                    </ul><ul>
                        <li>Lancaster</li>
                        <li>Lewis Center</li>
                        <li>Logan</li>
                        <li>Lockbourne</li>
                        <li>Marion</li>
                        <li>Marysville</li>
                        <li>Newark</li>
                        <li>New Albany</li>
                        <li>Pataskala</li>
                        <li>Pickerington</li>
                        <li>Plain City</li>
                        <li>Powell</li>
                        <li>Reynoldsburg</li>
                        <li>Sunbury</li>
                        <li>Upper Arlington</li>
                        <li>Westerville</li>
                        <li>Worthington</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195657.03200191687!2d-82.990829!3d39.98295145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883889c1b990de71%3A0xe43266f8cfb1b533!2sColumbus%2C%20OH%2C%20EUA!5e0!3m2!1spt-BR!2sbr!4v1735565169838!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
    <script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
    </script>
    <script defer src="./js/jquery.min.js"></script>
    <script async src="./js/javascript.js"></script>
    <script defer src="./js/swiper-bundle.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  </body>
</html>