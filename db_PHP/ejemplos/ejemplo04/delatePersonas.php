<?php
require_once 'connection.php';

$id = intval($_GET['id'] ?? -1);

$sqlPDO = $dbPDO->prepare("DELETE FROM personas WHERE id=:id");
$sqlPDO->bin