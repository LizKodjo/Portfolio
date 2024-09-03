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
            <div class="card">
                <div class="card-header header1">
                    <a href="#collapseOne" class="btn" data-bs-toggle="collapse">Typing Effect</a>
                </div>
                <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                    <div class="card-body">
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
                </div>
            </div>

            <div class="card">
                <div class="card-header header2">
                    <a href="#collapseTwo" class="collapsed btn" data-bs-toggle="collapse">Color Map</a>
                </div>
                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div>
                            <p>
                                To connect my contact form to my database, I used SQL and
                                PHP. The form was created using HTML, I initially used Javascript for
                                client-side validation, but added server-side validation to ensure
                                data was secure and santized before saving in the database.
                            </p>
                            <p>
                                I used prepared statements to prevent any SQL injections and also filtered
                                all
                                incoming data.
                            </p>
                            <p>
                                Below is the try/catch I used to save information to my database.
                            </p>
                        </div>
                        <div class="container code-sample">
                            <pre>
        <code class="language-js line-numbers code-exp">
            // Connecting to database
            try {
        require_once "dbconnect.php";
            
        
        
        // Sending query to database
        $stmt = $db->prepare("INSERT INTO portfolio (firstname, lastname, email, phone, message)
        VALUES(:firstname, :lastname, :email, :phone, :message)");
        // Binding data before sending to database securely
        $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
    
        $stmt->execute();
        
        header("Location: ../index.php");
    
            die();
        
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }
    
        </code>
                                </pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header header3">
                    <a href="#collapseThree" class="collapsed btn" data-bs-toggle="collapse">Database Setup</a>
                </div>
                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div>
                            <p>
                                To connect my contact form to my database, I used SQL and
                                PHP. The form was created using HTML, I initially used Javascript for
                                client-side validation, but added server-side validation to ensure
                                data was secure and santized before saving in the database. </p>
                            <p>
                                I used prepared statements to prevent any SQL injections and also filtered
                                all
                                incoming data.
                            </p>
                            <p>
                                Below is the try/catch I used to save information to my database.
                            </p>
                        </div>
                        <div class="container code-sample">
                            <pre>
        <code class="language-js line-numbers code-exp">
            // Connecting to database
            try {
        require_once "dbconnect.php";
            
        
        
        // Sending query to database
        $stmt = $db->prepare("INSERT INTO portfolio (firstname, lastname, email, phone, message)
        VALUES(:firstname, :lastname, :email, :phone, :message)");
        // Binding data before sending to database securely
        $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
    
        $stmt->execute();
        
        header("Location: ../index.php");
       
       die();
        
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }
    
        </code>
    </pre>
                        </div>
                    </div>
                </div>
            </div>



            <div class="card">
                <div class="card-header header4">
                    <a href="#collapseFour" class="collapsed btn" data-bs-toggle="collapse">Generating fake data for
                        database</a>
                </div>
                <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">
                        <div>
                            <p>
                                I created my project using Laravel Herd with laravel 11. It is an amazing
                                PHP framework which has made it much easier to setup projects. I used Eloquent to
                                interact
                                with my database by inserting, deleting and updating records from tables, factories to
                                set attributes
                                for my eloquent models, etc.</p>
                            <p>
                                To help me test and make sure my adminstration panel was working correctly, I used
                                the Faker PHP library to create test data.
                            </p>
                            <p>
                                Below is the EmployeeFactory I used to create fake data, linking an employee to a
                                company.
                            </p>
                        </div>
                        <div class="container code-sample">
                            <pre>
        <code class="language-js line-numbers code-exp">
            // Setting up data for my database using the faker() library            

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::factory(),
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            // 'company' => fake()->company(),
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'user_id' => User::factory(),

        ];
    }
}

    
        </code>
    </pre>
                        </div>
                    </div>
                </div>
            </div>














        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->

    <div class="scrollUpSec">
        <h3 class="scrollTopBtn"><a href="#">Scroll up</a></h3>
    </div>
</div>
</main>

<!-- Footer -->
<?php include "inc/footer.php";