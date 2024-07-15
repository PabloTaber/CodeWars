<?php

function reverseLetter($str)
{
    return implode('', array_filter(str_split(strrev($str)), fn($letra) => ctype_alpha($letra)));
}