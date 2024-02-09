<?php

function countPositivesSumNegatives ($input) {
  return !$input ? [] : array(count(array_filter($input, fn($valor) => $valor > 0)), array_sum(array_filter($input, fn($valor) => $valor < 0)));
}
