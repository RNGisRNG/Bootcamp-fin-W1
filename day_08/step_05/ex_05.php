<?php

class Character {
    protected $name;
    protected $endurance;
    protected $agility;
    protected $strength;
    protected $mana;
    const CLASSE = "Character";

    public function __construct($name){
        $this->name = $name;
        $this->endurance = 50;
        $this->agility = 2;
        $this->strength = 2;
        $this->mana = 2;
    }

    public function getName(){
        return $this->name;
    }

    public function getEndurance(){
        return $this->endurance;
    }

    public function getAgility(){
        return $this->agility;
    }

    public function getStrength(){
        return $this->strength;
    }

    public function getMana(){
        return $this->mana;
    }

    public function getClass(){
        return $this::CLASSE;
    }
}

?>