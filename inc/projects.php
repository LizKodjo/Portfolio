<?php


// Get information from database
function getProjectDetails() {
    include('dbconnect.php');

    try {
        //query table
        $projects = $db->query("SELECT * FROM myprojects ORDER BY createdBy");
        $allprojects = $projects->fetchAll();
        // echo "Connected to table<br>";

        // print_r($allprojects);
        
        return $allprojects;
        
        
    } catch (PDOException $e) {
        echo "Unable to get information from table: " . $e->getMessage();
        exit;
    }
}

//getProjectDetails();

function projectCards($projectImg, $projectImgAlt, $projectTitle, $projectSubTitle, $projExtraLang, $projectURL, $projectGitHub) {
    return '
    <div class="card col-lg-4 col-sm-4">
        <img class="card-img-top img-thumbnail" src="' .htmlspecialchars($projectImg) .'" alt="' . htmlspecialchars($projectImgAlt) .'">
            <div class="card-body">
                <h4 class="card-title"> ' . htmlspecialchars($projectTitle) . '</h4>
                <p class="card-text">' . htmlspecialchars($projectSubTitle) . '</p>
                <div class="usedLanguages">
                    <span><i class="fa-brands fa-html5"></i></span>
                    <span><i class="fa-brands fa-css3-alt"></i></span>
                    <span><i class="fa-brands fa-sass"></i></span>
                    <span><i class="fa-brands fa-js"></i></span>
                    <span><i class="'. htmlspecialchars($projExtraLang) . '"></i></span>
                
                </div>
                <a href="' . htmlspecialchars($projectURL) . '" target="_blank"
                                class="btn btn-primary projBtn">View Project</a>
                <a href="' . htmlspecialchars($projectGitHub) . '" target="_blank"
                                class="btn btn-primary codeBtn">View code</a>
            </div>
        </div>
    ';
}

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