<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Adam Leppky</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/favicon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/colors.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="scripts/color-changer.js"></script>
        <?php
        include("scripts/connectToDatabase.php");
        include("scripts/contentAccessor.php");
        ?>
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-light navbar-expand-xl fixed-top" id="navbar-id">
            <div class="container-fluid navbar-container">
                <a class="navbar-brand" href="#home">Adam Leppky - Software Engineer</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="#experience">EXPERIENCE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#education">EDUCATION</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">PROJECTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
                        <!-- COLOR SCHEME TOGGLE -->
                        <!-- <li>
                            <div class="color-scheme-dropdown btn-group dropstart">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                  Color Scheme
                                </button>
                                <ul class="dropdown-menu">
                                  <li><button class="dropdown-item" onclick="onDarkMode()">Dark Mode</button></li>
                                  <li><button class="dropdown-item" onclick="onLightMode()">Light Mode</button></li>
                                </ul>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Home -->
        <div id="home" class="container-fluid home-container text-center">
            <!-- <img class="home-bg-image" src="assets/animated-bg-1.gif" draggable="false" /> -->
            <div class="home-content">
                <h1 class="home-name">Adam Leppky</h1>
                <h2 class="home-title">Software Engineer</h2>
            </div>
        </div>

        <div class="divider-container-gray">
            <hr class="page-divider-white" color="red"/>
        </div>

        <!-- About -->
        <div id="about" class="container-fluid about-container text-center">
            <h3 class="margin">About</h3>
            <div class="about-content">
                <img class="images about-image" src="assets/lincoln1.jpg" />
                <div class="about-text-content">
                    <p class="about-description">Hi there! My name is Adam Leppky, and I am a software engineer from Lincoln, Nebraska. I have lived here my whole life and have always been fascinated by the world of technology. In middle school, I discovered my passion for computer programming when I learned how to edit HTML web pages to do fun things. From there, I took beginning and advanced programming classes in high school, focusing on Python and HTML/CSS, which ultimately led me to pursue a career as a software engineer.</p>
                    <p class="about-description">During my high school years, I also explored other areas of interest, including engineering, architecture, and robotics. These classes ignited my curiosity and inspired me to learn more about how things work. I discovered that I enjoy creating things from the ground up, which is why software engineering became such a natural fit for me. I love the challenge of designing and developing complex systems, and the feeling of satisfaction when a project comes to fruition.</p>
                    <p class="about-description">Now, as a software engineer, I am fortunate to be able to combine my passion for technology and my love of problem-solving into a fulfilling career. I am excited to continue learning and growing in my field, and I look forward to seeing where this journey takes me. Thank you for taking the time to get to know me a little better!</p>
                </div>
            </div>
        </div>

        <div class="divider-container-white">
            <hr class="page-divider-gray" color="red"/>
        </div>

        <!-- Experience -->
        <div id="experience" class="container-fluid experience-container text-center">    
            <h3 class="margin">Experience</h3><br>
            <div class="row justify-content-center experience-flex">
                <div class="col-sm-4 item">
                    <a href="https://www.penlink.com/" target="_blank">
                        <img class="experience-logo" src="assets/penlink-logo.png" />
                    </a>
                    <h4 class="experience-title">Software Engineer</h4>
                    <h5>Start May 2023</h5>
                    <p>I have accepted a full-time offer from PenLink as a software engineer.</p>
                </div>
                <div class="col-sm-4"> 
                    <a href="https://www.penlink.com/" target="_blank">
                        <img class="experience-logo" src="assets/penlink-logo.png" />
                    </a>
                    <h4 class="experience-title">Intern</h4>
                    <h5>2021-2023</h5>
                    <p>I worked as a Software Development Intern at PenLink for two years, where I gained experience in several projects, including internal tools, simulators, and PenLink's flagship product PLX. I have honed my skills in creating Windows applications from scratch, utilizing C# as the primary programming language. Additionally, I managed build pipelines for full-scale projects, contributing to the successful delivery of various initiatives.</p>
                </div>
                <div class="col-sm-4"> 
                    <a href="https://www.scheels.com/" target="_blank">
                        <img class="experience-logo" src="assets/scheels-logo.png" />
                    </a>
                    <h4 class="experience-title">Cashier | Customer Service | Visa Representative</h4>
                    <h5>2017-2021</h5>
                    <p>I started at Lincoln Scheels in High School as a cashier where I learned to interact with many customers on a daily basis. After I outgrew that position with experience I moved up to customer service which came with a whole new set of responsibilities. Soon after that I specialized in working in the Visa credit card booth helping customers apply for the store credit card where I remained for the rest of my time at Scheels.</p>
                </div>
            </div>
        </div>

        <div class="divider-container-gray">
            <hr class="page-divider-white" color="red"/>
        </div>

        <!-- Education -->
        <div id="education" class="container-fluid education-container text-center">
            <h3 class="margin">Education</h3>
            <div class="row justify-content-center education-flex" >
                <!-- <div class="col-sm-4 item">
                    <img class="education-image" src="assets/unl1.jpg" />
                    <h3>University of Nebraska-Lincoln</h3>
                    <h5>2019-2023</h5>
                    <h4>Bachelor's in Software Engineering</h4>
                </div> -->
                <!-- <div class="col-sm-4"> 
                    <img class="education-image" src="assets/southwest1.jpg" />
                    <h3>Lincoln Southwest High School</h3>
                    <h5>2015-2019</h5>
                    <h4>High School Diploma</h4>
                </div> -->
                <?php
                loadEducation();
                ?> 
            </div>
        </div>

        <div class="divider-container-white">
            <hr class="page-divider-gray" color="red"/>
        </div>

        <!-- Projects -->
        <div id="projects" class="container-fluid projects-container text-center">    
            <h3 class="margin">Projects</h3><br>
            <div class="row justify-content-center">
                <p>Coming Soon...</p>
            </div>
        </div>

        <div class="divider-container-gray">
            <hr class="page-divider-white" color="red"/>
        </div>

        <!-- Contact -->
        <div id="contact" class="container-fluid contact-container text-center">    
            <h3 class="margin">Contact</h3><br>
            <p class="send-message-description">Send me a message!</p>
            <form class="contact-form" id="contactForm">
                <fieldset>
                    <textarea id="message" name="message" rows="5" cols="80"></textarea>
                    <input type="submit" value="Send">
                </fieldset>
            </form>
        </div>

        <div class="divider-container-white">
            <hr class="page-divider-gray" color="red"/>
        </div>

        <!-- Footer -->
        <footer class="container-fluid footer-container text-center">
            <p>adamleppky@gmail.com</p>
        </footer>
    </body>
</html>
