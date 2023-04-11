<?php

function continue_cat(){
    $continue = true;
    while($continue){
        $line = trim(fgets(STDIN));
        echo $line."\n";
        if(!$line){
            $continue = false;
            continue;
        }
    }
}

continue_cat();

?>