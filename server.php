<?php

require_once __DIR__ . "/functions.php";

#Assegno un valore alla variabile tramite l'input
$email = $_GET['email'];

#Chiamo la funzione isMailEmpty che in caso di check positivo chiamerà un'altra funzione alertMessage
$message = isMailEmpty($email);

#Avvio la mia session
session_start();

#Vedo cosa ho dentro
#var_dump($_SESSION);

#Assegno i valori che mi potrebbero tornare utili
$_SESSION['email'] = $email;
$_SESSION['message'] = $message;


#Gestiso il reindirizzamento delle pagine
//Se il valore che mi viene reso è true porta alla pagina success
if ($message['value']) {
    header('Location: /php/php-iscrizione-newsletter/success.php');

//Se no resta nell'index
} else {
    header('Location: /php/php-iscrizione-newsletter/index.php');
}
