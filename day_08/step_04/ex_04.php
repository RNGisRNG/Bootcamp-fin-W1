<?php

class MyTinyCalculator {
    private $a;
    private $b;
    private $result;

    function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }

    function getA(){
        return $this->a;
    }

    function getB(){
        return $this->b;
    }

    function getResult(){
        return $this->result;
    }

    function setA($set){
        $this->a = $set;
    }

    function setB($set){
        $this->b = $set;
    }

    function setResult($set){
        $this->result = $set;
    }

    function showResult(){
        echo $this->result."\n";
    }

    function add(){
        $this->result =  $this->a + $this->b;
        return $this->result;
    }

    function subtract(){
        $this->result = $this->a - $this->b;
        return $this->result;
    }

    function multiply(){
        $this->result = $this->a * $this->b;
        return $this->result;
    }

    function divide(){
        $this->result = $this->a / $this->b;
        return $this->result;
    }
}

?>