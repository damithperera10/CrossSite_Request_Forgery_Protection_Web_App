<?php
session_start();
require_once 'Token.php';

$sessionID = $_COOKIE['sessionID'];

$csrfToken = Token::getTokenBySession($sessionID);

echo json_encode(array("token" => $csrfToken));
