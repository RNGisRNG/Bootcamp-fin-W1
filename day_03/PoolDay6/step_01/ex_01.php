<?php

function my_generate_file($name){
    $file = fopen($name.".txt", "x");
    if($file === false)
        return false;

    return true;
}

?>