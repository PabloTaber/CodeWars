<?php

function zeroFuel($distanceToPump, $mpg, $fuelLeft) 
{
    return ($mpg * $fuelLeft) >= $distanceToPump;
}