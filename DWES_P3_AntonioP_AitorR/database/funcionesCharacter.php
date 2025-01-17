<?php
include_once $_SERVER ["DOCUMENT_ROOT"] . "/DWES_P3_AntonioP_AitorR/database/funcionesDB.php";

function insertMage(Mage $mage){
    $conectar = conectarBD();
    $sql = "INSERT INTO mage (name, hp, damage, lvl, numBattle, dodge, health, id_user) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conectar->prepare($sql);
    
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conectar->error);
    
    }
    $idUser = $mage->getUser();
    $name = $mage->getName();
    $hp = $mage->getHp();
    $damage = $mage->getDamage();
    $lvl = $mage->getLevel();
    $numBattle = $mage->getNumBattle();
    $dodge = $mage->getDodge();
    $health = $mage->getHealth();
    

    $stmt->bind_param("siiiiiii" , $name, $hp, $damage, $lvl, $numBattle, $dodge, $health, $idUser );

    if (!$stmt->execute()) {
        echo "Error al insertar el Mago: " . $stmt->error . "<br>";
    } else {
        $id = $conectar->insert_id;
        $mage->setId($id);
    }

    $stmt->close();
    $conectar->close();
}
function insertJuggernaut(Juggernaut $juggernaut){
    $conectar = conectarBD();
    $sql = "INSERT INTO juggernaut (name, hp, damage, lvl, numBattle, resistance, id_user) VALUES(?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conectar->prepare($sql);
    
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conectar->error);
    }

    $name = $juggernaut->getName();
    $hp = $juggernaut->getHp();
    $damage = $juggernaut->getDamage();
    $lvl = $juggernaut->getLevel();
    $numBattle = $juggernaut->getNumBattle();
    $resistance = $juggernaut->getResistance();
    $idUser = $juggernaut->getUser();

    $stmt->bind_param("siiiiii", $name, $hp, $damage, $lvl, $numBattle, $resistance, $idUser);

    if (!$stmt->execute()) {
        echo "Error al insertar el Juggernaut: " . $stmt->error . "<br>";
    } else {
        $id = $conectar->insert_id;
        $juggernaut->setId($id);
    }

    $stmt->close();
    $conectar->close();
}
function insertWarrior(Warrior $warrior){
    $conectar = conectarBD();
    $sql = "INSERT INTO warrior (name, hp, damage, lvl, numBattle, weapon, id_user) VALUES(?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conectar->prepare($sql);
    
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conectar->error);
    }

    $name = $warrior->getName();
    $hp = $warrior->getHp();
    $damage = $warrior->getDamage();
    $lvl = $warrior->getLevel();
    $numBattle = $warrior->getNumBattle();
    $weapon = $warrior->getWeapon();
    $idUser = $warrior->getUser();

    $stmt->bind_param("siiiisi", $name, $hp, $damage, $lvl, $numBattle, $weapon, $idUser);

    if (!$stmt->execute()) {
        echo "Error al insertar el guerrero: " . $stmt->error . "<br>";
    } else {
        $id = $conectar->insert_id;
        $warrior->setId($id);
    }

    $stmt->close();
    $conectar->close();
}


?>