<?php

function solution(array $list): string {
    $arrayAux = [];
    $resultado = "";
    
    foreach ($list as $value) {
        if (empty($arrayAux) || end($arrayAux) === $value - 1) {
            $arrayAux[] = $value;
        } else {
            if (count($arrayAux) > 2) {
                $resultado .= "$arrayAux[0]-{$arrayAux[count($arrayAux) - 1]},";
            } else if (count($arrayAux) === 1) {
                $resultado .= "$arrayAux[0],";
            } else {
                $resultado .= "$arrayAux[0],$arrayAux[1],";
            }

            $arrayAux = [];
            $arrayAux[] = $value;
        }

    }

    // Agrega el último rango o números al resultado
    if (!empty($arrayAux)) {
        if (count($arrayAux) > 2) {
            $resultado .= "$arrayAux[0]-{$arrayAux[count($arrayAux) - 1]}";
        } else {
            $resultado .= implode(",", $arrayAux);
        }
    }

    return $resultado;
}