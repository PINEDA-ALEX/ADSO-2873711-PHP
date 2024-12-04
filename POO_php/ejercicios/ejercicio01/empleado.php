<?php
class Empleado {
    private $nombre;
    private $sueldo;
    private $email;
    private $fechaNacimiento;
    private $peso;
    private $altura;

    // Método para inicializar los atributos
    public function inicializar($nombre, $sueldo, $email, $fechaNacimiento, $peso, $altura) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        $this->email = $email;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    // Método para imprimir nombre y si paga impuestos
    public function imprimir() {
        echo "<h2>Empleado: {$this->nombre}</h2>";
        echo $this->debePagarImpuestos($this->sueldo) 
            ? "<p>Debe pagar impuestos.</p>" 
            : "<p>No debe pagar impuestos.</p>";
        
        $edad = $this->calcularEdad();
        echo "<p>Edad: {$edad} años.</p>";
        echo $edad >= 18 
            ? "<p>Puede votar.</p>" 
            : "<p>No puede votar.</p>";
    }

    // Método privado para verificar si paga impuestos
    private function debePagarImpuestos($sueldo) {
        return $sueldo > 2000000;
    }

    // Método para calcular la edad
    public function calcularEdad() {
        $nacimiento = new DateTime($this->fechaNacimiento);
        $hoy = new DateTime();
        $diferencia = $hoy->diff($nacimiento);
        return $diferencia->y;
    }
}
?>
