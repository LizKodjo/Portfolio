<!-- <?php
session_start();
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="description" content="Elizabeth Kodjo's web development skills">
    <meta name="author" content="Elizabeth Kodjo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$pageTitle"; ?></title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <script src="https://kit.fontawesome.com/f8bda8a3df.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    <!-- Side nav and main picture -->
     <!-- Header -->
     <header>
        <!-- Links to my information -->
        <!-- Side nav -->
        <!-- Initials - Logo-->
        <div class="box mainLogo">
            <a href="index.php">EK</a>
        </div>
        <div class="container maininfo">

            <!-- <div class="box largeLogo">
                <a href="index.html">EK</a>
            </div> -->

           <?php include "inc/mainsidebar.php"; ?>


        </div>

        <!-- Tablet devices -->
        <?php include "inc/tabletNav.php"; ?>

        <!-- Mobile devices -->
        <?php include "inc/mobileNav.php"; ?>
    </header>