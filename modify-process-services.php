<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Db.php';
require_once __DIR__ . '/classes/TextUtils.php';
require_once __DIR__ . '/functions/utils.php';
require_once __DIR__ . '/classes/FileUpload.php';
require_once __DIR__. '/functions/getMessage.php';
/*
0.vérifier si l'admin est connecter ($_SESSION)
1.recup l'id $id = $_POST
2.recup donner form
3. vérifier et les valider
4. se connecter à la BDD
5.execute la requete modifier 
6.si tous va bien rediriger vers la liste des services
*/
session_start();

if (!isset($_SESSION['userAdmin'])) {
    redirect('admin.php');
}

$id = $_POST['id'];

try {
    $pdo =Db::getConnection();
} catch (PDOException) {
    echo "erreur lors de la connection à la base de données";
    exit;
}


if ($_FILES['picture']['error'] == 0) {

    $fileUpload= new FileUpload($_FILES ['picture'], __DIR__. '/uploads');
    $filename=$fileUpload->upload();


    $updatePicture = 'UPDATE services SET picture_services = :image WHERE id_services = :id';
    $stmt = $pdo->prepare($updatePicture);

    $stmt->execute([
        'image'=>$filename,
        'id' => $id
    ]);
   
}

$updateQuery = 'UPDATE services SET title_services = :titre, description_services = :description WHERE id_services = :id';

$stmt = $pdo->prepare($updateQuery);

$stmt->execute([
    'titre' => $_POST['title'],
    'description' => $_POST['description'],
    'id'=> $id
]);

redirect('index-admin.php?success=' . SUCCESS_FORM);
