<?php

function array_key($arr){
    $value = null;
    foreach($arr as $keys=>$values){
        if($keys === "key")
            $value =  $values;
    }
    return $value;
}

?>