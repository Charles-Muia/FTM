<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitness By Mbijiwe | Home</title>

<!--###---FAVICON------------------------------------------------------------------------------------------------------>
    <link rel="icon" type="image" href="Gallery/Logo.jpg">

<!--###---CSS-FILE----------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">

<!--###---CDN-LINKS---------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<!--###---GOOGLE-FONTS------------------------------------------------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuggles&family=Lato&family=Mooli&family=News+Cycle&family=Orbitron&family=Quicksand&family=Ubuntu&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">

</head>
    <body>
<!--###---NAV-BAR------------------------------------------------------------------------------------------------------>

    <nav id="home">
                <img src="Gallery/Logo.jpg" alt="">
                    <ul>
                        <li><a href="#home">home</a></li>
                        <li><a href="#abt">about us</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="#blog">blog</a></li>
                        <li><a href="#">faqs</a></li>
                        <li><a href="#ContactUS">contact us</a></li>
                    </ul>
        <hr>
        <hr>
    </nav>

<!--###---ABOUT-------------------------------------------------------------------------------------------------------->

    <section class="about" id="abt">
        <div class="main">
            <img src="Gallery/Stay-Fit.jpg" alt="">
                <div class="all-text">
                    <h4>about us</h4>
                        <h1>health & fitness is a lifestyle.</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias commodi, consequatur corporis
                                cum deleniti doloremque ea est fugit harum iste minima nobis provident
                                quasi recusandae similique tempora veniam voluptatem voluptatibus?
                                quasi recusandae similique tempora veniam voluptatem voluptatibus?</p>
                                    <div class="btn">
                                        <button type="button">our team</button>
                                        <button type="button">learn more</button>

                                    </div>
                </div>
        </div>
    </section>

<!--###---BMI-C-------------------------------------------------------------------------------------------------------->

    <section class="BMI calculate">
        <div class="calculate_container BMI_cont grid">
            <div class="calculate_content">
                <div class="BMI_title">
                    <h1>calculate your BMI</h1>
                </div>

                    <p class="BMI_description">
                        BMI (Body Mass Index) is a medical screening tool that
                        measures the ratio of your height to your weight to estimate the amount of body fat you have.
                    </p>

                <form action="" class="BMI_form" id="BMI__form">
                    <div class="calculate_box">
                        <input type="number" placeholder="Enter Your Height" class="calculate_input" id="calculate_cm">
                        <label for="" class="calculate_lable">cm</label>
                    </div>
                    <div class="calculate_box">
                        <input type="number" placeholder="Enter Your Weight" class="calculate_input" id="calculate_kgs">
                        <label for="" class="calculate_lable">kg's</label>
                    </div>

                    <button type="submit" class="button button_flex">
                        Click To Calculate <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </form>

                    <p class="calculate--message" id="calculate_message">

                    </p>
            </div>

<!--            <img src="" alt="">-->
            
        </div>
    </section>

<!--###---BLOG--------------------------------------------------------------------------------------------------------->

    <section class="sec-blog" id="blog">
        <div class="heading">
            <span>our blog</span>
                <h3>latest posts</h3>
        </div>

            <div class="blog_cont">
                <div class="box">
                    <div class="box-img">
                        <img src="Gallery/Jog.jpg" alt="blog">
                    </div>

                        <div class="text">
                            <span> 05/10/2023 &#160; <i class="fa-solid fa-grip-lines-vertical"></i> &#160; Fitness </span>
                                <a href="#" class="title">Lorem ipsum dolor sit amet</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        At dolore enim harum optio quasi quidem ratione tempora. Ab, deserunt soluta!</p>

                                            <a class="read_more" href="#"> read more </a>
                        </div>

                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="Gallery/Pullups.jpg" alt="blog">
                    </div>

                    <div class="text">
                        <span> 05/10/2023 &#160; <i class="fa-solid fa-grip-lines-vertical"></i> &#160; Fitness </span>
                        <a href="#" class="title">Lorem ipsum dolor sit amet</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            At dolore enim harum optio quasi quidem ratione tempora. Ab, deserunt soluta!</p>

                        <a class="read_more" href="#"> read more </a>
                    </div>

                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="Gallery/Muscle.jpg" alt="blog">
                    </div>

                    <div class="text">
                        <span> 05/10/2023 &#160; <i class="fa-solid fa-grip-lines-vertical"></i> &#160; Fitness </span>
                        <a href="#" class="title">Lorem ipsum dolor sit amet</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            At dolore enim harum optio quasi quidem ratione tempora. Ab, deserunt soluta!</p>

                        <a class="read_more" href="#"> read more </a>
                    </div>

                </div>
            </div>

    </section>

