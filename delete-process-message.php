<?php
// Inclusion des fichiers nécessaires
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Contacts.php';  // Utilisation de la classe Contacts avec un nom de fichier correct
require_once __DIR__ . '/functions/utils.php';
require_once __DIR__ . '/functions/getMessage.php';

// Démarrer la session
session_start();

// Vérifier si l'utilisateur est un administrateur
if (!isset($_SESSION['userAdmin'])) {
    redirect('admin.php'); // Redirige vers la page d'administration si l'utilisateur n'est pas un admin
}

// Récupérer l'ID du message à supprimer
$id = $_POST['id'];

// Supprimer le message en utilisant la méthode getDeleteMessage de la classe Contacts
Contacts::getDeleteMessage($id);

// Rediriger vers la page d'accueil de l'administration avec un message de succès
redirect('index-admin.php?success=' . SUCCESS_FORM);
?>
