<?php

include_once "../model/User.php";

function conectarBD(){
    $server = "127.0.0.1";
    $user = "root";
    $password = "Sandia4you";
    $db = "proyecto";

    $conexion = new mysqli($server, $user, $password, $db);

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    } else {
        return $conexion;
    }
}

function createTableMage(){
    $conexion = conectarBD();
    $sql = "CREATE TABLE IF NOT EXISTS mage (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR (50), hp INT, damage INT, lvl INT, numBattle INT, dodge BOOLEAN, health INT, id_user INT,FOREIGN KEY (id_user) REFERENCES usuario(id))";
    if (mysqli_query($conexion, $sql)) {

    } else {
        echo "Error al crear la tabla: " . mysqli_error($conexion);
    }
}
function createTableJuggernaut(){
    $conexion = conectarBD();
    $sql = "CREATE TABLE IF NOT EXISTS juggernaut (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR (50), hp INT, damage INT, lvl INT, numBattle INT, resistance INT, id_user INT, FOREIGN KEY (id_user) REFERENCES usuario(id))";
    if (mysqli_query($conexion, $sql)) {

    } else {
        echo "Error al crear la tabla: " . mysqli_error($conexion);
    }
}
function createTableWarrior(){
    $conexion = conectarBD();
    $sql = "CREATE TABLE IF NOT EXISTS warrior (id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR (50), hp INT, damage INT, lvl INT, numBattle INT, weapon VARCHAR(10), id_user INT, FOREIGN KEY (id_user) REFERENCES usuario(id))";
    if (mysqli_query($conexion, $sql)) {
    
    } else {
        echo "Error al crear la tabla: " . mysqli_error($conexion);
    }
}


function createTableUsuario(){
    $conexion = conectarBD();
    $sql = "CREATE TABLE IF NOT EXISTS usuario (nickname VARCHAR (50),pass VARCHAR(255), id INT PRIMARY KEY AUTO_INCREMENT, email VARCHAR (50))";
    if (mysqli_query($conexion, $sql)) {
        
    } else {
        echo "Error al crear la tabla: " . mysqli_error($conexion);
    }
}
