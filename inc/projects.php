<?php

// Get information from database
function getProjectDetails()
{
    include 'dbconnect.php';

    try {
        //query table
        $projects = $db->query("SELECT * FROM myprojects ORDER BY createdBy");
        $allprojects = $projects->fetchAll();
        // echo "Connected to table<br>";

        //return all the information in database as an associative array        
        return $allprojects;

    } catch (PDOException $e) {
        // Display an error if there is no connection
        echo "Unable to get information from table: " . $e->getMessage();
        exit;
    }
}


function projectCards($projectImg, $projectImgAlt, $projectTitle, $projectSubTitle, $projExtraLang, $projectURL, $projectGitHub)
{
    // Create a project card for each project added to database
    return '
    <div class="card col-lg-4 col-sm-4">
        <img class="card-img-top img-thumbnail" src="' . htmlspecialchars($projectImg) . '" alt="' . htmlspecialchars($projectImgAlt) . '">
            <div class="card-body">
                <h4 class="card-title"> ' . htmlspecialchars($projectTitle) . '</h4>
                <p class="card-text">' . htmlspecialchars($projectSubTitle) . '</p>
                <div class="usedLanguages">
                    <span><i class="fa-brands fa-html5"></i></span>
                    <span><i class="fa-brands fa-css3-alt"></i></span>
                    <span><i class="fa-brands fa-sass"></i></span>
                    <span><i class="fa-brands fa-js"></i></span>
                    <span><i class="' . htmlspecialchars($projExtraLang) . '"></i></span>
                
                </div>
                <a href="' . htmlspecialchars($projectURL) . '" target="_blank"
                                class="btn btn-primary projBtn">View Project</a>
                <a href="' . htmlspecialchars($projectGitHub) . '" target="_blank"
                                class="btn btn-primary codeBtn">View code</a>
            </div>
        </div>
    ';
}

// Loop through database and assign data to function's arguments
foreach (getProjectDetails() as $project) {
    echo projectCards(
        $project["projectImg"],
        $project["projectImgAlt"],
        $project["projectTitle"],
        $project["projectSubTitle"],
        $project["projExtraLang"],
        $project["projectURL"],
        $project["projectGitHub"]
    );
}