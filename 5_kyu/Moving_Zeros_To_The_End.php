<?php

function moveZeros(array $items): array {

    $sinZeros = array_filter($items, function($item) {return $item !== 0 && $item !== 0.0;});

    return array_pad($sinZeros, sizeof($items), 0);
}
