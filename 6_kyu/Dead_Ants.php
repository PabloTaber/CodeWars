<?php

function deadAntCount($ants): int {

    $sinVivas = str_replace("ant", " ", $ants);
    return max(substr_count($sinVivas, "a"),substr_count($sinVivas, "n"),substr_count($sinVivas, "t")); 
}
