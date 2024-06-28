<?php

$pageTitle = "Elizabeth Kodjo | About Me";
include "inc/header.php";
$bannerSubHeading = "About Me";
$projectsLink = "index.php#projects";
$scrollDown = "#myinfo";
?>
    <main>
        <!-- Main banner -->
         <?php include "inc/banner.php"; ?>


        <div class="main-inner">
            <!-- Who Am I -->
            <div class="container scheme">
                <div class="container intro">
                    <h1 id="myinfo">Who am I</h1>
                    <!-- that I gained from my
                        previous work as a Test Analyst -->
                    <p>
                        I am a web developer with exceptional technical and analytical skills . I have
                        a proactive approach to work and have exceeded expectations on business-critical projects
                        leading to process improvement.

                    <p>
                        To create this website and my other websites that can be viewed <a class="workLink"
                            href="<?=$projectsLink;?>">here</a>, I used HTML and
                        CSS to create and style them respectively, then I used JavaScript to record user events and
                        change elements.

                    </p>
                </div>


                <!-- Work Experience -->

                <div class="row">
                    <div class="col-sm-6 treehouse">
                        <h2>Work Experience</h2>
                        <p>I have worked in the banking, insurance, charity and financial sectors over the years.</p>
                    </div>

                    <!-- Qualifications -->
                    <div class="col-sm-6 netmatters">
                        <h2>Qualifications</h2>
                        <p>BSc in Software Engineering</p>
                    </div>
                </div>
            </div>
            <div class="scrollUpSec">
                <h3 class="scrollTopBtn"><a href="#">Scroll up</a></h3>
            </div>
        </div>
    </main>

<!-- Footer -->
 <?php include "inc/footer.php";