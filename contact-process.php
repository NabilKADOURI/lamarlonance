<?php
require_once __DIR__ . '/functions/utils.php';
require_once __DIR__ . '/functions/contact_form.php';
require_once __DIR__ . '/classes/Db.php';
require_once __DIR__ . '/functions/getMessage.php';


if (!isContactFormValid($_POST)) {
        redirect('contact.php?error='. FORM_EMPTY );
}

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            redirect('contact.php?error=' . EMAIL_INVALID);
}
try {
        $pdo =Db::getConnection();
    } catch (PDOException $e) {
        redirect('contact.php');
    }
    
    $stmt = $pdo->prepare("INSERT INTO contact(first_name_contact,last_name_contact,email_contact,object_contact,message_contact) VALUES (:formName, :formFirstname, :formEmail, :formObject, :formMessage)");
    

    $stmt->bindValue('formName', $_POST['first_name']);
    $stmt->bindValue('formFirstname', $_POST['last_name']);
    $stmt->bindValue('formEmail', $_POST['email']);
    $stmt->bindValue('formObject', $_POST['object']);
    $stmt->bindValue('formMessage', $_POST['message']);
    
    $success = $stmt->execute();
    
    if ($success) {
        redirect('contact.php?success=' . SUCCESS_FORM);
    }

   




