<?php

function spupof($str){
    $str = strtolower($str);
    $str = strtr($str, "abcdefghijklmnopqrstuvwxyz", "bcdefghijklmnopqrstuvwxyza");
    echo "$str\n";
}

?>