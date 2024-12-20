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

    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/output.css" rel="stylesheet"> <!-- DOIT ÊTRE EN DERNIER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet">

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

    <!-- Info Tailwind Responsive -->
    <div id="tailwind-breakpoint-info" class="fixed bottom-2 right-2 text-xs text-gray-600 bg-gray-100 p-2 rounded shadow z-50">
        Taille actuelle : <span id="tailwind-breakpoint-label">Chargement...</span>
    </div>

    <script>
        function updateTailwindBreakpoint() {
            const width = window.innerWidth;
            const label = document.getElementById('tailwind-breakpoint-label');

            if (width < 640) {
                label.textContent = "default (<640px)";
            } else if (width >= 640 && width < 768) {
                label.textContent = "sm (≥640px)";
            } else if (width >= 768 && width < 1024) {
                label.textContent = "md (≥768px)";
            } else if (width >= 1024 && width < 1280) {
                label.textContent = "lg (≥1024px)";
            } else if (width >= 1280 && width < 1536) {
                label.textContent = "xl (≥1280px)";
            } else {
                label.textContent = "2xl (≥1536px)";
            }
        }

        updateTailwindBreakpoint();
        window.addEventListener('resize', updateTailwindBreakpoint);
    </script>

    <!-- Scripts JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init(); // Initialisation d'AOS
    </script>
    <script src="https://unpkg.com/flowbite@1.7.0/dist/flowbite.js"></script>
    <script src="node_modules/@iconify/iconify/dist/iconify.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>
