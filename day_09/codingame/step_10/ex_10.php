<?php

function reverse_str($str){
    $str = strrev($str);
    $str = strtr($str, "E><{[(\/)]}bpdq", "3<>}])/\([{dqbp");
    echo $str;
}

?>