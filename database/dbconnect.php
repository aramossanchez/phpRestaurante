<?php 
function conectar(){
    $mysqli = new mysqli("eu-cdbr-west-01.cleardb.com", "b234c37892b334" ,"930e6a58", "restaurante");
    //control de errores
    if($mysqli->connect_errno){
        echo "Fallo la conexión (' . $mysqli->connect_errno . ') " . $mysqli->connect_errno;
    }
    return $mysqli;
}