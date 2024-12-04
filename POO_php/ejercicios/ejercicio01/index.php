<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ejercicio01/css/style.css">
    <title>Formulario Empleado</title>
</head>
<body>
    <div class="form-container">
        <form action="procesardatos.php" method="post">
            <h2>Registrar Empleado</h2>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="sueldo">Sueldo:</label>
                <input type="number" name="sueldo" id="sueldo" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento" required>
            </div>
            <div class="form-group">
                <label for="peso">Peso (kg):</label>
                <input type="number" name="peso" id="peso" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="altura">Altura (m):</label>
                <input type="number" name="altura" id="altura" step="0.01" required>
            </div>
            <div class="form-group">
                <button type="submit">Registrar</button>
            </div>
        </form>
    </div>
</body>
</html>
