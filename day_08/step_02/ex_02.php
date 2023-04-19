<?php

class MyAttribute {

    public $attr;

    public function __construct($attribute){
        $this->attr = $attribute;
    }

    public function display(){
        echo $this->attr."\n";
    }
}

?>