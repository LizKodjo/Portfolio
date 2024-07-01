<?php

// path to env file
$conn = parse_ini_file(__DIR__ . "/../portfolio.env");

// create variables
$host = $conn["DB_HOST"];
$dbname = $conn["DB_NAME"];
$dbuser = $conn["DB_USERNAME"];
$password = $conn["DB_PASSWORD"];
try {
    // create a PDO
    $db = new PDO("mysql:host=$host;dbname=$dbname",$dbuser,$password);
    // Confirmation of connection
    //echo "Connected to $host successfully. <Br>";
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Display error message if connection failed
    echo "Could not connect to database $dbname:" . $e->getMessage();
    exit;
}