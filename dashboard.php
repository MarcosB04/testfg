<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
include 'cabecera.php';
echo "<h2>Bienvenido/a,</h2> " . $_SESSION['usuario']['nombre'] . "</h2>";
include 'footer.php';
