<?php

function basicOp($op, $val1, $val2)
{
  $operaciones = [
    '+' => fn($a, $b) => $a + $b,
    '-' => fn($a, $b) => $a - $b,
    '*' => fn($a, $b) => $a * $b,
    '/' => fn($a, $b) => $a / $b,
  ];
  
  return $operaciones[$op]($val1, $val2);
}