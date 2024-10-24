<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkbox01.css">
    <title>Document</title>
</head>
<body>
    <div class="info-container">
    <?php
    
        $nombre = $_POST['txtNombre']?? "";
        $deportes =  $_POST['deportes']?? null;
        $cantidadDeportes = count($deportes);
        $htmldeportes = "";
        foreach($deportes as $item){
            $htmldeportes .= "<label>$item</label>";
        }
        $outPut = <<<TEXT

        <label><h4>Nombre: $nombre</h4></label>
        <label><h4>Deportes: $cantidadDeportes</h4></label>
        <label><h4>Deportes selecionados:</h4></label>
        $htmldeportes

        TEXT;
        echo $outPut;

        /**echo"<pre>";
        print_r($deportes);
        echo"</pre>";*/
    
    ?>
    </div>
</body>
</html>