<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_universidad";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$errores = [];

if (empty($_POST['nombre'])) {
    $errores[] = 'El campo nombre está vacío';
}
if (empty($_POST['apellido'])) {
    $errores[] = 'El campo apellido está vacío';
}
if (empty($_POST['username'])) {
    $errores[] = 'El campo username está vacío';
}
if (empty($_POST['correo'])) {
    $errores[] = 'El campo correo está vacío';
}
if (empty($_POST['edad'])) {
    $errores[] = 'El campo edad está vacío';
}
if (empty($_POST['departamento'])) {
    $errores[] = 'El campo departamento está vacío';
}
if (empty($_POST['contraseña'])) {
    $errores[] = 'El campo contraseña está vacío';
}

if (count($errores) === 0) {
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
            header("Location: ../index.php");
        } else {
            echo "Error al registrar el usuario: " . $stmt->error;
            header("Location: acceso.php");
        }

        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }
} else {
    // Mostrar o manejar errores
    foreach ($errores as $error) {
        echo $error . "<br>";
    }
}

$conn->close();
?>