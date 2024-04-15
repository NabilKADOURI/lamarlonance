<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/contacts.php';
require_once __DIR__ . '/functions/utils.php';
require_once __DIR__. '/functions/getMessage.php';


session_start();

if (!isset($_SESSION['userAdmin'])) {
    redirect('admin.php');
}

$id = $_POST['id'];

Contacts::getDeleteMessage($id);

redirect('index-admin.php?success=' . SUCCESS_FORM);
