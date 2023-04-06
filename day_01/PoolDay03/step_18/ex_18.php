<?php

function get_args(...$arguments){
    return $arguments;
}

function get_last_arg(...$arguments){
    $nbrOfArg = count($arguments);
    return $arguments[$nbrOfArg-1];
}

?>