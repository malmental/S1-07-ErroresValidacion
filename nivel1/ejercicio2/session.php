<?php
session_start();

require_once 'Validaciones.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $todosLosErrores = [];

    $resultadoNombre = validadorNombre($_POST["Nombre"]);
    if (!$resultadoNombre['valido']) {
        foreach ($resultadoNombre['errores'] as $error) {
            $todosLosErrores[]= $error;
        }
    }

    $resultadoEmail = validadorEmail($_POST["Email"]);
    if (!$resultadoEmail['valido']) {
        foreach ($resultadoEmail['errores'] as $error) {
            $todosLosErrores[] = $error;
        }
    }

    $resultadoEdad = validadorEdad($_POST["Edad"]);
    if (!$resultadoEdad['valido']) {
        foreach ($resultadoEdad['errores'] as $error) {
            $todosLosErrores[] = $error;
        }
    }
    
    // Hay algun error?
    if (count($todosLosErrores) > 0) {
        echo 'Errores encontrados: ' . PHP_EOL;
        foreach ($todosLosErrores as $error) {
            echo $error;
        }
    } else {
        $_SESSION["Nombre"] = $resultadoNombre['valor'];
        $_SESSION["Email"] = $resultadoEmail['valor'];
        $_SESSION["Edad"] = $resultadoEdad['valor'];
        
        echo 'Nombre: ' . $_SESSION["Nombre"] . PHP_EOL;
        echo 'Email: ' . $_SESSION["Email"] . PHP_EOL;
        echo 'Edad: ' . $_SESSION["Edad"] . PHP_EOL;
    }
} else {
    echo 'Acceso no valido';
}