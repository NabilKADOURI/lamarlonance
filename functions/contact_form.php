<?php


const REQUIRED_FIELDS = ['first_name', 'last_name','email', 'object','message'];

function isContactFormValid(array $data): bool
{
    foreach (REQUIRED_FIELDS as $field) {
        
        if (!isset($data[$field]) || empty($data[$field])) {
            return false;
        }
    }

    return true;
}
