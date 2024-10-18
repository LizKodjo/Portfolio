<?php

session_start();
require_once "dbconnect.php";
$smtp_connection = parse_ini_file(__DIR__ . "/../portfolio.env");
use PHPMailer\PHPMailer\PHPMailer;


require "../vendor/autoload.php";



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


$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = '$phpmailer_host';
$mail->SMTPAuth = true;
$mail->Port = $phpmailer_port;
$mail->Username = '$phpmailer_username';
$mail->Password = '$phpmailer_password';
$mail->SMTPSecure = 'tls';


$mail->setFrom(address: 'portfolio@demomailtrap.com.', name: 'Liz');
$mail->isHTML(isHtml: true);

$mail->Subject = 'Enquiries';
$mail->Body = 'Testing my contact form';

if (!$mail->send()) {
    echo 'Message could not be sent.' . PHP_EOL;
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent' . PHP_EOL;
}

// if (isset($_POST['submit'])) {
//     //Create an instance; passing `true` enables exceptions
//     $mail = new PHPMailer(true);

//     try {
//         //Server settings
//         //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//         $mail->isSMTP();
//         $mail->SMTPAuth = '$phpmailer_smtpAuth';       //Enable SMTP authentication
//         //Send using SMTP
//         $mail->Host = '$smtp_host';                     //Set the SMTP server to send through

//         $mail->Username = '$phpmailer_username';                     //SMTP username
//         $mail->Password = '$phpmailer_password';                               //SMTP password
//         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
//         $mail->Port = '$phpmailer_port';                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//         //Recipients
//         $mail->setFrom('ellizakodjo@outlook.com', 'Mailer');
//         $mail->addAddress('$email', 'Joe User');     //Add a recipient


//         //Content
//         $mail->isHTML(true);                                  //Set email format to HTML
//         $mail->Subject = 'New Enquiry';
//         $mail->Body = '<h3>Hi, you received an enquiry</h3>
//     <h4>Firstname: ' . $firstname . ' </h4>
//     <h4>Lastname: ' . $lastname . ' </h4>
//     <h4>Email: ' . $email . ' </h4>
//     <h4>Phone: ' . $phone . ' </h4>
//     <h4>Message: ' . $message . ' </h4>
//     ';


//         if ($mail->send()) {
//             $_SESSION['status'] = "Thank you for contacting me - Liz";
//             header("Location: {$_SERVER["HTTP_REFERER"]}");
//             exit(0);
//         } else {
//             $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//             header("Location: {$_SERVER["HTTP_REFERER"]}");
//             exit(0);
//         }


//         // echo 'Message has been sent';
//     } catch (Exception $e) {
//         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//     }
// } else {
//     header('Location:../index.php');
//     exit();
// }



