<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <form action="procesarlogin.php" method="post">
            <h2>Inicio sesion</h2>
            <div class="form-group">
                <label for="txtTipousuario">tipo usuario</label>
                    <select name="txtTipousuario" id="txtTipousuario">
                        <option value="">-------</option>
                        <option value="estidiante">estudiante</option>
                        <option value="instructor">profesor</option>
                        <option value="administrador">administrador</option>
                    </select>
            </div>

            <div class="form-group">
                <label for="txtusuario">usuario</label>
                <input type="text" name="txtusuario" id="txtusuario">
            </div>

        <div class="form-group">
                <label for="txtpassword">password</label>
                <input type="password" name="txtpassword" id="txtpassword">
        </div>
        <div class="form-group">
                <button type="sudmit">enviar</button>
        </div>
        
        
        </form>
    </div>
</body>
</html>