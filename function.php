<?php

function passwordGenerator($passwordLength){

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{};:,.<>?";
    $password = "";
    for ($i = 0; $i < $passwordLength; $i++){
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    
    return $password;
}

?>
