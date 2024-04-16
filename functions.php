<?php

#var_dump(__DIR__);


/**
 * Questa funzione permette di vedere se la mail inviata è diversa da NULL
 */
function isMailEmpty($mail)
{
    //Se mail è != null
    if (isset($mail)) {

        //Posso generare un messaggio
        return alertMessage($mail);

    }
}
;




/**
 * Prende in input una stringa e ti dice se la stringa inserita ha i requisiti minimi di una mail o meno
 * @param string
 */
function alertMessage($mail)
{
    // Verifico che abbia i requisiti indispensabili di una mail @ e .
    if (str_contains($mail, '@') && str_contains($mail, '.')) {
        //Se ok
        return [
            "text" => "La tua mail è stata accettata",
            "class" => "alert-success",
            "value" => true
        ];
    } else {
        //Non va
        return [
            "text" => "Qualcosa non va",
            "class" => "alert-danger",
            "value" => false
        ];
    }
}