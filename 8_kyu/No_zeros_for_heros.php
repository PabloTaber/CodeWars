<?php
function noBoringZeros(int $n): int {

        return intval(rtrim(strval($n), "0"));
}