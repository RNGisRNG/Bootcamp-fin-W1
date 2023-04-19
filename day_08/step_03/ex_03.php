<?php

class MyAttributes {
    private $a;
    private $b;

    public function __construct($val1, $val2){
        $this->a = $val1;
        $this->b = $val2;
    }

    public function getA(){
        return $this->a;
    }

    public function setA($set){
        $this->a = $set;
    }

    public function getB(){
        return $this->b;
    }

    public function setB($set){
        $this->b = $set;
    }

    public function display(){
        echo $this->getA()." ".$this->getB()."\n";
    }
}

?>