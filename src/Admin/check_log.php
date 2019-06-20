<?php

function Login($mail, $password) : bool {

    if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
        return false;
    }
    
    return $mail === "thomas.giovannoni@hotmail.fr" && $password === "password";
}