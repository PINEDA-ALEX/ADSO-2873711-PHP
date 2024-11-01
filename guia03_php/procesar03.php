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
        $email = (isset($_POST ["txtEmail"])==true)?$_POST["txtEmail"]:null;    

        $telefono = $_POST["txtTelefono"] ?? null;
        $edad = (isset($_POST ["txtFechan"])==true)?$_POST["txtFechan"]:null;
        $ciudad = (isset($_POST ["txtCiudad"])==true)?$_POST["txtCiudad"]:null;

        $edad = $_POST["txtFechan"]?? null;
        $años = $edad == null ? "Indeterminado": (date("Y") - date("Y",strtotime($edad)));

        
        echo "<span>Nombre: $nombre</span>";
        echo "<span>Emial: $email</span>";
        echo "<span>Telefono: $telefono</span>";
        echo "<span>Años: $años</span>";
        echo "<span>ciudad: $ciudad</span>";

        if($años <=17){
            echo"<span>Menor de edad</span>";
        }else{
            echo"<span>Mayor de edad </span>";
        }



        ?>
    </div>
</body>
</html>