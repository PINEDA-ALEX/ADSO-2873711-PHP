<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculo</title>
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
            flex-direction: row;/* alinear elementos en fila*/
            justify-content: center;/* alinear eje principal*/
            align-items: center;/* alinear elementos de la fila*/
            height: 100vh;/**/
        }
        .form-container{
            border: 1px solid green;
            padding: 20px;
            border-radius: 5px;
            background-color: aliceblue;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.3);
        }
        .form-container h2{
            text-align: center;


        }
        .form-group input{
            border: 1px solid #ccc;
            padding: 3px;
            
        }
        .form-container label{
            display: block;
            padding: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;


        }
        .info-container{
            border: 1px solid green;
            padding: 20px;
            border-radius: 5px;
            background-color: aliceblue;
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.3);
            
        }
        .info-container span{
            display: block;
        }
        .esconder{  
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="process.php" method="post">
            <h2>Crear Usuario</h2>
            <div class="form-group">
                <label for="txtVehiculo">TIPO VEHICULO</label>
                <select name="txtVehiculo" id="tipoVehiculo">
                    <option value="">-----------------</option>
                    <option value="Moto">Moto</option>
                    <option value="Auto">Carro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="txtmarca">Marca</label>
                <input type="tex" name="txtmarca" id="txtmarca">
            </div>
            <div class="form-group">
                <label for="txtcantruedad">Cantidad de ruedas</label>
                <input type="number" name="txtcantruedad" id="txtcantruedad">
            </div>
            <div class="form-group" id="cantP">
                <label name="cantP" for="cantP">cantidad de puertas</label>
                <input type="number" name="cantP" id="cantP">
            </div>
            <div class="form-group">
                <label for="vehiculoencendido"> Vehiculo encendido</label>
                <label for="vehiculoencendido">
                    <input type="radio" name="vehiculoencendido" id="vehiculoencendido" value="no">
                     No 
                </label>
                <label for="vehiculoencendido">
                    <input type="radio" name="vehiculoencendido" id="vehiculoencendido" value="si">
                   Si
                </label>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <script>
        const cantPuertas = document.querySelector("#cantP")
        const tipoVehiculo= document.querySelector("#tipoVehiculo")

        tipoVehiculo.addEventListener("input", function(){
            if(tipoVehiculo.value == "Moto"){
                cantPuertas.classList.add("esconder")
            }else{
                cantPuertas.classList.remove("esconder")
            }
        })
    </script>
</body>
</html>
