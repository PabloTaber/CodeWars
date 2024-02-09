<?php

function persistence(int $num): int {
    $contador = 0;

    while ($num > 9) {
        $num = array_product(str_split(strval($num)));
        $contador++;
    }
  
    return $contador;
}


