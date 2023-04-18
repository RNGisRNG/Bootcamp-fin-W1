<?php

function return_calls(){
    static $i = 0;
    $i++;

    if($i % 2 == 0)
        return $i;
    else
        return null;
}

?>