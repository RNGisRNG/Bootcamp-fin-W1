<?php

function write_into_my_file($str, $file, $append = false){
    $content = fopen($file, "a");

    if($append)
       $content .= fwrite($content, $str);
    else
        $content = fwrite($content, $str);

    if(!$content)
        return false;

    return true;
}

?>