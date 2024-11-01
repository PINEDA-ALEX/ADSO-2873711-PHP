<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <div class="info-container">
        <?php
        $nombre = (isset($_POST["txtNombre"])==true)?$_POST["txtNombre"]:null;
        $cedula =(isset($_POST["txtCedula"])==true)?$_POST["txtCedula"]:null;
        $email = (isset($_POST ["txtEmail"])==true)?$_POST["txtEmail"]:null;    
        $telefono = $_POST["txtTelefono"] ?? null;
        $estudio =  $_POST["txtEStudio"] ?? null;

        

        
        echo "<span>Nombre: $nombre</span>";
        echo "<span>Numero de documento: $cedula </span>";
        echo "<span>Telefono: $telefono</span>";
        echo "<span>Emial: $email</span>";
        

        if($estudio == "1"){
            echo"<span>$nombre no tiene estudios</span>";
        }elseif($estudio == "2"){
            echo"<span>$nombre estudio hasta la primaria </span>";
        }else{
            echo"<span>$nombre estudios secundarios";
        }



        ?>
    </div>
</body>
</html>