<?php

function make_pangolins(&$arr){
    foreach($arr as &$value)
        $value = "pangolin";
}

?>