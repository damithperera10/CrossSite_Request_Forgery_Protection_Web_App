<?php

class Token {
    
    // Generate the CSRF token and store it in the server side
    public static function generateToken($sessionID){
        $_SESSION['sessionID'] = $sessionID;
        $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
    }

    public static function getTokenBySession($sessionID){
        if(isset($_SESSION['sessionID']) && $sessionID == $_SESSION['sessionID']){
            return $_SESSION['token'];
        } 
        return false;  
    }

}

