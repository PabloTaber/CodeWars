<?php

function rgb($r,$g,$b){

    return convertirAHex($r).convertirAHex($g).convertirAHex($b);
  }

function convertirAHex($num) :string {
    $num = $num < 0 ? 0 : ($num > 255 ? 255 : $num);

    return $num < 16 ? "0".strtoupper(dechex($num)) : strtoupper(dechex($num));
  }