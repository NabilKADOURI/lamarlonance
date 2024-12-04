<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Service.php';
require_once __DIR__ . '/classes/Contacts.php';
?>

<main class="container my-5">
    <!-- Titre principal de l'espace administrateur avec un fond personnalisé -->
    <h1 class="title-or text-center mb-5 p-4" style="background-color: #f8f9fa; border-radius: 10px;">
        ESPACE ADMINISTRATEUR
    </h1>

    <div class="row">
        <!-- Section des services -->
        <div class="col-lg-5">
            <!-- Titre de la section Services -->
            <h2 class="text-center py-2 bg lobster" style="background-color: #debb4d; border-radius: 10px;">
                Services
            </h2>
            <!-- Tableau pour afficher les services existants -->
            <table class="table table-striped">
                <?php
                // Récupère tous les services depuis la base de données
                $services = Service::getServiceAll();
                // Boucle pour afficher chaque service
                foreach ($services as $service) { ?>
                    <tr>
                        <td class="p-3">
                            <!-- Affiche le titre du service -->
                            <h6><?php echo $service['title_services']; ?></h6>
                        </td>
                        <td>
                            <!-- Lien pour modifier le service -->
                            <a class="btn btn-warning m-3" href="modify-service.php?id=<?php echo $service['id_services']; ?>">Modifier</a>
                        </td>
                        <td class="text-center">
                            <!-- Formulaire pour supprimer le service avec bouton centré -->
                            <form action="delete-process-services.php" method="POST" class="d-flex justify-content-center">
                                <!-- Champ caché pour envoyer l'ID du service -->
                                <input type="hidden" name="id" value="<?php echo $service["id_services"]; ?>">
                                <!-- Bouton pour supprimer le service -->
                                <input type="submit" value="Supprimer" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <!-- Lien pour ajouter un nouveau service -->
            <a class="btn btn-success m-4" href="add-new-service">Ajouter un nouveau service</a>
        </div>

        <!-- Espacement entre les sections (colonne vide) -->
        <div class="col-lg-1"></div>

        <!-- Section de messagerie -->
        <div class="col-lg-6">
            <!-- Titre de la section Messagerie -->
            <h2 class="text-center py-2 bg lobster" style="background-color: #debb4d; border-radius: 10px;">
                Messagerie
            </h2>
            <!-- Tableau pour afficher les messages reçus -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <!-- En-têtes des colonnes du tableau -->
                        <th class="fw-bold" scope="col">Nom</th>
                        <th class="fw-bold" scope="col">Prénom</th>
                        <th class="fw-bold" scope="col">Email</th>
                        <th class="fw-bold" scope="col">Date</th>
                        <th class="fw-bold" scope="col">Voir</th>
                        <th class="fw-bold" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Récupère tous les messages depuis la base de données
                    $contacts = Contacts::getMessages();
                    // Boucle pour afficher chaque message
                    foreach ($contacts as $info) { ?>
                        <tr>
                            <!-- Affiche les informations de chaque message -->
                            <td><?php echo $info['first_name_contact']; ?></td>
                            <td><?php echo $info['last_name_contact']; ?></td>
                            <td><?php echo $info['email_contact']; ?></td>
                            <td><?php echo $info['date_contact']; ?></td>
                            <td>
                                <!-- Lien pour voir le détail du message -->
                                <a class="text-decoration-none" href="message.php?id=<?php echo $info['id_contact']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 12 12">
                                        <path fill="#debb4d" d="M4 3a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V7a.5
                                        .5 0 0 1 1 0v1a2 2 0 0 1-2 2H4a2 
                                        2 0 0 1-2-2V4a2 2 0 0 1 2-2h1a.5.5 0 0 1 0 1zm3 0a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 
                                        .5.5V5a.5.5 0 0 1-1 0V3.707L7.354 5.354a.
                                        5.5 0 1 1-.708-.708L8.293 3z" />
                                    </svg>
                                </a>
                            </td>
                            <td class="text-center">
                                <!-- Formulaire pour supprimer un message avec bouton centré -->
                                <form action="delete-process-message.php" method="POST" class="d-flex justify-content-center">
                                    <!-- Champ caché pour envoyer l'ID du message -->
                                    <input type="hidden" name="id" value="<?php echo $info["id_contact"]; ?>">
                                    <!-- Bouton pour supprimer le message -->
                                    <input type="submit" value="Supprimer" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
