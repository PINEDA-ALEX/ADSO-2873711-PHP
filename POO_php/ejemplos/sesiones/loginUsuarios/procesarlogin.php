<?php
$tipoUsuario = $_POST['txtTipoUsuario']?? null;
$usuario = $_POST['txtUsuario']?? null;
$password = $_POST['txtPassword']?? null;

$listaUsuarios = $_SESSION['usuario']?? null;

if($listaUsuarios != null){
    for($i=0 $i < $listaUsuarios, $i++){
        if($listaUsuarios[$i]["tipoUsuario"] == $tipoUsuario && $listaUsuarios[$i]["usuario"]== $usuario && $listaUsuarios[$i]["password"]== $password){
        }?>
        <h2>bienvenido <?php echo $usuario;?> </h2>
        <p>usted es un <?php echo $tipoUsuario; ?></p>

        <?php

        
        }else{?>
        <h2>usted no se encuentra registro</h2>
        <a href="registro.php">registrase</a>
<?php

        }
    }
?>