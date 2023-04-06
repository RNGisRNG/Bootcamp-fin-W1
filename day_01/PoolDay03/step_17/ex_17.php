<?php

function array_key($arr){
    foreach($arr as $key=>$value){
        if($key === "key")
            return $value;
    }
}

?>