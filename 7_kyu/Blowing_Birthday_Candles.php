<?php

function blowCandles(string $candles): int
{
    $soplidos = 0;

    for ($i=0; $i < strlen($candles); $i++) { 
        
        while ($candles[$i] > 0) {
            
            $candles[$i] = $candles[$i] - 1;
            
            if (isset($candles[$i + 1]) && $candles[$i + 1] > 0) {
                $candles[$i + 1] = $candles[$i + 1] - 1;
            }

            if (isset($candles[$i + 2]) && $candles[$i + 2] > 0) {
                $candles[$i + 2] = $candles[$i + 2] - 1;
            }

            $soplidos++;
        }
    }

    return $soplidos;
}