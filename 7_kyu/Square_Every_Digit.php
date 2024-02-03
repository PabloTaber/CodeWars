<?php

function square_digits($num): int
{
    return implode("", array_map(fn ($valor) => $valor * $valor, str_split($num)));
}
