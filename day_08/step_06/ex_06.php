<?php

class Character {
    protected $name;
    protected $endurance = 50;
    protected $agility = 2;
    protected $strength = 2;
    protected $mana = 2;
    const CLASSE = "Character";

    public function __construct($name){
        $this->name = $name;
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

class Mage extends Character {
    const CLASSE = "Mage";
    protected $name;
    protected $endurance = 70;
    protected $strength = 3;
    protected $agility = 10;
    protected $mana = 10;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->creation();
    }

    public function __destruct(){
        echo $this->getName().": By the four gods, I passed away...\n";
    }

    public function attack(){
        echo $this->getName()." :Feel the power of my magic !\n";
    }

    public function creation(){
        echo $this->getClass().": May the gods be with me.\n";
    }
}

class Paladin extends Character {
    const CLASSE = "Paladin";
    protected $name;
    protected $endurance = 100;
    protected $strength = 10;
    protected $agility = 8;
    protected $mana = 3;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->creation();
    }

    public function __destruct(){
        echo $this->getName().": Aarrg I can’t believe I’m dead...\n";
    }

    public function attack(){
        echo $this->getName().": I'll crush you with my hammer !\n";
    }

    public function creation(){
        echo $this->getClass().": I'll engrave my name in the history !\n";
    }
}

?>