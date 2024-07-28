<?php

session_start();
require_once "dbconnect.php";
$smtp_connection = parse_ini_file(__DIR__ . "/../portfolio.env");

// create variables for connection 
// $smtp_host = $smtp_connection["SMTP_HOST"];
// $smtp_username = $smtp_connection["SMTP_USERNAME"];
// $smtp_password = $smtp_connection["SMTP_PASSWORD"];

$phpmailer_host = $smtp_connection["PHPMAILER_Host"];
$phpmailer_smtpAuth = $smtp_connection["PHPMAILER_SMTPAuth"];
$phpmailer_port = $smtp_connection["PHPMAILER_Port"];
$phpmailer_username = $smtp_connection["PHPMAILER_Username"];
$phpmailer_password = $smtp_connection["PHPMAILER_Password"];


// Define variables for form data
$firstname = $lastname = $email = $phone = $message = $token = "";

$errors = [];
$data = [];


// Sanitise incoming data
function sanitiseIncoming($data)
{
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

    if (!empty($firstname)) {
        $firstname = sanitiseIncoming($firstname);
        if (!preg_match("/^[A-z-' ]*$/", $firstname)) {
            $errors[] = "Please enter a valid first name";
        }
    } else {
        $errors[] = "First name field cannot be empty.";
    }

    if (!empty($lastname)) {
        $lastname = sanitiseIncoming($lastname);
        if (!preg_match("/^[A-z-' ]*$/", $lastname)) {
            $errors[] = "Please enter a valid last name";
        }
    } else {
        $errors[] = "Last name field cannot be empty.";
    }

    if (!empty($email)) {
        $email = sanitiseIncoming($email);
        if (filter_var($email, FILTER_VALIDATE_EMAIL) !== $email) {
            $errors[] = "Email is not valid";
        }
    } else {
        $errors[] = "Email cannot be empty";
    }

    if (!empty($phone)) {
        $phone = sanitiseIncoming($phone);
        if (!preg_match("/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/", $phone)) {
            $errors[] = "Please enter a valid phone number";
        }

    } else {
        $errors[] = "Please enter a phone number.";
    }

    if (!empty($message)) {
        $message = sanitiseIncoming($message);
        //$message = htmlentities($message, ENT_QUOTES, "UTF-8");
    } else {
        $errors[] = "Please leave a message.";
    }

    if ($errors) {
        $_SESSION['status'] = 'error';
        $_SESSION['errors'] = $errors;
        header('Location: ../index.php?result=error#contact');
        die();
    } else {



        $data = [
            "fname" => $firstname,
            "lname" => $lastname,
            "email" => $email,
            "phone" => $phone,
            "message" => $message,
        ];

        $_SESSION['status'] = 'success';
        $_SESSION['data'] = $data;
        header('Location: ../index.php#contact?result=success');
        // die();

    }



    try {


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

        header("Location: ../index.php#contact");

        die();
    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
    }
} else {
    header("Location: ../index.php#contact");
    exit;
}

require "../phpmailer/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$toEmail = '$smtp_username';

try {
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = $phpmailer_host;
    $phpmailer->SMTPAuth = $phpmailer_smtpAuth;
    $phpmailer->Port = $phpmailer_port;
    $phpmailer->Username = $phpmailer_username;
    $phpmailer->Password = $phpmailer_password;

    $mail->setFrom($email);
    $mail->addAddress($toEmail);

    $mail->Subject = "Enquiries";
    $mail->Body = "<p>Name: {$firstname} </p><p>Last name: {$lastname} </p><p>Email: {$email} </p>
<p>Phone: {$phone} </p><p> {$message} </p>";

    $mail->send();
    echo "email sent";
} catch (Exception $e) {
    echo "Something went wrong";
}