<?php

const EMAIL_INVALID = 1;
const FORM_EMPTY = 2;
const SUCCESS_FORM = 3;
const FIELD_LOGIN = 4;

function getMessage(int $code): string
{
    $msg = '';

    switch ($code) {
        case EMAIL_INVALID:
            $msg = "Ce champ n'est pas un email";
            break;
        case FORM_EMPTY:
            $msg = "Veuillez remplir tous les champs";
            break;
        case SUCCESS_FORM:
            $msg = "votre demande à bien été prise en compte !";
            break;
        case FIELD_LOGIN:
            $msg = "Identifiant incorrect!";
            break;
        default:
            $msg = "Une erreur est survenue";
    }

    return $msg;
}
