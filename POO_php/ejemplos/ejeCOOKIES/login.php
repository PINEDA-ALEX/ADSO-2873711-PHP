<?php
setcookie("usuario", "juan", time() + 3600,"/");
echo "Cookie Cerrada.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Anterior</a>
</body>
</html>