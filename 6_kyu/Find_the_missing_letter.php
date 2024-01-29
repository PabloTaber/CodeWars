<?php

function find_missing_letter(array $array): string {
  $restultado = "";
  
  for ($i=0; $i < sizeof($array); $i++) { 
    //Comparar la letra actual sumando 1 con la letra siguiente del array.
    if (chr(ord($array[$i]) + 1) != $array[$i + 1]) {
        $restultado = chr(ord($array[$i]) + 1);
        break;
    }
  }

  return $restultado;
}