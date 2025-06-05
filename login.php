<?php include 'cabecera.php'; ?>
<h2>Iniciar Sesión</h2>
<form method="POST" action="../procesar_login.php">
    <input name="email" type="email" required placeholder="Correo electrónico"><br>
    <input name="clave" type="password" required placeholder="Contraseña"><br>
    <button type="submit">Entrar</button>
</form>
<?php include 'footer.php'; ?>
