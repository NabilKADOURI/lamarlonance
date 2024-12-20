<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Service.php';
require_once __DIR__ . '/classes/Contacts.php';
?>

<main class="container mx-auto my-10 px-4">
    <!-- Titre principal de l'espace administrateur avec un design plus chic -->
    <h1 class="text-center mb-10 py-6 bg-yellow-500 text-white rounded-lg shadow-lg text-4xl font-extrabold">
        ESPACE ADMINISTRATEUR
    </h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <!-- Section des services -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-center mb-6 text-yellow-500 text-3xl font-semibold">
                Gestion des Services
            </h2>
            <table class="table-auto w-full text-left bg-gray-100 rounded-lg">
                <thead>
                    <tr class="bg-yellow-500 text-white">
                        <th class="px-6 py-3">Titre</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $services = Service::getServiceAll();
                    foreach ($services as $service) { ?>
                        <tr class="border-b">
                            <td class="px-6 py-4 text-gray-800 font-medium">
                                <?php echo $service['title_services']; ?>
                            </td>
                            <td class="px-6 py-4 flex space-x-4 justify-end">
                                <a href="modify-service.php?id=<?php echo $service['id_services']; ?>"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-full font-medium">
                                    Modifier
                                </a>
                                <form action="delete-process-services.php" method="POST" class="inline">
                                    <input type="hidden" name="id" value="<?php echo $service['id_services']; ?>">
                                    <input type="submit" value="Supprimer"
                                           class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-full font-medium">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="add-new-service.php"
               class="block mt-6 bg-green-500 hover:bg-green-600 text-white text-center py-3 rounded-full font-medium shadow-md">
                Ajouter un nouveau service
            </a>
        </div>

        <!-- Section de la messagerie -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-center mb-6 text-yellow-500 text-3xl font-semibold">
                Messagerie des Utilisateurs
            </h2>
            <table class="table-auto w-full text-left bg-gray-100 rounded-lg">
                <thead>
                    <tr class="bg-yellow-500 text-white">
                        <th class="px-6 py-3">Nom</th>
                        <th class="px-6 py-3">Prénom</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">Date</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contacts = Contacts::getMessages();
                    foreach ($contacts as $contact) { ?>
                        <tr class="border-b">
                            <td class="px-6 py-4 text-gray-800">
                                <?php echo $contact['last_name_contact']; ?>
                            </td>
                            <td class="px-6 py-4 text-gray-800">
                                <?php echo $contact['first_name_contact']; ?>
                            </td>
                            <td class="px-6 py-4 text-gray-800">
                                <?php echo $contact['email_contact']; ?>
                            </td>
                            <td class="px-6 py-4 text-gray-800">
                                <?php echo $contact['date_contact']; ?>
                            </td>
                            <td class="px-6 py-4 flex space-x-4 justify-end">
                                <a href="message.php?id=<?php echo $contact['id_contact']; ?>"
                                   class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full font-medium">
                                    Voir
                                </a>
                                <form action="delete-process-message.php" method="POST" class="inline">
                                    <input type="hidden" name="id" value="<?php echo $contact['id_contact']; ?>">
                                    <input type="submit" value="Supprimer"
                                           class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-full font-medium">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
require_once __DIR__ . '/layout/footer.php';
?>
