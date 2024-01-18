<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_universidad";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(['error' => "Conexión fallida: " . $conn->connect_error]);
    exit;
}

if (isset($_POST['token']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $newPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT user_id, expires FROM password_reset WHERE token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['expires'] > time()) {
            $userId = $row['user_id'];
            $stmt = $conn->prepare("UPDATE usuarios SET contraseña = ? WHERE id = ?");
            $stmt->bind_param("si", $newPassword, $userId);
            $stmt->execute();

            $stmt = $conn->prepare("DELETE FROM password_reset WHERE token = ?");
            $stmt->bind_param("s", $token);
            $stmt->execute();

            echo json_encode(['success' => 'Contraseña cambiada con éxito.']);
        } else {
            echo json_encode(['error' => 'El token ha expirado.']);
        }
    } else {
        echo json_encode(['error' => 'El token no es válido.']);
    }
} else {
    echo json_encode(['error' => 'Solicitud no válida.']);
}
?>