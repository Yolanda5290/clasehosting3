<?php
include "conexion.php";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$rol = $_POST['rol'];

$sql = "INSERT INTO usuarios (nombre, email, contrasena, rol)
        VALUES ('$nombre', '$email', '$contrasena', '$rol')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado correctamente. <a href='login.html'>Iniciar sesión</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
