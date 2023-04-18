<?php

function is_prime($nbr = null){
    if(!is_int($nbr))
        return null;

    if($nbr == 1)
        return false;

    for ($i = 2; $i < $nbr; $i++){
        if($nbr % $i == 0)
        return false;
    }

    return true;
}

?>