<?php

function narcissistic(int $value): bool {
    $numero = strval($value);
    $longitud = strlen($numero);
    $suma = 0;

    for ($i=0; $i < $longitud ; $i++) { 
        $suma += pow($numero[$i], $longitud);
    }

    return $value === $suma;
}
