<?php

function say_my_name($name = null){

    if($name !== null)
        echo "My name is ".$name." !";
    else
        echo "My name is Toto !";
}

?>