<?php

function highAndLow($numbers)
{
    $numbers = explode(" ", $numbers);
    return max($numbers)." ".min($numbers);
}
