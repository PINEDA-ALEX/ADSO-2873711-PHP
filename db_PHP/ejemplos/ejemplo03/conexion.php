<?php
require_once 'config.php';
try {
    $dsn = DRIVER.":host=".HOST.";dbname=".DB_NAME;
     $dbPDO = new PDO($dsn,"root","");
     $dbPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOException  $exception) {
      echo $exception->getMessage();
      die();
 }
 