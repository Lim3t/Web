<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_universidad";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['usuario_logueado']) && $_SESSION['usuario_logueado'] === true) {
    $usuario_id = $_SESSION['usuario_id'];

    $cansancio = $_POST['cansancio'];
    $exhausto = $_POST['exhausto'];
    $fatigado = $_POST['fatigado'];
    $desgaste = $_POST['desgaste'];
    $limites = $_POST['limites'];
    $trabajo_casa = $_POST['trabajo_casa'];
    $dificultades_sueno = $_POST['dificultades_sueno'];
    $sobrecarga = $_POST['sobrecarga'];
    $desconectar = $_POST['desconectar'];
    $frustracion = $_POST['frustracion'];
    $tareas_desacuerdo = $_POST['tareas_desacuerdo'];
    $conflictos_tareas = $_POST['conflictos_tareas'];
    $falta_apoyo = $_POST['falta_apoyo'];
    $emociones_negativas = $_POST['emociones_negativas'];
    $delegar = $_POST['delegar'];

    $sql = "INSERT INTO encuesta_usuario (usuario_id, cansancio, exhausto, fatigado, desgaste, limites, trabajo_casa, dificultades_sueno, sobrecarga, desconectar, frustracion, tareas_desacuerdo, conflictos_tareas, falta_apoyo, emociones_negativas, delegar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('isssssssssssssss', $usuario_id, $cansancio, $exhausto, $fatigado, $desgaste, $limites, $trabajo_casa, $dificultades_sueno, $sobrecarga, $desconectar, $frustracion, $tareas_desacuerdo, $conflictos_tareas, $falta_apoyo, $emociones_negativas, $delegar);

        if ($stmt->execute()) {
            echo "Usuario registrado con éxito";
        } else {
            echo "Error al registrar el usuario: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }
} else {
    echo "Usuario no logueado. Por favor, inicie sesión.";
}

$conn->close();
?>