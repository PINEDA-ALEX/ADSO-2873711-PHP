<?php
include 'Cuenta.php';

session_start();

// Crear una cuenta inicial si no existe en la sesión
if (!isset($_SESSION['cuenta'])) {
    $_SESSION['cuenta'] = new Cuenta("123456", "jhon", 5000000, "Ahorro");
}

$cuenta = $_SESSION['cuenta'];

// Capturar datos del formulario
$accion = $_POST['accion'] ?? null;
$nombre = $_POST['nombre'] ?? null;
$monto = $_POST['monto'] ?? 0;
$cuentaDestinoNumero = $_POST['cuentaDestino'] ?? null;

$resultado = "";

if ($nombre !== "jhon") {
    $resultado = "El nombre del titular no coincide con la cuenta.";
} else {
    switch ($accion) {
        case 'ingresar':
            $resultado = $cuenta->ingresarDinero($monto);
            break;
        case 'retirar':
            $resultado = $cuenta->retirarDinero($monto);
            break;
        case 'pagar':
            $resultado = $cuenta->pagarFactura($monto);
            break;
        case 'transferir':
            if (!empty($cuentaDestinoNumero)) {
                $cuentaDestino = new Cuenta($cuentaDestinoNumero, "Usuario Destino", 1000000, "Corriente");
                $resultado = $cuenta->transferirSaldo($cuentaDestino, $monto);
            } else {
                $resultado = "Debe ingresar un número de cuenta destino.";
            }
            break;
        default:
            $resultado = "Acción no válida.";
    }
}

// Mostrar resultado
echo "<h2>Resultado</h2>";
echo "<p>$resultado</p>";
echo "<a href='index.php'>Regresar</a>";
?>
