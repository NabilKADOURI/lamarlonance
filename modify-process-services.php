<?php
// Inclusion des fichiers nécessaires
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Db.php';
require_once __DIR__ . '/classes/TextUtils.php';
require_once __DIR__ . '/functions/utils.php';
require_once __DIR__ . '/classes/FileUpload.php';
require_once __DIR__ . '/functions/getMessage.php';

// Démarrer la session
session_start();

// Vérifier si l'utilisateur est un administrateur
if (!isset($_SESSION['userAdmin'])) {
    redirect('admin.php'); // Redirige vers la page d'administration si l'utilisateur n'est pas un admin
}

// Récupérer l'ID du service à mettre à jour
$id = $_POST['id'];

try {
    // Établir une connexion à la base de données
    $pdo = Db::getConnection();
} catch (PDOException $e) {
    // Afficher un message d'erreur en cas d'échec de la connexion
    echo "Erreur lors de la connexion à la base de données";
    exit;
}

// Vérifier si un fichier a été téléchargé sans erreur
if ($_FILES['picture']['error'] == 0) {
    // Créer une instance de la classe FileUpload pour gérer le téléchargement du fichier
    $fileUpload = new FileUpload($_FILES['picture'], __DIR__ . '/uploads');
    // Télécharger le fichier et obtenir le nom du fichier téléchargé
    $filename = $fileUpload->upload();

    // Préparer et exécuter la requête SQL pour mettre à jour l'image du service
    $updatePictureQuery = 'UPDATE services SET picture_services = :image WHERE id_services = :id';
    $stmt = $pdo->prepare($updatePictureQuery);
    $stmt->execute([
        'image' => $filename,
        'id' => $id
    ]);
}

// Préparer et exécuter la requête SQL pour mettre à jour les autres informations du service
$updateServiceQuery = 'UPDATE services SET title_services = :title, description_services = :description WHERE id_services = :id';
$stmt = $pdo->prepare($updateServiceQuery);
$stmt->execute([
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'id' => $id
]);

// Rediriger vers la page d'accueil de l'administration avec un message de succès
redirect('index-admin.php?success=' . SUCCESS_FORM);
?>
