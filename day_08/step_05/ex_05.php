<?php

class Character {
    protected $name;
    protected $endurance;
    protected $agility;
    protected $strength;
    protected $mana;
    const CLASSE = "Character";

    function __construct($name){
        $this->name = $name;
        $this->endurance = 50;
        $this->agility = 2;
        $this->strength = 2;
        $this->mana = 2;
    }

    function getName(){
        return $this->name;
    }

    function getEndurance(){
        return $this->endurance;
    }

    function getAgility(){
        return $this->agility;
    }

    function getStrength(){
        return $this->strength;
    }

    function getMana(){
        return $this->mana;
    }

    function getClass(){
        return $this::CLASSE;
    }
}

?>