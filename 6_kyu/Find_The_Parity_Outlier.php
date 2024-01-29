<?php

function find($integers) {
    //Obtener un array de pares
    $pares = array_filter($integers, function ($valor) { return $valor % 2 === 0;});
    //Se obtiene el array de impares solo si es necesario, sino se devuelve el valor del unico par.
    return sizeof($pares) === 1 ? reset($pares) : reset(array_diff($integers, $pares));
}