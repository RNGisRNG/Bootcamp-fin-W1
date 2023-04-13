<?php

function my_cat_files(...$path){
    $contents = "";

    foreach($path as $file){
        $openFile = fopen($file, 'r');
        $contents .= "_____".fread($openFile, filesize($file));
        fclose($openFile);
    }
    return substr_replace($contents, "", 0, 5);
}

?>