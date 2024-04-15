<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Service.php';
require_once __DIR__ . '/functions/utils.php';
require_once __DIR__ . '/classes/FileUpload.php';
require_once __DIR__ . '/classes/TextUtils.php';
require_once __DIR__ . '/functions/getMessage.php';


session_start();

if (!isset($_SESSION['userAdmin'])) {
    redirect('admin.php');
}

$title = $_POST['title'];
$description = $_POST['description'];
$picture = $_FILES['picture'];


if (isset($_FILES['picture']) && !empty($_POST)) {

    $fileUpload = new FileUpload($_FILES['picture'], __DIR__ . '/uploads');
    $filename = $fileUpload->upload();

    Service::getInsertService($filename);

    redirect('index-admin.php?success=' . SUCCESS_FORM);
}
