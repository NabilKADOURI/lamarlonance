<?php


const EMAIL_INVALID = 1;        // Code pour un email invalide
const FORM_EMPTY = 2;           // Code pour un formulaire vide
const SUCCESS_FORM = 3;         // Code pour une opération réussie
const FIELD_LOGIN = 4;          // Code pour un identifiant incorrect

/**
 * Fonction pour obtenir un message basé sur un code de statut
 *
 * @param int $code Code de statut pour déterminer le message
 * @return string Message correspondant au code de statut
 */
function getMessage(int $code): string
{
    // Définir le message par défaut
    $msg = '';

    // Déterminer le message basé sur le code de statut
    switch ($code) {
        case EMAIL_INVALID:
            $msg = "Ce champ n'est pas un email.";
            break;
        case FORM_EMPTY:
            $msg = "Veuillez remplir tous les champs.";
            break;
        case SUCCESS_FORM:
            $msg = "Votre demande a bien été prise en compte!";
            break;
        case FIELD_LOGIN:
            $msg = "Identifiant incorrect!";
            break;
        default:
            $msg = "Une erreur est survenue.";
    }

    // Retourner le message
    return $msg;
}
