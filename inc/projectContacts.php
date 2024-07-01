<?php

require "../phpmailer/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'live.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->Username = 'api';
$mail->Password = '7624ceb5b6c3e28b5c9c6ad764d10a3f';

$mail->setFrom($email, $firstname);
$mail->addAddress("ellizakodjo@outlook.com", "Elizabeth");

$mail->Subject = "Enquiries";
$mail->Body = $message;

$mail->send();

echo "Email sent";


// Defining my variables
$firstnameErr = $lastnameErr = $emailErr = $phoneErr = $messageErr = $error_message = "";
$firstname = $lastname = $email = $phone = $message = "";
//$phoneRegEx = "/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/)";


// Sanitise incoming data
function sanitiseIncoming($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {


   
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $submit = $_POST["submit"];
    // Sanitize incoming data
    $firstname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    

    

   

    try {
        require_once "dbconnect.php";
            
        // Display error message when any field is blank
        if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($message)) {
            $error_message = "Please complete all required fields";
        } 
        
        if (!preg_match("/^[A-z-' ]*$/", $firstname)) {
            $firstnameErr = "Please enter a valid first name";
        } else {
            $firstname = sanitiseIncoming($firstname);
        }
        if (!preg_match("/^[A-z-' ]*$/", $lastname)) {
             $lastnameErr = "Please enter a valid last name";
        } else {
           $lastname = sanitiseIncoming($lastname);
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo $emailErr = "Please enter a valid email";
        } else {
            $email = sanitiseIncoming($email);
        }
        if (!preg_match("/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/", $phone)) {
             $phoneErr = "Please enter a valid phone number";
        } else {
            $phone = sanitiseIncoming($phone);
        }

        if ($message) {
            $message = sanitiseIncoming($message);
        }
        
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
        $formSubmitted = "Form has been submitted. I will contact you ASAP, thanks for your interest.";
        header("Location: ../index.php");
       die();
        
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }
    } else {
        header("Location: ../index.php");
        exit;
    }

    


