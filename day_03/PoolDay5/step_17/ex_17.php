<?php

function check_url($whiteList){
    if(isset($_GET["token"])){
        $token = implode($whiteList);
        $isOk = $token === ($_GET["token"]) ? 1 : -1;
        return $isOk;
    }
    return false;
}

?>