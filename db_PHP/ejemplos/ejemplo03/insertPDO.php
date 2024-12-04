<?php
require_once 'config.php';

try {
    $nombre = "pedro";
    $email = "p@gmail.com";
    $contrsenia = "678";
    $peso = 63.5;
    $cantidadHijos = 2;

    $sqlPDO = $dbPDO->prepare("INSERT INTO personas(nommbre, email, cantrasenia, peso, cantidadHijos) VALUES
    (:nombre,:email,:cantrasenia,:peso,:cantidadHijos)");
    $sqlPDO->bindParam(":nombre", $nombre, PDO::PARAM_STR);
    $sqlPDO->bindParam(":email", $email, PDO::PARAM_STR);
    $sqlPDO->bindParam(":cantrasenia", $contrsenia, PDO::PARAM_STR);
    $sqlPDO->bindParam(":peso", $peso);
    $sqlPDO->bindParam(":cantidadHijos", $cantidadHijos, PDO::PARAM_INT);

    if($sqlPDO->execute()){
        echo "personas ingresada con exito";
    }else{
        echo "error al ingresar la persona";
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}