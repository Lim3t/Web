<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_universidad";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$usuario_id = $_SESSION['usuario_id'];
$campos = [];
$valores = [];
$tipos = '';

if (!empty($_POST['nombre'])) {
    $campos[] = "nombre=?";
    $valores[] = $_POST['nombre'];
    $tipos .= 's';
}
if (!empty($_POST['apellido'])) {
    $campos[] = "apellido=?";
    $valores[] = $_POST['apellido'];
    $tipos .= 's';
}
if (!empty($_POST['username'])) {
    $campos[] = "username=?";
    $valores[] = $_POST['username'];
    $tipos .= 's';
}
if (!empty($_POST['correo'])) {
    $campos[] = "correo=?";
    $valores[] = $_POST['correo'];
    $tipos .= 's';
}
if (!empty($_POST['edad'])) {
    $campos[] = "edad=?";
    $valores[] = $_POST['edad'];
    $tipos .= 'i';
}
if (!empty($_POST['departamento'])) {
    $campos[] = "departamento=?";
    $valores[] = $_POST['departamento'];
    $tipos .= 's';
}
if (!empty($_POST['contraseña'])) {
    $campos[] = "contraseña=?";
    $valores[] = $_POST['contraseña'];
    $tipos .= 's';
}

if (count($campos) > 0) {
    $valores[] = $usuario_id;
    $tipos .= 'i';

    $sql = "UPDATE usuarios SET " . join(", ", $campos) . " WHERE id=?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param($tipos, ...$valores);

        if ($stmt->execute()) {
            echo "Usuario actualizado con éxito";
            header("Location: ../index.php");
        } else {
            echo "Error al actualizar el usuario: " . $stmt->error;
            header("Location: acceso.php");
        }
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }
} else {
    echo "No se han proporcionado campos para actualizar.";
}

$conn->close();
?>