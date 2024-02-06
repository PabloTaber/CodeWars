<?php

function moveZeros(array $items): array 
{
    return array_pad(array_filter($items, fn($item) => $item !== 0 && $item !== 0.0), sizeof($items), 0);
}
