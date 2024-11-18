<?php
include 'Model/database.php';
include 'Model/contact.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aissaoui Services</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="photo/icon.ico">
</head>

<body>
    <div class="preloader" id="snackbar">
        <h1>
            <span class="bracket">{</span>
            <span class="point"></span>
            <span class="point"></span>
            <span class="point"></span>
            <span class="bracket">}</span>
        </h1>
    </div>
    <!--PRELOADER END-->
    <!-- nav bar  -->
    <header id="head">
        <nav>
            <img src="photo/rr.svg" alt="logo">
            <ul id="action">
                <li><a href="#main">Home</a></li>
                <li><a href="#Projects">Projects</a></li>
                <li><a href="#Technologies">Technologies</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>
            <div id="menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- end nav bar -->

    <!-- section head-->
    <section id="main" data-aos="fade-right">
        <div class="para">
            <h3>Hello, i’m</h3>
            <h2>Mouad Aissaoui</h2>
            <p>Hi, I'm Mouad, a dedicated junior developer passionate about <br> merging technology and creativity. I am
                actively honing my skills <br> to contribute to the development of innovative solutions and visually
                <br> appealing designs.</p>
            <a href="photo/CV.pdf"><i class="fa-solid fa-file" style="color: #ffffff;"></i> Dawloand Cv</a>
            <a class="projects" href="#Projects"><i class="fa-solid fa-eye" style="color: #ffffff;"></i> Projects</a>
        </div>

        <div class="logo">
            <img src="photo/support.svg" alt="Resume Illustration" loading="lazy">
        </div>
    </section>
    <!-- end section head -->

    <!-- section about me  -->
    <section id="About" class="about-me">
        <h1>About Me</h1>

        <div class="text">
            <img src="photo/boy.svg" alt="About Us Illustration">
            <h2><span>Let's Get </span>To Know More About Me</h2>
            <p> Hi, I'm Mouad, a dedicated junior developer passionate about <br>
                merging technology and creativity. I am actively honing my skills <br>
                to contribute to the development of innovative solutions and visually <br>
            </p>
        </div>
    </section>
    <!-- end section about me -->

    <!-- section about me -->
    <section id="Skills" class="Skills">
        <h1>Skills</h1>

        <div id="skil" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" class="Countainer">
            <div class="cart-1">
                <i class="fa-solid fa-pencil"></i>
                <h2>Front-End Wizard</h2>
                <p>Translate Your Design Into Code Of High Quality</p>
            </div>

            <div class="cart-2">
                <i class="fa-solid fa-server"></i>
                <h2>Back-End Junior</h2>
                <p>Builds Powerful Back-End Solutions With PHP, Laravel.</p>
            </div>

            <div class="cart-3">
                <i class="fa-solid fa-database"></i>
                <h2>Database Management</h2>
                <p>Manages And Optimizes Databases With Expertise In MySQL, SQL</p>
            </div>

            <div class="cart-4">
                <i class="fa-solid fa-shield-halved"></i>
                <h2>Security Measures</h2>
                <p>Enforces Security With Encryption, Authentication, And Backups For A Robust Database.</p>
            </div>
        </div>

        <div class="tech" id="Technologies">
            <h2>Technologies</h2>
            <div class="longa">
                <img class="aos-init aos-animate" src="photo/css.svg" alt="">
                <img class="aos-init aos-animate" src="photo/html.svg" alt="">
                <img class="aos-init aos-animate" src="photo/js.svg" alt="">
                <img class="aos-init aos-animate" src="photo/bootstrap.svg" alt="">
                <img class="" src="photo/php.svg" alt="">
                <img src="photo/mysql.svg" alt="">
                <img src="photo/laravel.svg" alt="svg">



            </div>
        </div>
    </section>
    <!-- end section about me  -->

    <section id="Projects" class="projects" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <h2>Projects</h2>
        <div class="Counti">

            <div class="cart-v1">
                <img src="photo/coffe.png" alt="svg">
                <h3><span>“</span>Bean Scene<span>”</span></h3>
                <p>Project Description Project Description Project Description <br>Project Description Project
                    Description </p>
                <hr>
                <div class="flex">
                    <img src="photo/html.svg" alt="svg">
                    <img src="photo/css.svg" alt="svg">
                    <img src="photo/bootstrap.svg" alt="svg">
                    <img src="photo/js.svg" alt="svg">
                </div>

            </div>

            <div class="cart-v1">
                <img src="photo/hotel.png" alt="svg">
                <h3>
                    <h3><span>“</span>Gestion Des Reservation<span>”</span></h3>
                </h3>
                <p>Project Description Project Description Project Description <br>Project Description Project
                    Description </p>
                <hr>
                <div class="flex">
                    <img src="photo/html.svg" alt="svg">
                    <img src="photo/css.svg" alt="svg">
                    <img src="photo/php.svg" alt="svg">
                    <img src="photo/bootstrap.svg" alt="svg">
                    <img src="photo/mysql.svg" alt="svg">
                    <img src="photo/js.svg" alt="svg">
                    <img src="photo/laravel.svg" alt="svg">



                </div>


            </div>

            <div class="cart-v1">
                <img src="photo/gestion des stock.png" alt="svg">
                <h3><span>“</span>Gestion Des Stock <span>”</span></h3>
                <p>Project Description Project Description Project Description <br>Project Description Project
                    Description </p>
                <hr>
                <div class="flex">

                    <img src="photo/html.svg" alt="svg">
                    <img src="photo/css.svg" alt="svg">
                    <img src="photo/php.svg" alt="svg">
                    <img src="photo/bootstrap.svg" alt="svg">
                    <img src="photo/mysql.svg" alt="svg">
                    <img src="photo/js.svg" alt="svg">
                    <img src="photo/laravel.svg" alt="svg">
                </div>
            </div>
        </div>



        </div>
    </section>

    <footer id="contact">
        <div data-aos="flip-up" class="cont">
            <h2>Contact Us</h2>
            <h1 data-aos="zoom-out-right">Let’s Discuss Your <span>Project</span></h1>
            <p>Our phone lines are open now. Call us anytime.</p>

            <div class="contact-info">



                <form method="POST">
                    <input type="text" name="nom" placeholder="Your Name" required>

                    <input type="email" id="email" name="email" placeholder="Your Email" required>

                    <textarea id="message" name="contact" rows="4" placeholder="Your Contact" required></textarea>

                    <button name="B1" type="submit">Submit</button>
                </form>

                <!-- Toast Notification HTML -->
                <div id="toast-container" class="toast-container">
                    <div id="toast" class="toast"></div>
                </div>





                <div class="adreese">
                    <p>Satisfied with me? Please contact me</p>
                    <h1>Connect with me: <a href="https://www.instagram.com/mouadsasoki/?hl=ar"><img
                                style="width: 30px;" src="photo/Instagram_icon.png" alt=""></a>
                        <a href="https://web.facebook.com/MouadAissaoui2003/"><img style="width: 30px;"
                                src="photo/fb.png" alt="#"></a>
                        <a href="https://www.linkedin.com/in/mouad-aissaoui-964736252/"><img style="width: 30px;"
                                src="photo/linkedin_icon-icons.com_65929 (2).png" alt=""></a>
                        <a style="width: 30px;" href="https://wa.me/qr/NSAY6VFE223ID1"><i class="fa-brands fa-whatsapp"
                                style="color: #04ff4b;"></i></a>
                        <a href="Github"><i class="fa-brands fa-github" style="width: 30px;"
                                style="color: #4000ff;"></i></a>
                    </h1>
                </div>
            </div>
            <hr>

        </div>
        </div>
        <div class="copyright">

            <p>© 2023-2024 All Rights Reserved</p>
            <h4>Developed by Mouad Aissaoui</h4>
            <a href="#head" id="back-to-top" title="Back to top">⬆</a>


        </div>
    </footer>



</body>

</html>
<!-- js -->
<script src="js/preloader.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init();</script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="js/dropdawn.js"></script>
<script src="js/scrool.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="js/toast-message.js"></script>
<!-- end js -->