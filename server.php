<?php

require_once __DIR__ . "/functions.php";

$email = $_GET['email'];

$message = isMailEmpty($email);

#var_dump($message);

session_start();

#var_dump($_SESSION);

$_SESSION['message'] = $message;

if ($message['value']) {
    header('Location: /php/php-iscrizione-newsletter/success.php');
} else {
    header('Location: /php/php-iscrizione-newsletter/index.php');
}
