<?php

function get_unit($n){
    $result = $n;
    $j = 0;
    do{
        $n = $n/10;
        $j++;
    }while($n > 1);

    for($i = 1; $i < $j; $i++)
        $result = $result%10;

    if(is_float($result))
        echo round($result);
    else
        echo $result;
}

?>