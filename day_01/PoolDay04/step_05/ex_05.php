<?php

function print_range($min){
    $isFortyTwo = $min === 42 ? true : false;

    do {
        echo "$min\n";
        $min++;
    }while($min <= 42);

    return $isFortyTwo;
}

?>