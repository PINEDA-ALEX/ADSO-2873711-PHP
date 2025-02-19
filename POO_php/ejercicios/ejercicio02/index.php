<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Gestión de Cuenta</title>
</head>
<body>
    <div class="form-container">
        <h2>Gestión de Cuenta</h2>
        <form action="procesar.php" method="POST">
            <label for="nombre">Nombre del Titular:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="monto">Monto:</label>
            <input type="number" id="monto" name="monto" required>

            <label for="cuentaDestino">Número de Cuenta Destino (si aplica):</label>
            <input type="text" id="cuentaDestino" name="cuentaDestino">

            <label for="accion">Acción:</label>
            <select id="accion" name="accion" required>
                <option value="ingresar">Ingresar Dinero</option>
                <option value="retirar">Retirar Dinero</option>
                <option value="pagar">Pagar Factura</option>
                <option value="transferir">Transferir Saldo</option>
            </select>

            <button type="submit">Realizar Acción</button>
        </form>
    </div>
</body>
</html>
