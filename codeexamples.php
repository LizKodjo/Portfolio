<?php

$pageTitle = "Elizabeth Kodjo | Code Examples";
include "inc/header.php";
$pageLink = "index.php";
$bannerSubHeading = "Code Examples";
$scrollDown = "#mycode";
?>

    <main>
        <!-- Main banner -->
         <?php include "inc/banner.php"; ?>


        <div class="main-inner">
            <!-- Code Examples -->
            <div class="container sample-intro">

                <div class="container intro" id="mycode">

                    <h1 class="code-title">Typing Effect</h1>

                </div>

                <button type="button" class="btn btn-info codeEg" data-toggle="collapse" data-target="#code-intro">View
                    More...</button>
                <div id="code-intro" class="collapse">
                    <div>
                        <p>
                            To create a typing effect on the main title that shows on all my pages, I used JavaScript.
                            Before that, I created the main title, using HTML and CSS.
                        </p>
                        <p>
                            The first step I took was to create an empty array. This would serve as a 'box' to collect
                            the letters after I had 'split' them up, to get the individual characters.<br>
                            My next step was to fetch the element storing the main title, using the split() to extract
                            the characters
                            which I then stored in the empty array I had created earlier.</p>
                        <p>Using a 'for' loop, I viewed the characters individually and pushed them into a
                            second empty array I had created. Adding a timer with the setTimeout(), slowed down when the
                            characters showed on the screen.
                        </p>

                        <p>This gives the main heading the typing effect.

                        </p>
                    </div>
                    <div class="container code-sample">
                        <pre>
        <code class="language-js line-numbers code-exp">
            // Steps to extract letters, loop and show each character on the page.

            // Create an empty array
            let testArray = [];
            // Fetch the heading
            let pageTitle = document.querySelector('.main-title').textContent;
            // console.log(pageTitle + ' = text from the title');
            // Split the information received into the array
            testArray = pageTitle.split('');
            // console.log(testArray + ' = letter to use later');
            // let testResult = document.querySelector('.type-result');
            let testResult = [];
            
            // Make sure the is at least a letter on the page to keep the box from moving
            document.querySelector('.main-title').innerText = testArray[0];
            
            
            for (let i = 0; i < testArray.length; i++) {
                // Set time 
                setTimeout(function () {
                    // console.log(testArray[i] + ' = current letter we are adding to title');
                    // Save the characters in the array to print on screen
                    testResult.push(testArray[i]);
                    document.querySelector('.main-title').innerText = testResult.join('');
                    // console.log(testResult[i]);
            
                }, (i + 1) * 250);
            }
            </code>                                
        </pre>
                    </div>
                </div>

                <!-- <div class="container intro" id="colorMap"> -->
                <h1 class="code-title">Color Map</h1>
                <!-- </div> -->
                <button type="button" class="btn btn-info codeIntro1" data-toggle="collapse"
                    data-target="#code-intro1">View
                    More...</button>
                <div id="code-intro1" class="collapse">
                    <div>
                        <p>
                            Whilst recreating the Netmatters website, I noticed there were a
                            lot of standard colors which were used on almost every page.
                        </p>
                        <p>
                            During my studies, I remembered a lesson that taught how to
                            use a 'map' to create different and frequently used color shades to
                            help the developers work get a bit easier instead of always having to
                            remember the name of a color.
                        </p>
                        <p>
                            I already had my colors saved as variables, named after the
                            departments of the company and simply mapped them and
                            created a mixin, which takes each color and would
                            assign it as the background-color of any button it is prepened to.
                        </p>
                    </div>
                    <div class="container code-sample">
                        <pre>
    <code class="language-js line-numbers code-exp">
        // Main colors
            $section-colors: (
                bespoke : $bespoke,
                digital : $digital-market,
                it-support : $it-support,
                telecoms : $telecoms,
                web : $web-design,
                cyber : $cyber,
                developer : $developer,
                consent: $consent,
                consent-change: $consent-change
            );

            // mixin for colors
            @mixin bg-colors($map) {
                @each $theme, $color in $map {
                    &--#{$theme} {
                        background-color: $color;
                    }
                }
            }
            
            //To use this with the btn element
            .btn {
                @include bg-colors($section-colors);
            }
    </code>
</pre>
                    </div>
                </div>

                <!-- <div class="container intro" id="colorMap"> -->
                    <h1 class="code-title">Database setup</h1>
                    <!-- </div> -->
                    <button type="button" class="btn btn-info codeIntro2" data-toggle="collapse"
                        data-target="#code-intro2">View
                        More...</button>
                    <div id="code-intro2" class="collapse">
                        <div>
                            <p>
                                I used PHP to loop through news articles
                            </p>
                            <p>
                                Coming soon
                            </p>
                            <p>
                                Coming soon
                            </p>
                        </div>
                        <div class="container code-sample">
                            <pre>
        <code class="language-js line-numbers code-exp">
            // Main colors
                Copy code here
        </code>
    </pre>
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