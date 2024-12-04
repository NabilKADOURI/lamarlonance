<?php
// Inclusion du fichier d'en-tête et des classes nécessaires
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Contacts.php';

// Récupération de l'ID du message à partir de l'URL
$id = $_GET['id'];

// Récupération des détails du message depuis la base de données
$contact = Contacts::getMessage($id);
?>

<main class="container my-5">
    <!-- Section d'affichage des détails du message -->
    <div class="border p-4 rounded shadow-sm" style="background-color: #f9f9f9;">
        <h1 class="text-center mb-4" style="color: #2c3e50; background-color: #debb4d; padding: 10px; border-radius: 8px;">Détails du Message</h1>

        <!-- Informations sur le contact -->
        <div class="row mb-3">
            <div class="col-lg-6">
                <h3 style="color: #2980b9;">Nom : <?php echo htmlspecialchars($contact['first_name_contact']); ?></h3>
            </div>
            <div class="col-lg-6">
                <h3 style="color: #2980b9;">Prénom : <?php echo htmlspecialchars($contact['last_name_contact']); ?></h3>
            </div>
        </div>

        <!-- Objet du message -->
        <div class="mb-3">
            <h4 style="color: #8e44ad;">Objet : <?php echo htmlspecialchars($contact['object_contact']); ?></h4>
        </div>

        <!-- Contenu du message -->
        <div class="mb-4">
            <h5 style="color: #27ae60;">Message :</h5>
            <p><?php echo nl2br(htmlspecialchars($contact['message_contact'])); ?></p>
        </div>

        <!-- Informations supplémentaires -->
        <div class="mb-4">
            <p><strong>Date de la demande :</strong> <?php echo htmlspecialchars($contact['date_contact']); ?></p>
            <p><strong>Email du contact :</strong> <?php echo htmlspecialchars($contact['email_contact']); ?></p>
        </div>

        <!-- Lien de retour -->
        <div class="text-end">
            <a class="btn text-white" href="index-admin.php" style="background-color: #debb4d;">
                Retour
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm3.354-8.646a.5.5 0 0 0-.708-.708L7.5 8.793 5.854 7.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l4-4z"/>
                </svg>
            </a>
        </div>
    </div>
</main>

<!-- Inclusion des scripts JavaScript nécessaires -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    AOS.init();
</script>

</body>
</html>
