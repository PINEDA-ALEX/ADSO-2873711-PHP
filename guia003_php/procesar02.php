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
        $password = $_POST["txtPassword"] ?? null;

        echo "<span>Nombre: $nombre</span>";
        echo "<span>Emial: $email</span>";
        echo "<span>Telefono: $telefono</span>";
        echo "<span>Clave: $password</span>";


        ?>
    </div>
</body>
</html>
