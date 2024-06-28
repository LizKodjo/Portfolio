<?php
// Error message variables

$firstnameErr = $lastnameErr = $emailErr = $phone = $message = "";
$firstname = $lastname = $email = $phone = $message = "";

if ($_SERVER("METHOD_REQUEST") == "POST") {

}

// Sanitise incoming data
function sanitiseIncoming($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

try {
    require_once "inc/dbconnect.php";

    $query = $db->prepare("INSERT INTO portfolio (firstname, lastname, email, phone, message)
    VALUES(?, ?, ?, ?,?)");
    $contact = $query->execute(PDO::FETCH_CLASS);
    echo "Record saved successfully.";
} catch (PDOException $e) {

}

