<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Service.php';

// Récupération de l'ID du service à modifier
$id = $_GET['id'];

// Récupération des informations du service à partir de la base de données
$service = Service::getService($id);
?>

<!-- Conteneur principal pour le formulaire -->
<div class="container my-5">
    <!-- Titre du formulaire avec une couleur de fond et du texte en blanc -->
    <h2 class="text-center mb-4 p-3 bg-primary text-white rounded">
        Modifier le Service
    </h2>
    
    <!-- Formulaire pour modifier le service -->
    <form method="POST" enctype="multipart/form-data" action="modify-process-services.php">
        <!-- Champ pour modifier le titre du service -->
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" id="title" name="title" class="form-control border-info" value="<?php echo htmlspecialchars($service['title_services']); ?>" />
        </div>

        <!-- Champ pour modifier la description du service -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control border-info" rows="5"><?php echo htmlspecialchars($service['description_services']); ?></textarea>
        </div>

        <!-- Champ caché pour passer l'ID du service à modifier -->
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($service['id_services']); ?>" />

        <!-- Champ pour ajouter ou remplacer l'image du service -->
        <div class="mb-3">
            <label for="picture" class="form-label">Photo</label>
            <input type="file" id="picture" name="picture" class="form-control border-info" />
        </div>

        <!-- Bouton pour soumettre les modifications avec une couleur primaire -->
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Modifier</button>
        </div>
    </form>
</div>

</body>
</html>
