<?php

function calc($operator, $nbr1, $nbr2){
    $result = 0;
    switch($operator){
        case "+":
            $result = $nbr1 + $nbr2;
            break;
        case "*":
            $result = $nbr1 * $nbr2;
            break;
        case "/":
            $result = $nbr1 / $nbr2;
            break;
        case "%":
            $result = $nbr1 % $nbr2;
            break;
        case "-":
            $result = $nbr1 - $nbr2;
            break;
        default:
            echo "nop";
    }
    return $result;
}

?>