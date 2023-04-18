<?php

function my_mail($mail = null){
    if(!is_string($mail))
        return null;

    $test = preg_match('#@(.+)\..+$#', $mail, $result);

    if($test)
        echo $result[1];
}

?>