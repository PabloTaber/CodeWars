<?php

function sum_strings($a, $b)
{
    $reversaA = strrev($a);
    $reversaB = strrev($b);
    $resultado = "";
    $tamanoA = strlen($reversaA);
    $tamanoB = strlen($reversaB);
    $acc = 0;

    for ($i = 0; $i < max($tamanoA, $tamanoB); $i++) {
        $valorA = $i < $tamanoA ? (int)$reversaA[$i] : 0;
        $valorB = $i < $tamanoB ? (int)$reversaB[$i] : 0;
        $sum = $valorA + $valorB + $acc;

        $acc = $sum > 9 ? 1 : 0;
        $sum %= 10; //Solo modifica el valor de $sum si es mayor de 10. Ej: 8 % 10 = 8
   
        $resultado = $sum.$resultado;
    }

    return $acc ? $acc.$resultado : ltrim($resultado, '0');
}

