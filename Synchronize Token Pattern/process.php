<?php 
session_start();
require_once 'Token.php';

if(isset($_POST['username'], $_POST['password'])){

    $username   = $_POST['username'];
    $password   = $_POST['password'];

    if($username == 'it14093210' && $password == 'it14093210'){

		// Generate session identifier and set as a cookie
		$sessionIdentifier = base64_encode(openssl_random_pseudo_bytes(32));
		setcookie("sessionID", $sessionIdentifier);

		// Generate the CSRF token and store
		Token::generateToken($sessionIdentifier);

        header('Location:form.php');

    } else {
        header('Location:index.php');
    }
}

