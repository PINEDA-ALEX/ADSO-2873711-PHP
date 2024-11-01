<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Formulario Usuario</title>
</head>
<body>
    <div class="form-container">
        <form action="procesar02.php" method="post">
            <h2>Crear Usuario</h2>
            <div class="form-group">
                <label for="txtNombre">Mombre</label>
                <input type="tex" name="txtNombre" id="txtNombre">
            </div>

            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="Email" name="txtEmail" id="txtEmail">
            </div>

            <div class="form-group">
                <label for="txtTelefono">Telefono</label>
                <input type="tel" name="txtTelefono" id="txtTelefono">
            </div>

            <div class="form-group">
                <label for="txtPassword">contraseña</label>
                <input type="password" name="txtPassword" id="txtPassword">
            </div>

            <button type="submit">Enviar</button>

        </form>
    </div>
</body>
</html>