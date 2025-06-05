<?php
require_once __DIR__ . '/../clases/Habitacion.php';

class GestorHabitaciones {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function insertarHabitacion(Habitacion $habitacion) {
        $sql = "INSERT INTO habitaciones (numero, tipo, precio, descripcion, imagen) 
                VALUES (:numero, :tipo, :precio, :descripcion, :imagen)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':numero', $habitacion->getNumero());
        $stmt->bindValue(':tipo', $habitacion->getTipo());
        $stmt->bindValue(':precio', $habitacion->getPrecio());
        $stmt->bindValue(':descripcion', $habitacion->getDescripcion());
        $stmt->bindValue(':imagen', $habitacion->getImagen());

        return $stmt->execute();
    }
}
