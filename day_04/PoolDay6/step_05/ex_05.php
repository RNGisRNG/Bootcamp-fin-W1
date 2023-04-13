<?php

function json_to_object($json){
    $json = json_decode($json);

    if(!$json)
        return false;

    return $json;
}

?>