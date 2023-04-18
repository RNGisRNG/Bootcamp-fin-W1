<?php

function get_next_prime($nbr = null){
    if(!is_int($nbr))
        return null;

    if($nbr == 1)
        return 2;

    for ($i = 2; $i < $nbr; $i++){
        if($nbr % $i == 0){
            return get_next_prime($nbr+1);
        }
    }

    return $nbr;
}

?>