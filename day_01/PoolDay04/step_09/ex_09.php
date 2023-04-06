<?php

function multiples($nbr){
    $multiple = 0;

    while($multiple < 200000 && $nbr < 200000) {
        $multiple += $nbr;
        echo "$multiple\n";
    }
}

?>