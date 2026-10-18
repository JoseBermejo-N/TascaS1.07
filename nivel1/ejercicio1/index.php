<?php


try {
    
    $dividend = 10;
    $divisor = 0;

    if ($divisor === 0) {
        
        throw new Exception("No se puede dividir entre cero!\n");
    }

    $result = $dividend / $divisor;
    echo "El resultado de dividir " . $dividend . " entre " . $divisor . " es: " . $result . "\n";

} catch (Exception $e) {

    echo  $e->getMessage() . "\n";
}

