<?php

function sum_rec($nbr, $iteration){
    if(!is_int($nbr) || !is_int($iteration))
        return null;

    if($iteration === 0)
        return $nbr;

    if($iteration > 0)
        return sum_rec($nbr + $iteration, $iteration-1);
    else
        return sum_rec($nbr + $iteration, $iteration+1);
}

?>