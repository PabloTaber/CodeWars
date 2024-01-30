<?php

function dblLinear($n) {
    $secuencia = [1];
    $indiceY = 0;
    $indiceZ = 0;

    while (count($secuencia) <= $n) {
        $y = 2 * $secuencia[$indiceY] + 1;
        $z = 3 * $secuencia[$indiceZ] + 1;

        if ($y < $z) {
            $secuencia[] = $y;
            $indiceY++;
        } elseif ($y > $z) {
            $secuencia[] = $z;
            $indiceZ++;
        } else {
            // Evitar duplicados
            $secuencia[] = $y;
            $indiceY++;
            $indiceZ++;
        }
    }

    return $secuencia[$n];
}
