<?php

function removeNb($n) {
    $resultado = [];

    $suma = ($n * ($n + 1)) / 2; 

    for ($a = 1; $a <= $n; $a++) {
        //Calcular b despejando de la ecuación: a * b = suma - a - b
        $b = ($suma - $a) / ($a + 1);

        //Verificar si b es entero y está en el rango de numeros
        if (is_int($b) && $b <= $n) {
            $resultado[] = [$a, $b];
        }
    }
    return $resultado;
}