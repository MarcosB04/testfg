<?php
require_once 'C:\xampp\htdocs\Hotel2-0\inc\gestores\GestorUsuarios.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$conexion = conectar();
$gestor = new GestorUsuarios($conexion);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['clave'])) {
    $email = trim($_POST['email']);
    $clave = $_POST['clave'];


    if (empty($email) || empty($clave)) {
        $_SESSION['error_login'] = "Por favor, introduce el email y la contraseña.";
    } else {

        $usuario = $gestor->buscarPorEmail($email);

        if (!$usuario) {
            $_SESSION['error_login'] = "El correo electrónico no está registrado.";
            
        } elseif ($usuario && password_verify($clave, $usuario->getClave())) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['rol'] = $usuario->getRol();
            header("Location: Rooms.php");
            
        } else {
            $_SESSION['error_login'] = 'Credenciales incorrectas.';
            echo "¡Credenciales incorrectas!";
        }
    }



}



