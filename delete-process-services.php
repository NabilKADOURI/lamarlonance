<?php
// Inclusion des fichiers nécessaires
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Service.php'; // Classe pour gérer les services
require_once __DIR__ . '/functions/utils.php';  // Fonctions utilitaires
require_once __DIR__ . '/functions/getMessage.php';  // Fonctions pour gérer les messages

// Démarrer la session
session_start();

// Vérifier si l'utilisateur est un administrateur
if (!isset($_SESSION['userAdmin'])) {
    redirect('admin.php'); // Redirige vers la page d'administration si l'utilisateur n'est pas un admin
}

// Récupérer l'ID du service à supprimer depuis la requête POST
$id = $_POST['id'];

// Supprimer le service en utilisant la méthode getDeleteService de la classe Service
Service::getDeleteService($id);

// Rediriger vers la page d'accueil de l'administration avec un message de succès
redirect('index-admin.php?success=' . SUCCESS_FORM);
?>
