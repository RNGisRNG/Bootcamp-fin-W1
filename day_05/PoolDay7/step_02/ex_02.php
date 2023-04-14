<?php

function my_facto_rec($nbr = null){
    if(gettype($nbr) !== "integer" || $nbr === null || $nbr < 0)
        return null;
    elseif($nbr === 0)
        return 1;

    return ($nbr * my_facto_rec($nbr -1));
}

?>