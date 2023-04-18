<?php

function str_beautifuler($str = null){
    $newStr = "";

    if(!is_string($str))
        return null;

    $words = explode(" ", $str);
    foreach($words as $word){
        $wordEndCap = strtolower($word);
        $wordEndCap = strrev($wordEndCap);
        $wordEndCap = ucfirst($wordEndCap);
        $wordEndCap = strrev($wordEndCap);

        $newStr .= $wordEndCap." ";
    }

    return trim($newStr);
}

?>