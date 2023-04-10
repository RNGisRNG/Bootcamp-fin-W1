<?php

function print_until($max){
    $i = 0;

    if($max < 0){
        echo "Boulet !\n";
        return false;
    }
    while($i <= $max){
        echo $i++."\n";
    }
    return true;
}

?>