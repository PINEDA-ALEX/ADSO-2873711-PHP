<?php
session_start();
$tipoUsuario = $_POST['txtTipoUsuario']?? null;
$usurio=$_POST['txtUsuario']?? null;
$password = $_POST['txtPasword']?? null;
$direccion = $_POST['txtDireccion']?? null;
$telefono = $_POST['txtTelefono']?? null;


$_SESSION['txtTipoUsuario'] = $tipoUsuario;
$_SESSION['txtusuario'] = $usurio;


if(isset($_SESSION['usuarios'])){
    $_SESSION['usuarios'] = [];
   
}
$arrayUsuario = $_SESSION['usuario'];
$arrayelementos = array("tipoUsuario"=>$tipoUsuario,"usuario"=>$usurio,"password"=>$password, "direccion"=> $direccion, "telefono"=> $telefono);
$arrayUsuario[] = $arrayelementos;
$_SESSION = $arrayUsuario;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <h2>variables de sesion guardadas con exito</h2>
        <a href="visualizar.php">visualizar</a>
    </div>
</body>
</html>