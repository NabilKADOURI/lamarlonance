<?php

const REQUIRED_FIELDS = ['userAdmin', 'password'];

function isAdminFormValid ( array $data) :bool

{
    foreach (REQUIRED_FIELDS as $field) {

        if (!isset($data[$field]) || empty($data[$field])) {
            return false;
        }
    } 

    return true;
}