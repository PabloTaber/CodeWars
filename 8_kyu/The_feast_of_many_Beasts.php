<?php

function feast($beast, $dish){
    return str_starts_with($beast, $dish[0]) && str_ends_with($beast, $dish[strlen($dish) -1]);
}