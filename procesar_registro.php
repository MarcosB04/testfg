<?php
require_once 'config/conexion.php';
require_once 'clases/Usuario.php';
require_once 'controladores/GestorUsuarios.php';

session_start();

$gestor = new GestorUsuarios($conexion);

if ($gestor->buscarPorEmail($_POST['email'] ?? '')) {
    echo "El correo ya está registrado.";
    exit;
}

$clave = password_hash($_POST['clave'] ?? '', PASSWORD_DEFAULT);
$usuario = new Usuario($_POST['dni'] ?? '', $clave, $_POST['nombre'] ?? '', $_POST['apellidos'] ?? '', '', '', '', '', '', $_POST['email'] ?? '');

if ($gestor->insertarUsuario($usuario)) {
    $_SESSION['usuario'] = ['email' => $_POST['email']];
    header("Location: vistas/dashboard.php");
} else {
    echo "Error al registrar.";
}
