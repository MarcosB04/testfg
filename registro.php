<?php include 'cabecera.php'; ?>
<h2>Registro</h2>
<form method="POST" action="../procesar_registro.php">
    <input name="dni" required placeholder="DNI" maxlength="9"><br>
    <input name="nombre" required placeholder="Nombre"><br>
    <input name="apellidos" required placeholder="Apellidos"><br>
    <input name="email" type="email" required placeholder="Correo"><br>
    <input name="clave" type="password" required placeholder="Contraseña"><br>
    <button type="submit">Registrarse</button>
</form>
<?php include 'footer.php'; ?>
