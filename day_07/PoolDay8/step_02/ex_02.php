<?php

function my_rounds($nbr = null){
    if(!is_float($nbr))
        return null;

    $results = [];

    $results[0] = round($nbr);
    $results[1] = ceil($nbr);
    $results[2] = floor($nbr);

    echo "Results : $results[0] - $results[1] - $results[2]\n";
}

?>