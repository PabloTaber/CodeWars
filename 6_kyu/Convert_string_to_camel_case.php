<?php

function toCamelCase($str){
    $resultado = "";
    $arrayPalabras = preg_split("/[-_]/", $str);


    foreach ($arrayPalabras as $clave => $palabra) {
        $resultado .= $clave === 0 ? $palabra : ucfirst($palabra);
    }

    return $resultado;
}