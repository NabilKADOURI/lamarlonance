<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Service.php';

// Récupération de l'ID du service à modifier
$id = $_GET['id'];

// Récupération des informations du service à partir de la base de données
$service = Service::getService($id);
?>

<!-- Conteneur principal pour le formulaire -->
<div class="container mx-auto my-10 px-4">
    <!-- Titre du formulaire -->
    <h2 class="text-center mb-6 py-4 bg-blue-500 text-white text-2xl font-bold rounded-lg shadow-md">
        Modifier le Service
    </h2>
    
    <!-- Formulaire pour modifier le service -->
    <form method="POST" enctype="multipart/form-data" action="modify-process-services.php" class="bg-white p-8 rounded-lg shadow-lg">
        <!-- Champ pour modifier le titre du service -->
        <div class="mb-6">
            <label for="title" class="block text-gray-700 font-medium mb-2">Titre</label>
            <input 
                type="text" 
                id="title" 
                name="title" 
                value="<?php echo htmlspecialchars($service['title_services']); ?>" 
                class="w-full px-4 py-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
            />
        </div>

        <!-- Champ pour modifier la description du service -->
        <div class="mb-6">
            <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
            <textarea 
                id="description" 
                name="description" 
                rows="5" 
                class="w-full px-4 py-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"><?php echo htmlspecialchars($service['description_services']); ?></textarea>
        </div>

        <!-- Champ caché pour passer l'ID du service à modifier -->
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($service['id_services']); ?>" />

        <!-- Champ pour ajouter ou remplacer l'image du service -->
        <div class="mb-6">
            <label for="picture" class="block text-gray-700 font-medium mb-2">Photo</label>
            <input 
                type="file" 
                id="picture" 
                name="picture" 
                class="w-full px-4 py-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
            />
        </div>

        <!-- Bouton pour soumettre les modifications -->
        <div class="text-center">
            <button 
                type="submit" 
                class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-md transition duration-300">
                Modifier
            </button>
        </div>
    </form>
</div>

</body>
</html>
