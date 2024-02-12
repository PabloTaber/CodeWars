<?php

function countSheep($arr)
{
    return count(array_filter($arr, fn ($valor) => $valor === true));
}
