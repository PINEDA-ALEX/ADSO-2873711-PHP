<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkbox01.css">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <form action="procesar01.php" method="post">
        <h2>Control de cahckbox - operaciones</h2>
        <div class="form-group">
            <label for="txtNumero1"> Numero1</label>
            <input type="number" name="txtNumero1" id="txtNumero1">
        </div>
        <div class="form-group">
            <label for="txtNumero2"> Numero2</label>
            <input type="number" name="txtNumero2" id="txtNumero2">
        </div>
        <div class="form-group">
            <fieldset>
                <legend>operaciones</legend>
                <label> <input type="checkbox" name="operacion1" value="sumar">Sumar</label>
                <label> <input type="checkbox" name="operacion2" value="restar">restar</label>
                <label> <input type="checkbox" name="operacion3" value="multiplicar">multiplicar</label>
                <label> <input type="checkbox" name="operacion4" value="dividir">dividir</label>
            </fieldset>
        </div>
        <div class="form-group">
            <button type="submit">Enviar</button>
        </div>
        </form>
    </div>
</body>
</html>