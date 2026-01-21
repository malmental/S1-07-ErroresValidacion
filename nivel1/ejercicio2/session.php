<?php 
session_start();

if (!empty($_POST["Nombre"]) && !empty($_POST["Email"]) && !empty($_POST["Edad"]))
{
    $nombre = $_POST ["Nombre"];
    $email = $_POST ["Email"];
    $edad = $_POST ["Edad"];

    $_SESSION ["Nombre"] = $nombre;
    $_SESSION ["Email"] = $email;
    $_SESSION ["Edad"] = $edad;

    echo 'Usuario: ' . $nombre . PHP_EOL .
        'Email: ' . $email . PHP_EOL . 
        'Edad: ' . $edad . PHP_EOL;
    
} else {
    echo "Los campos no pueden estar vacios";
}

