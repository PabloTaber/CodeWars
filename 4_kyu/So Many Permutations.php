<?php

function permutations(string $s): array {
    $resultado = [];

    $arrayEntrada = str_split($s);

    for ($i=0; $i < count($arrayEntrada); $i++) { 
        $resultado[] = array_merge($arrayEntrada, $resultado);
    }




    /*
    for ($i=0; $i < strlen($s); $i++) { 
        $letra = $s[$i];
        $cadenaSinLetra = substr($s, 0, $i) . substr($s, $i + 1);
        
        echo("iteración i:$i letra: ".$letra.PHP_EOL);
        echo("cadena: ".$cadenaSinLetra.PHP_EOL);   

        for ($j=0; $j < strlen($cadenaSinLetra); $j++) { 
            $cadenaAInsertar = substr($cadenaSinLetra, 0, $j) . $letra . substr($cadenaSinLetra, $j);

            echo ("iteración j:$j cadena: $cadenaAInsertar".PHP_EOL);
            $resultado[] = $cadenaAInsertar;   
        }
        $resultado[] = $cadenaSinLetra . $letra;
    }*/

    return array_unique($resultado);
}


var_dump(permutations("ab"));