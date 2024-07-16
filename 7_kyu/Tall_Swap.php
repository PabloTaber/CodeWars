<?php

function tail_swap(array $a): array 
{
    list($primeroParteA, $primeroParteB) = explode(':', $a[0]);
    list($segundoParteA, $segundoParteB) = explode(':', $a[1]);

    return ["$primeroParteA:$segundoParteB", "$segundoParteA:$primeroParteB"];
}