<?php
include_once $_SERVER ["DOCUMENT_ROOT"] . "/DWES_P3_AntonioP_AitorR/model/Character.php";


class Mage extends Character{
    private bool $dodge;
    private int $health;

    public function __construct(string $name, int $user, int $level = 0, int $numBattle = 0) {
        $hp = rand(120, 160);
        $damage = rand(50, 70);
        $dodge = rand(0, 1); 
        $health = rand(10, 30);
    
      
        parent::__construct($name, $hp, $damage, $user, $numBattle, $level);
    
        $this->dodge = $dodge;
        $this->health = $health;
    }
    public function getDodge(){
        return $this->dodge;
    }
    public function setDodge($dodge){
        $this->dodge = $dodge;

        return $this;
    }

    public function getHealth(){
        return $this->health;
    }

    public function setHealth($health){
        $this->health = $health;

        return $this;
    }

       public function __toString(){
        return parent:: __toString() . "Dodge: " . $this->dodge ? "Yes" : "NO" . "Health: $this->health";
       }

       public function dodging(&$damage){
        if ($this->dodge){
            $damage = 0;
            echo "Mage dodged the attack!";
        }
    }
    public function cure(){
        
    $currentHp = $this->getHp();   
    $newHp = $currentHp + $this->health; 
    
    if ($newHp > $this->health) {
        $newHp = $this->health;
    }
    
    $this->setHp($newHp);
    }
}
?>