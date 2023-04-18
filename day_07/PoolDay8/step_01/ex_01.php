<?php

function which_is_longer($str1 = null, $str2 = null){
    if(!is_string($str1) || !is_string($str2))
        return -1;

    $str1 = strlen($str1);
    $str2 = strlen($str2);

    if($str1 === $str2 || $str1 > $str2)
        return $str1;
    else
        return $str2;
}

?>