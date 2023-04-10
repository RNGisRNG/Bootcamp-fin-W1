<?php

function print_double_array($myArr){
    foreach($myArr as $values){
        if(is_array($values)){
            foreach($values as $value){
                echo "$value\n";
            }
        }else
            echo "$values\n";
    }
}

?>