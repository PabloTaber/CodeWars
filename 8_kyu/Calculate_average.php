<?php

function find_average($array): float {

    return empty($array) ? 0 : array_sum($array) / sizeof($array);
}