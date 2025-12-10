<?php

try {
    $dividendo = 10;
    $divisor = 0;

    echo "El resultado de la division es: ";
    echo $dividendo / $divisor;
    
} catch (DivisionByZeroError $e) {
    // Si llega a ocurrir esta excepcion DivisionByZeroError, mostramos mensaje Error
    echo "No puedes dividir por cero!";
}

?>