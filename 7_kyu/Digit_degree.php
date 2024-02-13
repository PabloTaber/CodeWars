<?php

function digit_degree($n) {
    $arrayNumber = str_split(strval($n));
    
    return count($arrayNumber) <= 1 ? 0 : 1 + digit_degree(array_sum($arrayNumber));
}
