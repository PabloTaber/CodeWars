<?php

function solution($number)
{
    return array_sum(array_filter(range(1, $number - 1), fn ($valor) => $valor % 3 === 0  || $valor % 5 === 0));
}
