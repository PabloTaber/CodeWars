<?php

function createPhoneNumber($numbersArray) {
    $area = implode('', array_slice($numbersArray, 0, 3));
    $prefijo = implode('', array_slice($numbersArray, 3, 3));
    $numero = implode('', array_slice($numbersArray, 6, 4));

    return "($area) $prefijo-$numero";

  }