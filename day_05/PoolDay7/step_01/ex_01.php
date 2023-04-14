<?php

function my_facto($nbr = null){
    if(gettype($nbr) !== "integer" || $nbr === null || $nbr <= 0)
        return null;

    $f = 1;

    for($i = 1; $i <= $nbr; $i++)
        $f *= $i;

    return $f;
}

?>