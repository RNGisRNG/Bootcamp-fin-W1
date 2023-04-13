<?php

function check_email(){
    if(isset($_POST["email"])){
        if(preg_match('#^[^\s@]+@[^\s@.]+\.[^\s@.]+$#', $_POST["email"])){
            echo "courriel valide\n";
        }else
            echo "courriel invalide\n";
    }
}

?>