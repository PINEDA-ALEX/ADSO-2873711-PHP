<?php

try {
    $dbPDO = new PDO("mysql:host=localhost;dbname=personasCPIC","root","");
    
    $dbPDO->setAttribute(PDO::ATTR_ERRORDE. PDO::ERRMODE_ECEPTIO)
} catch (PDOException  $exception) {
     echo $exception->getMessage();
     die();
}