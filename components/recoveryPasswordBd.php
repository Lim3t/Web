<?php
use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

header('Content-Type: application/json');

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_universidad";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  echo json_encode(['error' => "Conexión fallida: " . $conn->connect_error]);
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['correo'])) {
    echo json_encode(['error' => 'El campo correo está vacío']);
    exit;
  }

  $correo = $_POST['correo'];

  $stmt = $conn->prepare("SELECT id FROM usuarios WHERE correo = ?");
  $stmt->bind_param("s", $correo);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userId = $row['id'];

    $token = bin2hex(random_bytes(50));
    $expires = date("U") + 1800;

    $stmt = $conn->prepare("INSERT INTO password_reset (user_id, token, expires) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $userId, $token, $expires);
    $stmt->execute();

    $mail = new PHPMailer(true);
    try {
      $mail->SMTPDebug = SMTP::DEBUG_OFF;
      $mail->isSMTP();
      $mail->Host = 'mail.sparkyfuu.net';
      $mail->SMTPAuth = true;
      $mail->Username = 'martiplanella@sparkyfuu.net';
      $mail->Password = 'Martina123456';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port = 465;

      $mail->setFrom('martiplanella@sparkyfuu.net', 'Bienestar Corporativo');
      $mail->addAddress($correo);

      // Contenido
      $mail->isHTML(true);
      $mail->Subject = 'Restablecimiento de contrasena';

      $mail->Body = '
            <html>

            <head>
              <style>
                body {
                  font-family: Arial, sans-serif;
                  background-color: #f4f4f4;
                  color: #333;
                  line-height: 1.6;
                  text-align: center;
                  margin: 0;
                  padding: 0;
                }
            
                .container {
                  max-width: 600px;
                  margin: 20px auto;
                  padding: 20px;
                  background: #fff;
                  border: 1px solid #ddd;
                  border-radius: 5px;
                  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
                  text-align: center;
                }
            
                .button {
                  display: inline-block;
                  padding: 10px 20px;
                  background-color: #007bff;
                  color: #ffff !important;
                  text-decoration: none;
                  border-radius: 5px;
                  margin-top: 20px;
                  text-align: center;
                }
            
                .button:hover {
                  background-color: #0056b3;
                }
              </style>
            </head>
            
            <body>
              <div class="container">
                <h2>Restablecimiento de contraseña</h2>
                <p>Has solicitado restablecer tu contraseña en nuestro sitio web. Por favor, haz clic en el siguiente enlace para
                  establecer una nueva contraseña:</p>
                  <a href="http://localhost/Web/components/resetPassword.php?token=' . $token . '" class="button">Restablecer contraseña</a>
                <p>Si no solicitaste el cambio de contraseña, ignora este correo electrónico.</p>
              </div>
            </body>
            
            </html>';

      $mail->send();
      echo json_encode(['success' => 'Mensaje enviado']);
    } catch (Exception $e) {
      echo json_encode(['error' => "El mensaje no se pudo enviar. Mailer Error: {$mail->ErrorInfo}"]);
    }
  } else {
    echo json_encode(['error' => 'Correo electrónico no encontrado']);
  }
} else {
  echo json_encode(['error' => 'Método de solicitud no válido']);
}
?>