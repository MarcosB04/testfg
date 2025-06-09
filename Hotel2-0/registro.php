<?php
require_once 'C:\xampp\htdocs\Hotel2-0\inc\gestores\GestorUsuarios.php';
session_start();

$conexion = conectar();
$gestorUsuarios = new GestorUsuarios($conexion);
    
//almacenamos el cliente de la sesión
$clienteSesion = $_SESSION['usuario'] ?? null; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $clave = $_POST['clave'];
    $nacionalidad = $_POST['nacionalidad'];
    $telefono = $_POST['telefono'];

    //validamos que el formato del Email recibido sea correcto
    /*
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Error: El formato del email es incorrecto.</p>";
        exit();
    }


    //validamos que el DNI tenga 9 caracteres de tamaño exactamente.
    if(strlen($dni) !== 9) {
        echo "<p>El DNI debe estar compuesto por 9 caracteres.</p>";
        exit();
    }

    //validamos que la letra introducida sea igual que la correspondiente con el DNI introducido
    $numerosDni = substr($dni, 0, 8);
    $letraDni = strtoupper(substr($dni, 8, 1));
    $mapaLetras = "TRWAGMYFPDXBNJZSQVHLCKE";
    $letraValida = $mapaLetras[$numerosDni % 23];

    if($letraDni !== $letraValida) {
        echo "<p>Error: La letra introducida no corresponde con el DNI.</p>";
        exit();
    }

    //validamos que el email no esté ya registrado
    if ($gestorUsuarios->buscarPorEmail($email)) {
        echo "<p>Error: Ya existe un usuario registrado con este email.</p>";
        exit();
    }
*/
 
    //encirptamos la contraseña antes de instanciar el nuevo usuario
    $claveHash = password_hash($clave, PASSWORD_DEFAULT);
    
    $usuario = new Usuario($dni, $claveHash, $nombre, 
     $apellidos, $nacionalidad, $telefono, $email, "cliente");

    $resultado = $gestorUsuarios->insertarUsuario($usuario);

    if ($resultado) {
        $_SESSION['usuario'] = $usuario;

        if (isset($_SESSION['url_origen'])) {
            $redirigirA = $_SESSION['url_origen'];
            unset($_SESSION['url_origen']);

            header("Location: $redirigirA");
        } else {
            header("Location: index.php");
        }
        exit();

    } else {

    // Mostrar error
        echo "<p>Error: No se pudo registrar el usuario. Es posible que el email o DNI ya estén registrados.</p>";
        echo "<p><a href='procesar_registro.php'>Volver al formulario</a></p>";
        exit();
    }

}