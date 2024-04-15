<?php

require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Service.php';
require_once __DIR__ . '/classes/Contacts.php';
?>
<main>
    
    <div class="container">
        <h1 class="title-or text-center">Espace administateur</h1>
    <div class="row">
        <div class="col-lg-5">
        <caption class="text-center">
                <h2 class="text-center my-5 bg lobster">Services</h2>
            </caption>
            <table>
                <?php
                $services = Service::getServiceAll();
                foreach ($services as $service) { ?>
                    <tr>
                        <td class="  p-3 ">
                            <h4><?php echo $service['title_services']; ?></h4>
                        </td>
                        <td>
                            <a class="btn m-3" href="modify-service.php?id=<?php echo $service['id_services']; ?>"> Modifier</a>
                        </td>
                        <td>

                            <form action="delete-process-services.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $service["id_services"]; ?>">

                                <input type="submit" value="supprimer" class="btn">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <a class="btn m-4" href="add-new-service"> Ajouter un nouveau service</a>
        </div>
        <div class="col-lg-1">
       
        </div>

        <div class="col-lg-6">
            <caption class="text-center">
                <h2 class="text-center my-5 bg lobster">Messagerie</h2>
            </caption>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date</th>
                        <th scope="col">Voir</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contacts = Contacts::getMessages();
                    foreach ($contacts as $info) { ?>
                        <tr>
                            <td class="title-or "><?php echo $info['first_name_contact']; ?></td>
                            <td class="title-or "><?php echo $info['last_name_contact']; ?></td>
                            <td class="title-or "><?php echo $info['email_contact']; ?></td>
                            <td class="title-or "><?php echo $info['date_contact']; ?></td>
                            <td><a class="text-decoration-none" href="message.php?id=<?php echo $info['id_contact']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 12 12">
                                        <path fill="#debb4d" d="M4 3a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V7a.5.5 0 0 1 1 0v1a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h1a.5.5 0 0 1 0 1zm3 0a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .5.5V5a.5.5 0 0 1-1 0V3.707L7.354 5.354a.5.5 0 1 1-.708-.708L8.293 3z" />
                                    </svg></a></td>

                            <td>
                                <form action="delete-process-message.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $info["id_contact"]; ?>">

                                    <input type="submit" value="supprimer" class="btn">
                                </form>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </body>

    </html>
    </div>
</main>