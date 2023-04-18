<?php

function count_char($str){
    $arrOcc = [];
    $newStr = "";

    $str = trim($str);
    $str = explode(" ", $str);
    $str = implode($str);

    $char = str_split($str);

    foreach($char as $value){
        $arrOcc[$value] = substr_count($str, $value);
    }

    ksort($arrOcc);

    return $arrOcc;
}

?>