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
        <form action="procesar03.php" method="post">
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
                <label for="txtFechan">Fecha de nacimiento</label>
                <input type="date" name="txtFechan" id="txtFechan">
            </div>
            <div class="form-group">
                <label for="txtCiudad">Ciudad</label>
                <select name="txtCiudad" id="txtCiudad" required>
                    <option value="">-----------------</option>
                    <option value="Bogotá">Bogotá</option>
                    <option value="Medellín">Medellín</option>
                    <option value="Cali">Cali</option>
                    <option value="Barranquilla">Barranquilla</option>
                    <option value="Cartagena">Cartagena</option>
                    <option value="Bucaramanga">Bucaramanga</option>
                    <option value="Pereira">Pereira</option>
                    <option value="Santa Marta">Santa Marta</option>
                    <option value="Ibagué">Ibagué</option>
                    <option value="Manizales">Manizales</option>
                </select>
            </div>

            <button type="submit">Enviar</button>

        </form>
    </div>
</body>
</html>