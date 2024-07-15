<?php

function generator($a) 
{
    for ($i=1; $i < 6  ; $i++) { 
        $resultado = $a * $i;
        yield "$a x $i = $resultado";
    }  
}