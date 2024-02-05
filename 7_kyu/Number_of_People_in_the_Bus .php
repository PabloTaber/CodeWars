<?php

function number($bus_stops)
{
    return array_reduce($bus_stops, fn ($acc, $valor) => $valor[0] - $valor[1] + $acc, 0);
}
