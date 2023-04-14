<?php

function my_pow_rec($a = null, $power = null){
    if(!is_int($a) || !is_int($power) || $power < 0)
        return null;
    elseif($power === 0)
        return 1;

    return $a * my_pow_rec($a, $power -1);
}

?>