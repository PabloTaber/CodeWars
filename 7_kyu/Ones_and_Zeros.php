<?php

function binaryArrayToNumber($arr) 
{
    $resultado = 0;

    foreach(array_reverse($arr) as $indice => $valor) {
        $resultado += $valor * (pow(2,$indice));
    }

    return $resultado;
}
