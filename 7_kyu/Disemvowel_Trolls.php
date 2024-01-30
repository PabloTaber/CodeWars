<?php

function disemvowel($string) {
    $vocales = ["a", "e", "i", "o", "u"];

    return str_ireplace($vocales, "", $string);
}