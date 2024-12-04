<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion vehiculo</title>
    <style>
          *{
        margin: 0 10px;
        padding: 0;
        border: 0;
        box-sizing: border-box;
        vertical-align: baseline;
        }
        body{
            display: flex;
          
            justify-content: center;/* alinear eje principal*/
            align-items: center;/* alinear elementos de la fila*/
           
        }
        .info-container{
            border: 1px solid green;
            padding: 20px;
            border-radius: 5px;
            background-color: aliceblue;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.3);
            
        } 
        .info-container label{
            display: block;
            margin-bottom:5px;
        }
    </style>
</head>
<body>
    <div class="info-container">
        <?php
        $tipoVehiculo = $_POST['txtVehiculo'] ?? null;
        $marca = $_POST['txtmarca'] ?? null;
        $cantRuedas = $_POST['txtcantruedad'] ?? null;
        $cantPuertas = $_POST['cantP']!=null && $_POST['cantP'] != "" ? $_POST['cantP'] : "La moto no tiene puertas.";
        $encendido = $_POST['vehiculoencendido'] ?? null;
        $output = <<<OUT
        <label><h4>Tipo Vehiculo: $tipoVehiculo</h4></label>
        <label><h4>Marca del Vehiculo: $marca</h4></label>
        <label><h4>Cantidad Ruedas: $cantRuedas</h4></label>
        <label><h4>Cantidad Puertas: $cantPuertas</h4></label>
        <label><h4>¿Esta Encendido?: $encendido</h4></label>
        OUT;
        echo $output;
        ?>
    </div>
</body>
</html>