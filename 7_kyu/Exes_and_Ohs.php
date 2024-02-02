<?php

function XO($cadena)
{
    $cadena = strtolower($cadena);

    $countX = substr_count($cadena, 'x');
    $countO = substr_count($cadena, 'o');

    return $countO === $countX;
}
