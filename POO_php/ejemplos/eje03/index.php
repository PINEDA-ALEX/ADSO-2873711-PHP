<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="POO_php/ejemplos/style/style.css">    
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
    </style>
</head>
<body>
    <div class="form-container">
    
        <form action="process.php" method="post">
        <h2>Crear Usuario</h2>
        <div class="form-group">
                <label for="txtCiudad">Ciudad</label>
                <select name="txtCiudad" id="txtCiudad" required>
                    <option value="">-----------------</option>
                    <option value="Bogotá">Moto</option>
                    <option value="Medellín">Carro</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="txtmarca">Marca</label>
                <input type="tex" name="txtmarca" id="txtmarca">
            </div>

            <div class="form-group">
                <label for="cantruedad">Cantidad de ruedas</label>
                <input type="tex" name="cantruedad" id="cantruedad">
            </div>

            <div class="form-group">
                <label for="cantruedadas">cantruedad de ruedas</label>
                <input type="tel" name="cantruedadas" id="cantruedadas">
            </div>
            <div class="form-group">
                <label for="vehiculoencendido"> Vehiculo encendido</label>
                <label for="vehiculoencendido"><input type="radio" name="vehiculoencendido" id="vehiculoencendido" value="1">1- No </label>
                <label for="vehiculoencendido"><input type="radio" name="vehiculoencendido" id="vehiculoencendido" value="2">2- Si. </label>
               
                


             </div>

            

            <button type="submit">Enviar</button>

        </form>
    </div>
</body>
</html>
