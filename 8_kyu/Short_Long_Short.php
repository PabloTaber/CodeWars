<?php

function shortLongShort(string $s1, string $s2): string
{
    return strlen($s1) < strlen($s2) ? $s1 . $s2 . $s1 : $s2 . $s1 . $s2;
}