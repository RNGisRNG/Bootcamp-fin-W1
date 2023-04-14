<?php

function my_pow($a = null, $b = null){
    if(!is_int($a) || !is_int($b) || $b < 0)
        return null;

    $c = 1;
    for($i = 0; $i < $b; $i++)
        $c *= $a;

    return $c;
}

?>