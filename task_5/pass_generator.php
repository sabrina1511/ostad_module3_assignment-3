<?php

//password generator


function generatePassword($length) {
    
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';


    $characters = $lowercase . $uppercase . $numbers . $specialChars;

    
    $password = '';

    
    for ($i = 0; $i < $length; $i++) {
        
        $randomChar = $characters[rand(0, strlen($characters) - 1)];

       
        $password .= $randomChar;
    }

    return $password;
}


$password = generatePassword(12);


echo "Generated Password: $password\n";
?>