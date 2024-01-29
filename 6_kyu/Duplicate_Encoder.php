<?php

function duplicate_encode($word){
	$resultado = "";
  $minusculas = strtolower($word);

  foreach (str_split($minusculas) as $key => $letra) {
    $resultado .= substr_count($minusculas, $letra) > 1 ? ")" : "("; 
  }
  
  return $resultado;
}
