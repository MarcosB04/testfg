<?php
require_once __DIR__ . '/../clases/Usuario.php';

class GestorUsuarios {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function insertarUsuario(Usuario $usuario) {
        $sql = "INSERT INTO usuarios (dni, clave, nombre, apellidos, direccion, provincia, localidad, cp, telefono, email, rol) 
                VALUES (:dni, :clave, :nombre, :apellidos, :direccion, :provincia, :localidad, :cp, :telefono, :email, :rol)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':dni', $usuario->getDni());
        $stmt->bindValue(':clave', $usuario->getClave());
        $stmt->bindValue(':nombre', $usuario->getNombre());
        $stmt->bindValue(':apellidos', $usuario->getApellidos());
        $stmt->bindValue(':direccion', $usuario->getDireccion());
        $stmt->bindValue(':provincia', $usuario->getProvincia());
        $stmt->bindValue(':localidad', $usuario->getLocalidad());
        $stmt->bindValue(':cp', $usuario->getCp());
        $stmt->bindValue(':telefono', $usuario->getTelefono());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':rol', $usuario->getRol());

        return $stmt->execute();
    }

    public function buscarPorEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute([':email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
