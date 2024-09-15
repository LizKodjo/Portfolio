<?php

$pageTitle = "Elizabeth Kodjo | Code Examples";

$codePage = "#mycode";
$scsPage = "scsscheme.php";
$aboutPage = "aboutme.php";
$projectSection = "index.php#projects";
$contactSection = "index.php#contact";

include "inc/header.php";
//$pageLink = "index.php";
$bannerSubHeading = "Code Examples";
$scrollDown = "#mycode";
?>


<!-- Main banner -->
<?php include "inc/banner.php"; ?>


<div class="main-inner">
    <!-- Code Examples -->
    <div class="container sample-intro" id="mycode">

        <div id="accordion">

            <?php include "inc/codeSnippets.php"; ?>

        </div>


        <div class="scrollUpSec">
            <h3 class="scrollTopBtn"><a href="#">Scroll up</a></h3>
        </div>
    </div>
    </main>

    <!-- Footer -->
    <?php include "inc/footer.php";