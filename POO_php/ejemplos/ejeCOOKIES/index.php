<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $color =$_COOKIE["color"]?? "color-dafault";
    echo
    ?>
    <div class="container">
        <div class="content-header">
            <?php 
            if (isset($_COOKIE['usuario'])) {
                echo " <h2><Hola: {$_COOKIE['usuario']}</h2>";
                # code...
            }else{
                echo "<h2>Usuario no loqueado</h2>";
                echo "<a href='login.php'>Iniciar sesion</a>";
                
            }
            
            ?>
        </div>
    </div>
</body>
</html>