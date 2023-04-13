<?php

function display_xml_nodes($xmlstr, $node){
    $arrStr = preg_match_all('#<'.$node.'>(.+)</'.$node.'>#', $xmlstr, $arr);

    if($arrStr === false)
        return false;

    foreach($arr[1] as $str){
            echo "$str\n";
    }

    return true;
}

?>