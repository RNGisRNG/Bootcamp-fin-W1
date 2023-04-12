<?php

function check_user_acl($user, $permission){
    foreach($user as $key => $values){
        if($key === "permissions"){
            if(is_array($values) && in_array($permission, $values) || $values === $permission)
                return true;
        }
    }
    return false;
}

?>