<?php
class Persona{
    public $nombre;
    public $email;
    public $edad;
    public function __construct($nom = null ,$em = null,$ed = null)
    {
        echo "sea crea un objeto persona<br>";
        $this->nombre = $nom;
        $this->emil = $em;
        $this->edad = $ed;
    }
    public function saludar(){
        echo <<<TEXT
   <br> Hola soy $this->nombre, tengo $this->edad años y mi email es $this->email
TEXT;
    }

    public function _destruct()
    {
        echo "<br> se destruye";
    }

}
?>