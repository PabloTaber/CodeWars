<?php

function dirReduc($arr) {
    $i = 0;
    $opuestos = [
        "NORTH" => "SOUTH",
        "SOUTH" => "NORTH",
        "WEST" => "EAST",
        "EAST" => "WEST"
    ];

    while ($i < count($arr) - 1){ 
        if ($arr[$i] === $opuestos[$arr[$i+1]]) {
            
            array_splice($arr,$i,2);
            
            if ($i > 0) {
                $i--;
            }

        } else {
            $i++;
        }
    }

    return $arr;
}

