<?php

/*  input 3 :   +++
 *              +++
 *              +++
 *
 * input 1 :    +
 *
 *
 * input 5      +++++
 *              +++++
 *              +++++
 *              +++++
 *              +++++
 */

function display_plus($input){
    $row = "";

    for($i = 0; $i < $input; $i++){
        for($j = 0; $j < $input; $j++)
            echo "+";

        echo $row."\n";
    }
}

?>