<?php

try {
    $dividendo = 10;
    $divisor = 0;

    echo "El resultado de la division es: " . PHP_EOL;
    echo $dividendo / $divisor;
    
} catch (DivisionByZeroError $e) {          /*DivisionByZeroError es clase de PHP, 
                                            la cual se activa al no poder divir por 0,
                                            ocurre la excepcion DivisionByZeroError, mostramos mensaje.*/
    echo "No puedes dividir por cero!";
}

?>