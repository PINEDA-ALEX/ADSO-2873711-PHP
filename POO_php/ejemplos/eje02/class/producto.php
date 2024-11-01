<?php
class Producto{
    private $id;
    private $nombre;
    private $precio;
    private $descripcion;

    public function __construct($id = null, $nom = null, $prec = null, $desc = null )
{
    $this->id = $id;
    $this->nombre = $nom;
    $this-> precio = $prec;
    $this-> descripcion = $desc;
}
public function __destruct()
{
    echo"<br> Se destruye el producto";
}

//SETTERs Y GETTERs
public function setId($id){ //Setta un nuevo valor al atributo id
    $this-> id = $id;
}
public function getId(){ //Retorna el valor actual de id
    return $this->id;
}
public function setNombre($nom){ //Setta un nuevo valor al atributo id
    $this-> nombre= $nom;
}
public function getNombre(){ //Retorna el valor actual de id
    return $this->nombre;
}
public function setPrecio($prec){ //Setta un nuevo valor al atributo id
    $this-> precio = $prec;
}
public function getPrecio(){ //Retorna el valor actual de id
    return $this->precio;
}
public function setDescripcion($desc){ //Setta un nuevo valor al atributo id
    $this-> descripcion = $desc;
}
public function getDescripcion(){ //Retorna el valor actual de id
    return $this->descripcion;
}
}