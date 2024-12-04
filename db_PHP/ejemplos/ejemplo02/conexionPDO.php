<?php
define("DRIVER", "mysql");
define("HOST", "localhost");
define("DB_NAME", "personascpic");
define("DB-USER", "root");
define("DB_PASSWORD", "");
try {
   $dsn = DRIVER.":host=".HOST.";dbname=".DB_NAME;
    $dbPDO = new PDO($dsn,"root","");
    $dbPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException  $exception) {
     echo $exception->getMessage();
     die();
}

try {
    $nombre = "juan";
    $email = "juan@gmail.com";
    $contrsenia = "123";
    $peso = 60.5;
    $cantidadHijos = 0;

    $sqlPDO = $dbPDO->prepare("INSERT INTO personas(nommbre, email, cantrasenia, peso, cantidadHijos) VALUES
    (?,?,?,?,?)");
    $sqlPDO->bindParam(1, $nombre);
    $sqlPDO->bindParam(2, $email);
    $sqlPDO->bindParam(3, $contrsenia);
    $sqlPDO->bindParam(4, $peso);
    $sqlPDO->bindParam(5, $cantidadHijos);

    if($sqlPDO->execute()){
        echo "personas ingresada con exito";
    }else{
        echo "error al ingresar la persona";
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}