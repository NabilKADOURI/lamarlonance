<?php
// Inclusion des fichiers nécessaires
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Service.php';
require_once __DIR__ . '/functions/utils.php';
require_once __DIR__ . '/classes/FileUpload.php';
require_once __DIR__ . '/classes/TextUtils.php';
require_once __DIR__ . '/functions/getMessage.php';

// Démarrer la session
session_start();

// Vérifier si l'utilisateur est un administrateur
if (!isset($_SESSION['userAdmin'])) {
    redirect('admin.php'); // Redirige vers la page d'administration si l'utilisateur n'est pas un admin
}

// Récupérer les données du formulaire
$title = $_POST['title'];
$description = $_POST['description'];
$picture = $_FILES['picture'];

// Vérifier si un fichier a été téléchargé et si le formulaire a été soumis
if (isset($_FILES['picture']) && !empty($_POST)) {
    // Créer une instance de la classe FileUpload pour gérer le téléchargement du fichier
    $fileUpload = new FileUpload($_FILES['picture'], __DIR__ . '/uploads');
    // Télécharger le fichier et obtenir le nom du fichier téléchargé
    $filename = $fileUpload->upload();

    // Insérer les données du service dans la base de données avec le nom du fichier
    Service::getInsertService($filename);

    // Rediriger vers la page d'accueil de l'administration avec un message de succès
    redirect('index-admin.php?success=' . SUCCESS_FORM);
}

