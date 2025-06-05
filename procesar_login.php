<?php
require_once 'config/conexion.php';
require_once 'controladores/GestorUsuarios.php';

session_start();
$gestor = new GestorUsuarios($conexion);
$usuarioDB = $gestor->buscarPorEmail($_POST['email'] ?? '');

if ($usuarioDB && password_verify($_POST['clave'] ?? '', $usuarioDB['clave'])) {
    $_SESSION['usuario'] = $usuarioDB;
    header("Location: vistas/dashboard.php");
} else {
    echo "Correo o contraseña incorrectos.";
}
