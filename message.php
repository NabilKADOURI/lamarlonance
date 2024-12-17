<?php
// Inclusion du fichier d'en-tête et des classes nécessaires
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Contacts.php';

// Récupération de l'ID du message à partir de l'URL
$id = $_GET['id'];

// Récupération des détails du message depuis la base de données
$contact = Contacts::getMessage($id);
?>

<main class="container mx-auto my-12 px-4">
    <!-- Section d'affichage des détails du message -->
    <div class="border border-gray-200 bg-gray-50 p-6 rounded-lg shadow-lg">
        <!-- Titre -->
        <h1 class="text-center text-3xl font-bold text-gray-800 bg-yellow-500 py-4 rounded-md mb-6">
            Détails du Message
        </h1>

        <!-- Informations sur le contact -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
            <div>
                <h3 class="text-xl font-semibold text-blue-600">
                    Nom : <?php echo htmlspecialchars($contact['first_name_contact']); ?>
                </h3>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-blue-600">
                    Prénom : <?php echo htmlspecialchars($contact['last_name_contact']); ?>
                </h3>
            </div>
        </div>

        <!-- Objet du message -->
        <div class="mb-4">
            <h4 class="text-lg font-semibold text-purple-700">
                Objet : <?php echo htmlspecialchars($contact['object_contact']); ?>
            </h4>
        </div>

        <!-- Contenu du message -->
        <div class="mb-6">
            <h5 class="text-lg font-semibold text-green-600">Message :</h5>
            <p class="text-gray-700 leading-relaxed">
                <?php echo nl2br(htmlspecialchars($contact['message_contact'])); ?>
            </p>
        </div>

        <!-- Informations supplémentaires -->
        <div class="mb-6">
            <p class="text-gray-700">
                <strong>Date de la demande :</strong> <?php echo htmlspecialchars($contact['date_contact']); ?>
            </p>
            <p class="text-gray-700">
                <strong>Email du contact :</strong> <?php echo htmlspecialchars($contact['email_contact']); ?>
            </p>
        </div>

        <!-- Lien de retour -->
        <div class="text-right">
            <a href="index-admin.php"
               class="inline-flex items-center justify-center bg-yellow-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
                Retour
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="ml-2"
                     viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm3.354-8.646a.5.5 0 0 0-.708-.708L7.5 8.793 5.854 7.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l4-4z"/>
                </svg>
            </a>
        </div>
    </div>
</main>

<!-- Inclusion des scripts nécessaires -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
