<?php

require_once 'conexion.php';

try {
    $sqlPDO = $dbPDO->prepare("SELECT * FROM personas");

    $sqlPDO->setFetchMode(PDO::FETCH_OBJ);

    $sqlPDO->execute();

    while($row = $sqlPDO->fetch()){
        echo"<br>Nombre:".$row->nommbre;
        echo"<br>email:".$row->email;
        echo"<br>contraseña:".$row->cantrasenia;
        echo"<br>peso:".$row->peso;
        echo"<br>cantidadhijos:".$row->cantidadHijos;
        echo"<hr>";
       // echo"<pre>"; print_r($row); echo"</pre>";

    }

} catch (PDOException $ex) {
    $ex->getMessage();
}