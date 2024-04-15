<?php

require_once __DIR__ . '/functions/getMessage.php';
require_once __DIR__ . '/functions/utils.php';
require_once __DIR__ . '/functions/admin_login_form.php';
require_once __DIR__ . '/classes/Login.php';



if (!isAdminFormValid($_POST)) {
    redirect('admin.php?error=' . FORM_EMPTY);
}

$userAdmin = $_POST['userAdmin'];

$login = Login::getLogin($userAdmin);


if (password_verify($_POST ['password'],$login['password_admin'])) {

    session_start();
    $_SESSION['userAdmin'] = $userAdmin;
   
    redirect('index-admin.php');
} else {
    redirect('admin.php?error=' . FIELD_LOGIN);
}

