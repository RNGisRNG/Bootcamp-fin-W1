<?php

function get_execution_time(){
    echo round(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 7);
}

?>