<?php

function print_until($max){
    $i = 0;

    if($max < 0){
        echo "Boulet !\n";
        return false;
    }else{
        while($i <= $max){
            echo $i++."\n";
        }
        return true;
    }
}

?>