<?php

function break_cat(){
    while(true){
        $line = trim(fgets(STDIN));
        echo $line."\n";
        if(!$line){
            break;
        }
    }
}

break_cat();

?>