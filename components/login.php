<?php
session_start();

header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_universidad";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["error" => "Conexión fallida: " . $conn->connect_error]);
    exit;
}

$userInputUsername = $_POST['username'];
$userInputPassword = $_POST['contraseña'];

$stmt = $conn->prepare("SELECT id, contraseña FROM usuarios WHERE username = ?");
$stmt->bind_param("s", $userInputUsername);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($userInputPassword, $row['contraseña'])) {
        $_SESSION['usuario_logueado'] = true;
        $_SESSION['username'] = $userInputUsername;
        $_SESSION['usuario_id'] = $row['id'];
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["error" => "Contraseña incorrecta"]);
    }
} else {
    echo json_encode(["error" => "Usuario no encontrado"]);
}

$stmt->close();
$conn->close();
?>