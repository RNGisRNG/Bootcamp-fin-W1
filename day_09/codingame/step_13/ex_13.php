<?php

function tel_number($str){
    $num = "(";
    $str = str_split($str);

    for($i = 0; $i < 3; $i++)
        $num .= $str[$i];

    $num .= ") ";

    for($i = 3; $i < 6; $i++)
        $num .= $str[$i];

    $num .= "-";

    for($i = 6; $i < 10; $i++)
        $num .= $str[$i];

    echo $num."\n";
}

?>