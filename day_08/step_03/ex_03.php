<?php

class MyAttributes {
    private $a;
    private $b;

    function __construct($val1, $val2){
        $this->a = $val1;
        $this->b = $val2;
    }

    function getA(){
        return $this->a;
    }

    function setA($set){
        $this->a = $set;
    }

    function getB(){
        return $this->b;
    }

    function setB($set){
        $this->b = $set;
    }

    function display(){
        echo $this->getA()." ".$this->getB()."\n";
    }
}

?>