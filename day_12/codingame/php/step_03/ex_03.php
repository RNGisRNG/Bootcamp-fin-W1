<?php

function affiche_moi_ca($spaceNbr, $row, $symbol){
    $space = " ";
    $nbrSymbol = $symbol;

    for($i = 1; $i < $spaceNbr; $i++)
        $space .= " ";

    for($i = 0; $i < $row; $i++){
        echo "$space$nbrSymbol\n";
        $space .= " ";
        $nbrSymbol .= $symbol;
    }
}

?>