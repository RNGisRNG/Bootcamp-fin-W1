<?php


function check_types($arrTypes){
    foreach($arrTypes as $key => $array){
        foreach($array as $type){
            if($key !== gettype($type))
                return false;
        }
    }
    return true;
}

?>