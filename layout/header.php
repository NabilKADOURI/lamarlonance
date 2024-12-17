<?php
require_once __DIR__ . '/../functions/getMessage.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link href="css/output.css" rel="stylesheet">

    <!-- Autres styles personnalisés -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">


    <!-- Scripts JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="node_modules/@iconify/iconify/dist/iconify.min.js"></script>
    <script src="/lamarlonance/js/script.js"></script>

    <title><?php echo $title ?? "Lamalonance" ?></title>
</head>

<body>
    <?php
    if (isset($_GET['error'])) {
        $errorMsg = getMessage(intval($_GET['error']));
        require_once "template/error_notification.php";
    }

    if (isset($_GET['success'])) {
        $successMsg = getMessage(intval($_GET['success']));
        require_once "template/success_notification.php";
    }
    ?>
</body>

</html>