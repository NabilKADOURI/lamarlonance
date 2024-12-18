<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Service.php';
require_once __DIR__ . '/classes/Contacts.php';
?>

<main class="container mx-auto my-10 px-4">
    <!-- Titre principal de l'espace administrateur avec un fond personnalisé -->
    <h1 class="text-center mb-10 py-6 bg-gray-100 rounded-lg shadow-md text-yellow-600 text-3xl font-bold">
        ESPACE ADMINISTRATEUR
    </h1>

    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Section des services -->
        <div class="w-full lg:w-1/2">
            <!-- Titre de la section Services -->
            <h2 class="text-center py-4 bg-yellow-500 rounded-lg shadow-md text-white text-2xl font-bold">
                Services
            </h2>
            <!-- Tableau pour afficher les services existants -->
            <table class="table-auto w-full text-left mt-5 bg-white rounded-lg shadow-md">
                <tbody>
                    <?php
                    // Récupère tous les services depuis la base de données
                    $services = Service::getServiceAll();
                    foreach ($services as $service) { ?>
                        <tr class="border-b">
                            <td class="px-4 py-3 text-gray-800">
                                <h6 class="text-lg font-semibold"><?php echo $service['title_services']; ?></h6>
                            </td>
                            <td class="px-4 py-3">
                                <!-- Lien pour modifier le service -->
                                <a href="modify-service.php?id=<?php echo $service['id_services']; ?>"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md">
                                    Modifier
                                </a>
                            </td>
                            <td class="px-4 py-3 text-center">
                                <!-- Formulaire pour supprimer le service -->
                                <form action="delete-process-services.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $service["id_services"]; ?>">
                                    <input type="submit" value="Supprimer"
                                           class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- Lien pour ajouter un nouveau service -->
            <a href="add-new-service"
               class="block mt-6 bg-green-500 hover:bg-green-600 text-white text-center py-3 rounded-md">
                Ajouter un nouveau service
            </a>
        </div>

        <!-- Section de messagerie -->
        <div class="w-full lg:w-1/2">
            <!-- Titre de la section Messagerie -->
            <h2 class="text-center py-4 bg-yellow-500 rounded-lg shadow-md text-white text-2xl font-bold">
                Messagerie
            </h2>
            <!-- Tableau pour afficher les messages reçus -->
            <table class="table-auto w-full text-left mt-5 bg-white rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-200 text-gray-800">
                        <th class="px-4 py-2">Nom</th>
                        <th class="px-4 py-2">Prénom</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Voir</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Récupère tous les messages depuis la base de données
                    $contacts = Contacts::getMessages();
                    foreach ($contacts as $info) { ?>
                        <tr class="border-b">
                            <td class="px-4 py-3"><?php echo $info['first_name_contact']; ?></td>
                            <td class="px-4 py-3"><?php echo $info['last_name_contact']; ?></td>
                            <td class="px-4 py-3"><?php echo $info['email_contact']; ?></td>
                            <td class="px-4 py-3"><?php echo $info['date_contact']; ?></td>
                            <td class="px-4 py-3 text-center">
                                <!-- Lien pour voir le détail du message -->
                                <a href="message.php?id=<?php echo $info['id_contact']; ?>"
                                   class="text-yellow-500 hover:text-yellow-600">
                                    Voir
                                </a>
                            </td>
                            <td class="px-4 py-3 text-center">
                                <!-- Formulaire pour supprimer un message -->
                                <form action="delete-process-message.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $info["id_contact"]; ?>">
                                    <input type="submit" value="Supprimer"
                                           class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
