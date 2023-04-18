<?php

function str_lower_epur($str = null){
    if(!is_string($str))
        return null;

    $newStr = "";
    $str = strtolower($str);
    $str = explode(" ", $str);

    foreach($str as $word){
        $word = strrev($word);
        $word = ucfirst($word);
        $word = strrev($word);

        $newStr .= $word." ";
    }

    return trim($newStr);
}

?>