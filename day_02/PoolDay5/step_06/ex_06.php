<?php

function my_print_session($searchKey){
    foreach($_SESSION as $key => $value){
        if($key === $searchKey)
            echo $value."\n\n";
    }
}

?>