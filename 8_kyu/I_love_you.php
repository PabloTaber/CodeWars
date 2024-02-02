<?php

function how_much_i_love_you(int $nb_petals): string
{
    $frases = ["I love you", "a little", "a lot", "passionately", "madly", "not at all"];
    $indice = ($nb_petals - 1) % count($frases);

    return $frases[$indice];
}
