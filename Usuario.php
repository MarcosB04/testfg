<?php
class Usuario {
    private $dni, $clave, $nombre, $apellidos, $direccion, $provincia, $localidad, $cp, $telefono, $email, $rol;

    public function __construct($dni, $clave, $nombre, $apellidos, $direccion = '', $provincia = '', $localidad = '', $cp = '', $telefono = '', $email = '', $rol = 'cliente') {
        $this->dni = $dni;
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->direccion = $direccion;
        $this->provincia = $provincia;
        $this->localidad = $localidad;
        $this->cp = $cp;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->rol = $rol;
    }

    public function getDni() { return $this->dni; }
    public function getClave() { return $this->clave; }
    public function getNombre() { return $this->nombre; }
    public function getApellidos() { return $this->apellidos; }
    public function getDireccion() { return $this->direccion; }
    public function getProvincia() { return $this->provincia; }
    public function getLocalidad() { return $this->localidad; }
    public function getCp() { return $this->cp; }
    public function getTelefono() { return $this->telefono; }
    public function getEmail() { return $this->email; }
    public function getRol() { return $this->rol; }
}
