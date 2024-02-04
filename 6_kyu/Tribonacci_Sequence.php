<?php

function tribonacci($signature, $n)
{
  for ($i = 3; $i < $n; $i++) {
    array_push($signature, array_sum(array_slice($signature, $i - 3, $i)));
  }

  return array_slice($signature, 0, $n);
}
