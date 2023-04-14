<?php

function sum_it($nb = null, $iteration = null){
    if(!is_int($nb) || !is_int($iteration))
        return null;

    $result = $nb;

    if($iteration > 0){
        for($i = 1; $i <= $iteration; $i++)
            $result += $i;
    }else{
        for($i = $iteration; $i < 0; $i++)
            $result += $i;
    }

    return $result;
}

?>