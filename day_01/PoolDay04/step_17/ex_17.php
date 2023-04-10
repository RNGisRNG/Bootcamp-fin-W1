<?php

$arr = ["cem"=>"noel", "un"=>1, "deux"=>2, "sex"=>"zizi"];

function get_array_key($arr, $value){
    foreach($arr as $key => $values){
        if($values === $value)
            return $key;
    }
}

?>