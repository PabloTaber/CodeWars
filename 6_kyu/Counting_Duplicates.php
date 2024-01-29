<?php

function duplicateCount($text) {
    $duplicados = 0;
    if ($text === "") {
        return $duplicados;
    }
    $text = strtolower($text);
    $arraySinDuplicados = array_unique(str_split($text));

    foreach($arraySinDuplicados as $clave => $valor) {
        if (substr_count($text, $valor) > 1) {
            $duplicados++;
        }
    }

    return $duplicados;
  }
