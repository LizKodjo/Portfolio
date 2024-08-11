<?php

function codeSnippets()
{
    include 'dbconnect.php';

    try {
        // query table
        $code = $db->query("SELECT * FROM code_snippets");
        $allcode = $code->fetchAll();
        //echo "Connected to table<br>";

        // return information as an association array
        return $allcode;
    } catch (PDOException $e) {
        // Display an error if there is no connection
        echo "Unable to get information from table: " . $e->getMessage();
        exit;
    }
}

function displaySnippets($codeTitle, $codeIntro, $codeExp)
{
    // Create section to display code snippets

    return '
    
        <div class="container intro" id="mycode">
            <h1 class="code-title">' . htmlspecialchars($codeTitle) . ' </h1>
        </div>

        <button type="button" class="btn btn-info codeEg" data-toggle="collapse" data-target="#code-intro">View
                More...</button>
        
        <div id="code-intro" class="collapse">
            <div>
                <p>' . htmlspecialchars($codeIntro) . ' </p>
            </div>
        </div>
        <div class="container code-sample">
            <pre>
            <code class="language-js line-numbers code-exp">' . htmlspecialchars($codeExp) . ' </code>
            </pre>
        </div>
    
    ';
}

// Loop through database
foreach (codeSnippets() as $snippet) {
    echo displaySnippets(
        $snippet["codeTitle"],
        $snippet["codeIntro"],
        $snippet["codeExp"]
    );
}