<!--###---CONTACT-US--------------------------------------------------------------------------------------------------->

    <section class="Contact-US-Sec" id="ContactUS">
        <div class="Contact-US">
            <div class="Contact-US-Title">
                <h2>get in touch</h2>
            </div>

                <div class="Contact-box">
                    <div class="Contact form">
                        <h3>talk to us</h3>
                            <form action="">
                                <div class="contBox">
                                    <div class="row50">
                                        <div class="inputBox">
                                            <span>first name</span>
                                                <input type="text" placeholder="Enter Your First Name">
                                        </div>
                                                <div class="inputBox">
                                                    <span>last name</span>
                                                    <input type="text" placeholder="Enter Your Last Name">
                                                </div>
                                    </div>
                                        <div class="row50">
                                            <div class="inputBox">
                                                <span>email address</span>
                                                    <input type="text" placeholder="Enter your Email Address">
                                            </div>
                                            <div class="inputBox">
                                                <span>mobile No.</span>
                                                <input type="text" placeholder="Enter Your Mobile No.">
                                            </div>
                                        </div>

                                    <div class="row100">
                                        <div class="inputBox">
                                            <span>message</span>
                                            <textarea placeholder="Type Your Message Here ................................. "></textarea>
                                        </div>
                                    </div>

                                    <div class="row100">
                                        <div class="inputBox">
                                            <input type="submit" value="click to send">
                                        </div>
                                    </div>

                                </div>
                            </form>
                    </div>

                        <div class="Contact info">
                            <h3>find us</h3>
                            <div class="infoBox">
                                <div>
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                        <p> +254 Nairobi, KE (East Africa) </p>
                                </div>
                                    <div>
                                        <span><i class="fa-solid fa-envelope"></i></span>
                                        <a href="#">info@ftm.com</a>
                                    </div>
                                    <div>
                                        <span><i class="fa-solid fa-phone"></i></span>
                                        <a href="#">+254 720 000 000</a>
                                    </div>

                                        <ul class="social-media-icons">
                                            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                                            <li><a href="#"><i class="fa-brands fa-threads"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        </ul>

                            </div>
                        </div>

                        <div class="Contact map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8981.538432524514!2d37.60708051741044!3d55.751820745316586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a50b315e573%3A0xa886bf5a3d9b2e68!2sThe%20Moscow%20Kremlin!5e0!3m2!1sen!2ske!4v1695976072693!5m2!1sen!2ske"
                                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                </div>
        </div>
    </section>
<hr>

<!--###---BANNER------------------------------------------------------------------------------------------------------->

    <section class="banner-sec">
            <div class="container">
                <div class="banner-sec-image">
                    <img src="Gallery/Banner_7.png" alt="Banner">
                        <div class="banner-sec-text">
                            <strong>
                                <span>Health,Fitness </span> <br> & Nutrition
                            </strong>
                                <p>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit.
                                    Facilis, fugit.</p>
                                        <a href="#ContactUS">Talk To Us</a>
                        </div>
                </div>
            </div>
    </section>

<!--###---FOOTER------------------------------------------------------------------------------------------------------->
    <section class="foot-sec">
        <footer>
            <div class="footer-con">
                <div class="sec about-us">
                    <h2>about us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Adipisci dignissimos esse ipsam iusto molestias, nisi quam quibusdam sunt?
                            A accusantium et fugiat libero nisi numquam similique tempore, totam veniam voluptas?</p>

                    <ul class="social-icons">
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="#"><i class="bi bi-twitter-x"></i></a></li>
                    </ul>
                </div>

                    <div class="sec quick-links">
                        <h2>quick links</h2>
                            <ul>
                                <li><a href="#home">home</a></li>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#blog">blog</a></li>
                                <li><a href="#">faqs</a></li>
                                <li><a href="#ContactUS">contact us</a></li>
                            </ul>
                    </div>

                        <div class="sec contact-zone">
                            <h2>find us</h2>
                                <ul class="contact-list">
                                    <li>
                                        <span><i class="fa-solid fa-location-dot"></i></span>
                                        <span> Global Village, +254  <br> Magical KE, EA </span>
                                    </li>

                                    <li>
                                        <span><i class="fa-solid fa-phone"></i></span>
                                        <span><a href="T:0123456789">+254 724 563 163</a>
                                            <br> <a href="Tel:0123456789">+254 724 563 163</a></span>
                                    </li>

                                    <li>
                                        <span><i class="fa-solid fa-envelope"></i></span>
                                        <span><a href="MailTo:@.com">info@ftm.com</a></span>
                                    </li>
                                </ul>
                        </div>

            </div>
        </footer>
                            <div class="copyright-sec"> <br>
                                <p> Copyright &#169 2023 <i class="bi bi-dot"></i> Fitness By Mbijiwe <i class="bi bi-dot"></i> All rights reserved <br>
<!--                                    <br> FITNESS <i class="bi bi-dot"></i> HEALTH <i class="bi bi-dot"></i> NUTRITION-->
                                </p> <br>
                            </div>
    </section>

<!--###---JS----------------------------------------------------------------------------------------------------------->
        <!--SMOOTH-SCROLL-JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1200, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>

        <!--ION-ICONS-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <!--BMI-CALCULATOR-JS-->
    <script>
        const BMIForm = document.getElementById('BMI__form'),
            CalculateCm = document.getElementById('calculate_cm'),
            CalculateKg = document.getElementById('calculate_kgs'),
            CalculateMessage = document.getElementById('calculate_message')

        const CalculateBMI = (e) => {
                e.preventDefault()

            //Check if there is any entry / values
            if ()
        }

        BMIForm.addEventListener('submit', CalculateBMI)

    </script>

    </body>
</html>

