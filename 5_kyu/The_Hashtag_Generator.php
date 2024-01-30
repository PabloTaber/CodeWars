<?php

function generateHashtag($str) {

    $hashtag = str_replace(" ", "", ucwords($str));

    return $hashtag === "" || strlen($hashtag) >= 140 ? false : "#".$hashtag;

}