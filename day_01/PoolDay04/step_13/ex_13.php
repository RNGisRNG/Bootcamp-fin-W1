<?php

function is_major($age){
    $isMajor = $age >= 18 ? "Majeur\n" : "Mineur\n";
    echo $isMajor;
}

?>