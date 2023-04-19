<?php

/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$o = stream_get_line(STDIN, 256 + 1, "\n");

if(!is_string($o))
    echo "Error\n";
else {
    switch($o){
        case "Scissors":
            echo "Stone\n";
            break;
        case "Stone":
            echo "Hand\n";
            break;
        case "Hand":
            echo "Scissors\n";
            break;
        default:
            echo "Error\n";
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

?>