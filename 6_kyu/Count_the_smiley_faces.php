<?php

function count_smileys($arr): int {
  $carasSonrientes = [":)", ":D", ";)", ";D", ":-)", ":~)", ":-D", ":~D", ";-)", ";~)", ";-D", ";~D"];

  return count(array_filter($arr, function($valor) use ($carasSonrientes) {return in_array($valor, $carasSonrientes);}));
}
