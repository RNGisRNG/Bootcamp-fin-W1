<?php

function get_authorized_users($permission, $users){
    $login = "";

    foreach($users as $keys => $values){
        if(is_array($values)){
            foreach($values as $key => $value){
                if($key === "login")
                    $login = $value."\n";

                if($key === "permissions"){
                    if(is_array($value) && in_array($permission, $value) || $value === $permission)
                        echo $login;
                }
            }
        }else{
            if($keys === "login")
                $login = $values."\n";

            if($keys === "permissions"){
                if(is_array($values) && in_array($permission, $values) || $values === $permission)
                    echo $login;
            }
        }
    }
}

?>