<?php

class Usuario {
    private $id;
    private $dni;
    private $clave;
    private $nombre;
    private $apellidos;
    private $nacionalidad;
    private $telefono;
    private $email;
    private $rol;
    private $activo;



    //Constructor
    public function __construct($dni, $clave, $nombre, $apellidos, $nacionalidad, $telefono, $email, $rol, $activo = 1) {
        $this->id = null; // El ID se asignará automáticamente por la base de datos
        $this->dni = $dni;
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->nacionalidad = $nacionalidad;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->rol = $rol;
        $this->activo = $activo;
        
    }

    // Getters y Setters para cada atributo
    public function getId() {
        return $this->id;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getNacionalidad() {
        return $this->nacionalidad;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRol() {
        return $this->rol;
    }

    public function getActivo() {
        return $this->activo;
    }


    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }
    
    public function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

}

?>