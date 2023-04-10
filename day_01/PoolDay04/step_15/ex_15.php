<?php

function make_it_rain(&$myArr){
    foreach($myArr as &$value){
        $value = "rain";
    }
}

?>