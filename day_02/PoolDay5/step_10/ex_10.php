<?php

function my_get_weird_info($nbr){
    $_GET["nbr_elem"] = $nbr;
    $i = 0;
    if(isset($_GET)){
        foreach($_GET as $key => $value){
            if($i == $_GET["nbr_elem"])
                break;

            echo '$_GET["'.$key.'"] = "'.$value.'"';
            $i++;
        }
        return 0;
    }
    return NULL;
}

?>