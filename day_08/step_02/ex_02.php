<?php

class MyAttribute {

    public $attr;

    function __construct($attribute){
        $this->attr = $attribute;
    }

    function display(){
        echo $this->attr."\n";
    }
}

?>