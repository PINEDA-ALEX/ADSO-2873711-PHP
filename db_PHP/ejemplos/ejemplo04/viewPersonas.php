<?php
require_once 'connection.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ejemplo04/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <h2>Lista de Personas</h2>
        <div class="cards-container">
            <?php
              while ($row = $sqlPDO->ferch()) {?>
                <div class="card-element">
                    <div class="item-cards">nombre:<?php echo $row->nommbre?> </div>
                    <div class="item-cards">email:<?php echo $row->email?></div>
                    <div class="item-cards">paeso:<?php echo $row->peso?></div>
                    <div class="item-cards">cantidad hijos:<?php echo $row->cantidadHijos?></div>
                    <div class="item-cards">
                        <a href="editPersonas.php?id=<?php echo $row->id;?>">Editar</a>
                        <a href="delatePersonas.php">eliminar</a>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</body>
</html>