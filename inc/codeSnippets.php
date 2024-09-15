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

function displaySnippets($codeCount, $codeNum, $codeCollapsed, $codeTitle, $codeShow, $codeIntro, $codeExp)
{
    // Create section to display code snippets

    return '
        <div class="card">
            <div class="card-header header' . htmlspecialchars($codeCount) . '">
                <a href="#collapse' . htmlspecialchars($codeNum) . '" class="' . htmlspecialchars($codeCollapsed) . ' btn" data-bs-toggle="collapse">' . htmlspecialchars($codeTitle) . '</a>
            </div>

            <div id="collapse' . htmlspecialchars($codeNum) . '" class="' . htmlspecialchars($codeShow) . '" data-bs-parent="#accordion">
                <div class="card-body">
                    <div>
                        ' . htmlspecialchars($codeIntro) . '
                    </div>
                    <div class="container code-sample">
                        <pre>
                            <code class="language-js line-numbers code-exp">
                                ' . htmlspecialchars($codeExp) . '
                            </code>
                        </pre>
                    </div>

                </div>
            </div> 
        </div>
    ';
}

// Loop through database
foreach (codeSnippets() as $snippet) {
    echo displaySnippets(
        $snippet["codeCount"],
        $snippet["codeNum"],
        $snippet["codeCollapsed"],
        $snippet["codeTitle"],
        $snippet["codeShow"],
        $snippet["codeIntro"],
        $snippet["codeExp"]
    );
}