<?php

class MyTinyCalculator {
    private $a;
    private $b;
    private $result;

    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }

    public function getA(){
        return $this->a;
    }

    public function getB(){
        return $this->b;
    }

    public function getResult(){
        return $this->result;
    }

    public function setA($set){
        $this->a = $set;
    }

    public function setB($set){
        $this->b = $set;
    }

    public function setResult($set){
        $this->result = $set;
    }

    public function showResult(){
        echo $this->result."\n";
    }

    public function add(){
        $this->result =  $this->a + $this->b;
        return $this->result;
    }

    public function subtract(){
        $this->result = $this->a - $this->b;
        return $this->result;
    }

    public function multiply(){
        $this->result = $this->a * $this->b;
        return $this->result;
    }

    public function divide(){
        $this->result = $this->a / $this->b;
        return $this->result;
    }
}

?>