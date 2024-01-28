<?php

/**
 * Complete the function that accepts a string parameter, and reverses each word in the string. All spaces in the string should be retained.
 * 
 * Examples
 * "This is an example!" ==> "sihT si na !elpmaxe"
 * "double  spaces"      ==> "elbuod  secaps"
 */

 function reverseWords($str) {
    //Divide la cadena en palabras 
    $palabras = explode(" ", $str);
    $palabrasInvertidas = [];

    //Se itera sobre el array de palabras invirtiendo cada una de ellas.
    foreach ($palabras as $indice => $palabra) {
        $palabrasInvertidas[] = strrev($palabra);
    }

    //Se combinan las palabras invertidas en un string.
    return implode(" ", $palabrasInvertidas);
}