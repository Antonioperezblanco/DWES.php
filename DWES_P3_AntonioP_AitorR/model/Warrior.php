<?php
include_once $_SERVER ["DOCUMENT_ROOT"] . "/DWES_P3_AntonioP_AitorR/model/Character.php";
class Warrior extends Character{
    private string $weapon;

    public function __construct(string $name, int $user, string $weapon,int $level = 0, int $numBattle = 0) {
        $hp = rand(100, 120);
        $damage = rand(30, 40);

        parent::__construct($name, $hp, $damage, $user, $numBattle, $level);

        $this->weapon = $weapon;
    }

    public function getWeapon(){
        return $this->weapon;
    }

    public function setWeapon($weapon){
        $this->weapon = $weapon;

        return $this;
    }
    
    public function aumentarDaño(){
        if ($this->weapon=="espada"){
            $newDamage = $this->getDamage()*1.2;
            $this->setDamage($newDamage);
        }else{
            $newHp = $this->getHp()* 1.2;
            $this->setHp($newHp);

        }
    }
    function __toString(){
        return parent::__toString() . "Type of weapon: $this->weapon";
    }
}