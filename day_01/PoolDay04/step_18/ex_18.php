<?php

function return_calls(){
    static $i = 0;
    $i++;
    return $i * 3;
}

?>