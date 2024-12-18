<?php
session_start();
require_once __DIR__ . '/functions/utils.php';

if (isset($_SESSION['userAdmin'])) {
    redirect('index-admin.php');
}

require_once 'layout/header.php';
?>

<main class="flex w-full min-h-screen bg-gray-100">
  <div class="container mx-auto flex justify-center items-center">
    <!-- Formulaire de connexion -->
    <form method="POST" action="admin-process.php" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <!-- Titre du formulaire -->
      <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Connexion Administrateur</h2>

      <!-- Identifiant -->
      <div class="mb-4">
        <label for="userAdmin" class="block text-gray-700 font-medium mb-2">Identifiant</label>
        <input type="text" name="userAdmin" id="userAdmin" placeholder="Votre identifiant"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
      </div>

      <!-- Mot de passe -->
      <div class="mb-4">
        <label for="password" class="block text-gray-700 font-medium mb-2">Mot de passe</label>
        <input type="password" name="password" id="password" placeholder="Votre mot de passe"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
      </div>

      <!-- Checkbox rester connecté -->
      <div class="mb-4 flex items-center">
        <input type="checkbox" id="Check" class="h-4 w-4 text-yellow-500 focus:ring-yellow-400 border-gray-300 rounded">
        <label for="Check" class="ml-2 text-gray-700">Rester connecté</label>
      </div>

      <!-- Bouton de connexion -->
      <div class="text-center">
        <button type="submit"
          class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded-md transition duration-300">
          Connexion
        </button>
      </div>
    </form>
  </div>
</main>
