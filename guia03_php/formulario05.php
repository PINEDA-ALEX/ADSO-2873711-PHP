<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css">
    <title>Formulario 05</title>
</head>
<body>
    <div class="form-container">
        <form action="procesar05.php" method="post">
            <h2>Crear Usuario</h2>
            <div class="form-group">
                <label for="txtNombre">Mombre</label>
                <input type="tex" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtCedula">Numero de documento</label>
                <input type="tex" name="txtCedula" id="txtCedula">
            </div>
            <div class="form-group">
                <label for="txtTelefono">Telefono</label>
                <input type="tel" name="txtTelefono" id="txtTelefono">
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="Email" name="txtEmail" id="txtEmail">
            </div>
            <div class="form-group">
                <label for="txtEstudio"> Estudios</label>
                <label for="txtEStudio"><input type="radio" name="txtEStudio" id="txtEStudio" value="1">1- No tiene estudio. </label>
                <label for="txtEStudio"><input type="radio" name="txtEStudio" id="txtEStudio" value="2">2- Estudio primario. </label>
                <label for="txtEStudio"><input type="radio" name="txtEStudio" id="txtEStudio" value="3">3- Estudio secundarios. </label>
                


             </div>

            <button type="submit">Enviar</button>

        </form>
    </div>
</body>
</html>