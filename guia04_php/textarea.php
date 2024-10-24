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
        <form action="procesar02.php" method="post">
        <h2>Control de cahckbox - operaciones</h2>
        <div class="form-group">
            <label for="txtNombre"> Nombre</label>
            <input type="tex" name="txtNombre" id="txtNombre">
        <div class="form-group">
            <fieldset>
                <legend>Deportes</legend>
                <label> <input type="checkbox" name="deportes[]" value="futbol">Futbol</label>
                <label> <input type="checkbox" name="deportes[]" value="baloncesto">baloncesto</label>
                <label> <input type="checkbox" name="deportes[]" value="voleyvol">voleyvol</label>
                <label> <input type="checkbox" name="deportes[]" value="Natacion">Natacion</label>
                <label> <input type="checkbox" name="deportes[]" value="Ajedrez">Ajedrez</label>
                <label> <input type="checkbox" name="deportes[]" value="tenis de mesa">tenis de mesa</label>
                <label> <input type="checkbox" name="deportes[]" value="Tenis">Tenis</label>
                <label> <input type="checkbox" name="deportes[]" value="Natacion">Natacion</label>
                
            </fieldset>
        </div>
        <div class="form-group">
            <button type="submit">Enviar</button>
        </div>
        </form>
    </div>
</body>
</html>