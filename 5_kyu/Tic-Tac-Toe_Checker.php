<?php

function is_solved(array $board): int {
    $arrayDiagonalPrincipal = [];
    $arrayDiagonalSecuandaria = [];
    $j = 2; //Valor para calcular la diagonal secundaria
    $terminado = true;

    for ($i=0; $i < 3; $i++) { 

        $fila = array_count_values($board[$i]);
        $columna = array_count_values(array_column($board, $i));

        if (isset($fila[1]) && $fila[1] === 3 || isset($columna[1]) && $columna[1] === 3) {
            return 1;
        } elseif (isset($fila[2]) && $fila[2] === 3 || isset($columna[2]) && $columna[2] === 3) {
            return 2;
        } elseif (isset($fila[0]) && $fila[0] != 0) {
            $terminado = false;
        }
        
        //Obtener suma diagonal principal
        $arrayDiagonalPrincipal[] = $board[$i][$i]; 

        //Obtener suma diagonal secundaria
        $arrayDiagonalSecuandaria[] = $board[$i][$j-$i];
    }

    $diagonalPrincipal = array_count_values($arrayDiagonalPrincipal);
    $diagonalSecuandaria = array_count_values($arrayDiagonalSecuandaria);

    //Comprobar diagonales
    if (isset($diagonalPrincipal[1]) && $diagonalPrincipal[1] == 3 || isset($diagonalSecuandaria[1]) && $diagonalSecuandaria[1] === 3) {
        return 1;
    } elseif (isset($diagonalPrincipal[2]) && $diagonalPrincipal[2] === 3 || isset($diagonalSecuandaria[2]) && $diagonalSecuandaria[2] === 3) {
        return 2;
    }

    //Solo si ninguno ganó se llega hasta aqui
    return $terminado ? 0 : -1; 
  }

