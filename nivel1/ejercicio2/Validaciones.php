<?php

function validadorNombre($nombre)
{
    $errores = [];

    if (empty($nombre)) {
        $errores[] = 'El nombre es obligatorio';
        return ['valido' => false, 'errores' => $errores];
    }

    $nombre = trim($nombre);

    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/", $nombre)) {
        $errores[] = 'El nombre solo puede contener letras ';
    }

    if (strlen($nombre) < 2) {
        $errores[] = 'El nombre debe tener al menos dos letras ';
    }

    if (strlen($nombre) > 15) {
        $errores[] = 'El nombre tiene muchas letras ';
    }

    // Si no hay errores 
    if (empty($errores)) {
        return ['valido' => true, 'valor' => $nombre];
    } else {
        return ['valido' => false, 'errores' => $errores];
    }
}

function validadorEmail($email)
{
    $errores = [];

    if (empty($email)) {
        $errores[] = 'El Email es obligatorio ';
        return ['valido' => false, 'errores' => $errores];
    }

    $email = trim($email);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'El formato debe ser email@ejemplo.cc ';
    }

    // Si no hay errores
    if (empty($errores)) {
        return ['valido' => true, 'valor' => $email];
    } else {
        return ['valido' => false, 'errores' => $errores];
    }
}

function validadorEdad($edad)
{
    $errores = [];
    if (empty($edad)) {
        $errores[] = 'La edad es obligatoria ';
        return ['valido' => false, 'errores' => $errores];
    }

    if (!is_numeric($edad)) {
        $errores[] = 'La edad debe ser un numero ';
        return ['valido' => false, 'errores' => $errores];
    }

    if ($edad < 1) {
        $errores[] = 'La edad deber ser mayor que cero ';
    } elseif ($edad > 100) {
        $errores[] = 'La edad no puede ser mayor que cien ';
    }

    // Si no hay errores
    if (empty($errores)) {
        return ['valido' => true, 'valor' => $edad];
    } else {
        return ['valido' => false, 'errores' => $errores];
    }
}
