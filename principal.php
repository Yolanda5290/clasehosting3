<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['nombre']; ?>!</h1>
    <p>Tu rol es: <?php echo $_SESSION['rol']; ?></p>

    <?php if ($_SESSION['rol'] == 'admin'): ?>
        <p><a href="admin_panel.php">Ir al panel de administrador</a></p>
    <?php endif; ?>
    
    <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>
