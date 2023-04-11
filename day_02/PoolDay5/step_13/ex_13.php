<?php

function my_sort_files(&$arr){
    sort($arr);
    foreach($arr as $value)
        echo "$value\n";
}

?>