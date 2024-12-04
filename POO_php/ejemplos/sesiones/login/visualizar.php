<?php
session_start();
$tipoUsuario = $_SESSION['tipoUsuario']?? 'N/A';
$usuario=$_SESSION['usuario']?? 'N/A';
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
        <?php
        if($tipoUsuario != null && $usuario !=null){?>
            <h2>bienvenido <?php echo $usuario;?></h2>
            <p>usted es un <?php echo $tipoUsuario; ?> </p>

        <?php } else{ ?>
            <h2>usted no tiene acceso a esta sesion</h2>
            <?php } ?>

    
        <h2>bienvenido<?php echo $usuario;?> </h2>
        <p>usted es un <?php echo $tipoUsuario?></p>
        <a href="visualizar.php">visualizar</a>
    </div>
</body>
</html>