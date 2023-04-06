<?php

function aff_array($arr){
    foreach($arr as $value){
        echo "$value\n";
    }
    return count($arr);
}

?>