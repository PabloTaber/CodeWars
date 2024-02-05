<?php

function validBraces($braces) {
    $inversos = [
        ')' => '(',
        '}' => '{',
        ']' => '[',
    ];

    $pila = new SplStack();

    for ($i = 0; $i < strlen($braces); $i++) {
        if (isset($inversos[$braces[$i]])) {
            // Si el carácter actual es una llave de cierre
            $top = $pila->isEmpty() ? '' : $pila->pop();

            if ($top !== $inversos[$braces[$i]]) {
                return false; // No coincide con el tope del stack
            }
        } else {
            // Si el carácter actual es una llave de apertura
            $pila->push($braces[$i]);
        }
    }

    return $pila->isEmpty();
}

