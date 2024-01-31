<?php

function sum_intervals(array $intervals): int {
    
    $columnaInicio = array_column($intervals, 0);
    $columnaFin = array_column($intervals, 1);
   

    array_multisort($columnaInicio, $columnaFin);
    var_dump($columnaInicio);
    var_dump($columnaFin);
 
    for ($i=0; $i < count($columnaInicio) ; $i++) { 
        if ($i > 0 && $columnaInicio[$i] <= $columnaFin[$i - 1]) {
            
            if ($columnaFin[$i - 1] > $columnaFin[$i]) {
                array_splice($columnaFin, $i, 1);
            } else {
                array_splice($columnaFin, $i - 1, 1);
            }
            
            array_splice($columnaInicio, $i, 1);
            $i = 0;
        }
    }

    return array_sum($columnaFin) - array_sum($columnaInicio); 
  }
