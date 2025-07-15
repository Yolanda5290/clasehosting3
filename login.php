<?php
include "conexion.php";
session_start();

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();
    if (password_verify($contrasena, $usuario['contrasena'])) {
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['rol'] = $usuario['rol'];
        header("Location: principal.php");
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}
$conn->close();
?>
