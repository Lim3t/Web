<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_universidad";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$username = $_POST['username'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$departamento = $_POST['departamento'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, apellido, username, correo, edad, departamento, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?)";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("ssssiss", $nombre, $apellido, $username, $correo, $edad, $departamento, $contraseña);

    if ($stmt->execute()) {
        echo "Usuario registrado con éxito";
    } else {
        echo "Error al registrar el usuario: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error al preparar la consulta: " . $conn->error;
}

$conn->close();
