<?php
class Habitacion {
    private $id, $numero, $tipo, $precio, $descripcion, $imagen;

    public function __construct($id, $numero, $tipo, $precio, $descripcion, $imagen = '') {
        $this->id = $id;
        $this->numero = $numero;
        $this->tipo = $tipo;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
    }

    public function getId() { return $this->id; }
    public function getNumero() { return $this->numero; }
    public function getTipo() { return $this->tipo; }
    public function getPrecio() { return $this->precio; }
    public function getDescripcion() { return $this->descripcion; }
    public function getImagen() { return $this->imagen; }
}
