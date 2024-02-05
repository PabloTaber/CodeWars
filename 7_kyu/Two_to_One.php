<?php

function longest($a, $b) {
    $array = array_unique(str_split($a.$b));
    sort($array);
    return implode("", $array);
}