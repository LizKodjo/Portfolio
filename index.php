<?php


$bannerSubHeading = "Web Developer!";
$pageTitle = "Elizabeth Kodjo | Web Developer";

$codePage = "codeexamples.php";
$scsPage = "scsscheme.php";
$aboutPage = "aboutme.php";
$projectSection = "#projects";
$contactSection = "#contact";

include "inc/header.php";


$scrollDown = "#contact";


// Define variables for form data
$firstname = $lastname = $email = $phone = $message = "";
$firstnameErr = $lastnameErr = $emailErr = $phoneErr = $messageErr = $error_message = $formSubmitted = "";




?>

    <main>
        <!-- Main Banner -->
        
         <?php include "inc/banner.php"; ?>

        <div class="main-inner">

            <!-- My work -->
            <div class="container mt-3 projects" id="projects">
                <div class="row myProjects">
                    <?php include "inc/projects.php"; ?>
                </div>
            </div>
            <!-- Contact details and form -->
            <div class="container contact" id="contact">
                <!-- Get in touch -->
                <div class="col-sm-5 getintouch">
                    <h1>Get In Touch</h1>
                    <p>For any further information, please do not hesitate to call or email me using my details below:</p>
                    <p><span><i class="fa-solid fa-mobile-screen"></i></span><a class="telLink"
                            href="tel:+447394705450"> 07394 705450</a></p>
                    <p><span><i class="fa-regular fa-envelope"></i></span><a class="emailLink"
                            href="mailto:elizabeth.kodjo@yahoo.com"> ellizakodjo@outlook.com</a></p>
                </div>
                <!-- Contact Form -->
                <div class="col-sm-7">
                    <form class="form" id="form" method="POST" action="inc/projectContacts.php">
                    
                        <div class="mb-3 mt-3">
                            <div class="row formnames">
                                <div class="col-sm-6 input-control">
                                    
                                <span class="error"><?= $error_message; ?></span>
                                    <label for="fname">First Name <small><em>*</em></small></label>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name*"
                                        name="fname" value="<?= $firstname ?>">
                                    <small class="errorMsg"><?=$firstnameErr ?></small>                           
                                    
                                </div>
                                <div class="col-sm-6 input-control">
                                    <label for="lname">Last Name <small>*</small></label>
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name*"
                                        name="lname" value="<?=$lastname ?>">
                                    <small class="errorMsg"><?=$lastnameErr ?></small>
                                </div>
                            </div>
                            <div class="mb-3 input-control">
                                <label for="email">Email <small>*</small></label>
                                <input type="text" class="form-control" id="email" placeholder="Email Address"
                                    name="email" value="<?=$email ?>">
                                <small class="errorMsg"><?=$emailErr ?></small>
                            </div>
                            <div class="mb-3 input-control">
                                <label for="phone">Phone <small>*</small></label>
                                <input type="tel" class="form-control" id="phone" placeholder="Phone number"
                                    name="phone" value="<?= $phone ?>">
                                <small class="errorMsg"><?=$phoneErr ?></small>
                            </div>
                            <div class="mb-3 input-control">
                                <label for="message">Message <small>*</small></label>
                                <textarea class="form-control" rows="5" id="message" name="message" value="<?=$message ?>"></textarea>
                                <small class="errorMsg"><?=$messageErr ?></small>
                            </div>
                            <button type="submit" class="btn btn-primary submitbtn" name="submit">Submit</button>
                            <p class="errorMsg"></p>
                        </div>
                        <span class="success"><?= $formSubmitted; ?></span>
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