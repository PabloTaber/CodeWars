<?php

function find_uniq($a) {
    $maximo = max($a);
    $minimo = min($a);
    $contMax = 0;
    $contMin = 0;

    for ($i=0; $i < 3; $i++) { 
        if ($a[$i] === $maximo) {
            $contMax++;
        } else {
            $contMin++;
        }
    }
    
    return $contMax > $contMin ? $minimo : $maximo;
}

//Soluciones que funcionaban pero no pasaban los test por falta de memoria o timeout.

/*
function find_uniq($a) {
    return +array_search(1, array_count_values(array_map('strval', $a)));
}*/

/*
function find_uniq($a) {
    sort($a);
    return $a[0] === $a[1] ? end($a) : $a[0];
}*/