<?php 
function conectar(){
    $mysqli = new mysqli("eu-cdbr-west-01.cleardb.com", "bd70ddb9bdd266" ,"4ab4237e", "heroku_bf6515120fbd5f2");
    //control de errores
    if($mysqli->connect_errno){
        echo "Fallo la conexión (' . $mysqli->connect_errno . ') " . $mysqli->connect_errno;
    }
    return $mysqli;
}