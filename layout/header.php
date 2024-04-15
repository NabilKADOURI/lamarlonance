<?php
require_once __DIR__ . '/../functions/getMessage.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"rel="stylesheet"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title ?? "Lamalonance"?></title>
</head>

<body>
<?php

if (isset($_GET ['error'])) {

$errorMsg = getMessage(intval($_GET ['error']));

require_once "template/error_notification.php";
}

if (isset($_GET ['success'])) {

$successMsg = getMessage(intval($_GET ['success']));

require_once "template/success_notification.php";
}
