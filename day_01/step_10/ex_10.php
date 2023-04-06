<?php

function print_calls(){
    static $i = 0;
    echo $i;
    $i++;
}

?>