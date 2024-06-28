<?php

$pageTitle = "Elizabeth Kodjo | Web Developer";
include "inc/header.php";
$codePage = "codeexamples.php";
$bannerSubHeading = "Web Developer!";

$scrollDown = "#contact";

?>

    <main>
        <!-- Main Banner -->
        
         <?php include "inc/banner.php"; ?>

        <div class="main-inner">

            <!-- My work -->
            <div class="container mt-3 projects" id="projects">
                <div class="row myProjects">
                    <?php include "inc/projects.php"; ?>
                    <!-- <div class="card col-lg-4 col-sm-4">
                        <img class="card-img-top img-thumbnail" src="./img/netmatters.png"
                            alt="Netmatters Office">
                        <div class="card-body">
                            <h4 class="card-title">Netmatters Rebuild</h4>
                            <p class="card-text">Recreating Netmatters website.
                            </p>
                            <div class="usedLanguages">
                                <span><i class="fa-brands fa-html5"></i></span>
                                <span><i class="fa-brands fa-css3-alt"></i></span>
                                <span><i class="fa-brands fa-sass"></i></span>
                                <span><i class="fa-brands fa-js"></i></span>
                            </div>

                            <a href="https://netmatters.elizabeth-kodjo.netmatters-scs.co.uk/" target="_blank"
                                class="btn btn-primary projBtn">View Project</a>
                            <a href="https://github.com/LizKodjo/Netmatters-HTML.git" target="_blank"
                                class="btn btn-primary codeBtn">View code</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-sm-4 proj-two">
                        <h3 class="placeholder-title">Coming Soon!!!</h3>
                        <img class="card-img-top img-thumbnail card-two" src="./img/arrayPage.png" alt="JS Array">
                        <div class="card-body">
                            <h4 class="card-title">Random Pictures</h4>
                            <!-- <p class="card-text">Coming Soon!!!</p> -->
                            <!-- <p class="card-text">Assigning pictures to emails.</p>
                            <div class="usedLanguages">
                                <span><i class="fa-brands fa-html5"></i></span>
                                <span><i class="fa-brands fa-css3-alt"></i></span>
                                <span><i class="fa-brands fa-sass"></i></span>
                                <span><i class="fa-brands fa-js"></i></span>
                            </div>

                            <a href="https://js-array.elizabeth-kodjo.netmatters-scs.co.uk/" target="_blank"
                                class="btn btn-primary projBtn">View Project</a>
                            <a href="https://github.com/LizKodjo/Array-Project.git" target="_blank"
                                class="btn btn-primary codeBtn">View code</a>
                        </div> -->
                    <!-- </div>
                    <div class="card col-lg-4 col-sm-4 proj-three">
                        <!-- <h3 class="placeholder-title">Coming Soon!!!</h3> -->
                        <!-- <img class="card-img-top img-thumbnail card-three" src="./img/contactUs.PNG"
                            alt="Netmatters page">
                        <div class="card-body">
                            <h4 class="card-title">Contact Us Rebuild</h4>
                            <p class="card-text">Rebuilding Netmatters page with PHP</p>
                            <!-- <p>Using the following:</p> -->
                            <!-- <div class="usedLanguages"> --> 
                                <!-- <span><i class="fa-brands fa-html5"></i></span>
                                <span><i class="fa-brands fa-css3-alt"></i></span>
                                <span><i class="fa-brands fa-sass"></i></span>
                                <span><i class="fa-brands fa-js"></i></span>
                                <span><i class="fa-brands fa-php"></i></span>
                            </div>
                            <a href="#" class="btn btn-primary projBtn">View Project</a>
                            <a href="#" class="btn btn-primary codeBtn">View code</a>
                        </div> -->
                    <!-- </div> --> 

                    <!-- <div class="card col-lg-4 col-sm-6 proj-four">
                        <h3 class="placeholder-title">Coming Soon!!!</h3>
                        <img class="card-img-top img-thumbnail card-four" src="./img/netmatters.png"
                            alt="Netmatters page">
                        <div class="card-body">
                            <h4 class="card-title">Project Four</h4>
                            <p class="card-text">Coming Soon!!!</p>
                            <p>Using the following:</p>
                            <div class="usedLanguages">
                                <span><i class="fa-brands fa-html5"></i></span>
                                <span><i class="fa-brands fa-css3-alt"></i></span>
                                <span><i class="fa-brands fa-sass"></i></span>
                                <span><i class="fa-brands fa-js"></i></span>
                            </div>
                            <a href="#" class="btn btn-primary projBtn">View Project</a>
                        </div>
                    </div> -->
                    <!-- <div class="card col-lg-4 col-sm-6 proj-five">
                        <img class="card-img-top img-thumbnail card-five" src="./img/netmatters.png"
                            alt="Netmatters page">
                        <div class="card-body">
                            <h4 class="card-title">Project Five</h4>
                            <p class="card-text">Coming Soon!!!</p>
                            <p>Using the following: </p>
                            <div class="usedLanguages">
                                <span><i class="fa-brands fa-html5"></i></span>
                                <span><i class="fa-brands fa-css3-alt"></i></span>
                                <span><i class="fa-brands fa-sass"></i></span>
                                <span><i class="fa-brands fa-js"></i></span>
                            </div>
                            <a href="#" class="btn btn-primary projBtn">View Project</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-sm-6 proj-six">
                        <img class="card-img-top img-thumbnail card-six" src="./img/netmatters.png"
                            alt="Netmatters page">
                        <div class="card-body">
                            <h4 class="card-title">Project Six</h4>
                            <p class="card-text">Coming Soon!!!</p>
                            <p>Using the following: </p>
                            <div class="usedLanguages">
                                <span><i class="fa-brands fa-html5"></i></span>
                                <span><i class="fa-brands fa-css3-alt"></i></span>
                                <span><i class="fa-brands fa-sass"></i></span>
                                <span><i class="fa-brands fa-js"></i></span>
                            </div>
                            <a href="#" class="btn btn-primary projBtn">View Project</a>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- Contact details and form -->
            <div class="container contact" id="contact">
                <!-- Get in touch -->
                <div class="col-sm-5 getintouch">
                    <h1>Get In Touch</h1>
                    <p>For any further information, please do not hesitate to call or email me on my details below:</p>
                    <p><span><i class="fa-solid fa-mobile-screen"></i></span><a class="telLink"
                            href="tel:+447394705450"> 07394 705450</a></p>
                    <p><span><i class="fa-regular fa-envelope"></i></span><a class="emailLink"
                            href="mailto:elizabeth.kodjo@yahoo.com"> elizabeth.kodjo@yahoo.com</a></p>
                </div>
                <!-- Contact Form -->
                <div class="col-sm-7">
                    <form class="form" id="form" method="POST">
                        <div class="mb-3 mt-3">
                            <div class="row formnames">
                                <div class="col-sm-6 input-control">
                                    <label for="fname">First Name *:</label>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name*"
                                        name="fname">
                                    <small class="errorMsg"></small>
                                </div>
                                <div class="col-sm-6 input-control">
                                    <label for="lname">Last Name *:</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name*"
                                        name="lname">
                                    <small class="errorMsg"></small>
                                </div>
                            </div>
                            <div class="mb-3 input-control">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="email" placeholder="Email Address"
                                    name="email">
                                <small class="errorMsg"></small>
                            </div>
                            <div class="mb-3 input-control">
                                <label for="phone">Phone:</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Phone number"
                                    name="phone">
                                <small class="errorMsg"></small>
                            </div>
                            <div class="mb-3 input-control">
                                <label for="message">Message:</label>
                                <textarea class="form-control" rows="5" id="message" name="message"></textarea>
                                <small class="errorMsg"></small>
                            </div>
                            <button type="submit" class="btn btn-primary submitbtn" ">Submit</button>
                            <p class=" errorMsg"></p>

                        </div>
                    </form>
                </div>
            </div>
            <div class="container scrollUpSec">
                <h3 class="scrollTopBtn"><a href="#">Scroll up</a></h3>
            </div>
        </div>
    </main>

    <!-- footer -->
   <?php include "inc/footer.php";