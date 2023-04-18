<?php

function clear_and_replace($str, $word){
    $test = preg_replace('#'.$word.'#', "Pangolin", $str, 2, $count);
    var_dump($test);
}

?>