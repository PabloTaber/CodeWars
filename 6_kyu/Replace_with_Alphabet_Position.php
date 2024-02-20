<?php

function alphabet_position(string $s): string {
    return implode(' ', array_map(fn($valor) => ord($valor) - 96, array_filter(str_split(strtolower($s)), fn($valor) => $valor >= 'a' && $valor <= 'z')));
  }