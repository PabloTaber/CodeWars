<?php

function maps($array)
{
    return array_map(fn ($valor) => $valor * 2, $array);
}
