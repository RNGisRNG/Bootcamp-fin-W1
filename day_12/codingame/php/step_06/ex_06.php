<?php

function count_e($str){
    preg_match_all('#e|E#', $str, $result);
    echo (count($result[0])+1)."\n";
}

?>