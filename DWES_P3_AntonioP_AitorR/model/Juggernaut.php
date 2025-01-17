<?php
include_once "Character.php";
class Juggernaut extends Character{
    private float $resistance;

    public function __construct(string $name, int $user,int $level = 0, $numBattle = 0) {
       
        $hp = rand(140, 200);
        $damage = rand(20, 30);
        $resistance = rand(10, 40) / 10;
       
        parent::__construct($name, $hp, $damage, $user, $numBattle, $level);

        $this->resistance = $resistance;
    }


    public function getResistance(){
        return $this->resistance;
    }


    public function setResistance($resistance){
        $this->resistance = $resistance;
        return $this;
    }

    public function __toString(){
        return parent:: __toString() . "    Resistance: " . $this->resistance;
       }

    public function reduceDamage() {
        $reducedDamage = $this->getDamage() * $this->resistance;  
        $newHp = $this->getHp() - $reducedDamage;
        $this->setHp($newHp);
    }
    
}
?>