<?php
session_start();

if (!isset($_SESSION['usuario_logueado']) || $_SESSION['usuario_logueado'] !== true) {
  header("Location: iniciarsesion.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Bienestar Corporativo</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon" />
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="../assets/css/main.css" rel="stylesheet" />
  <link href="../assets/css/styles.css" rel="stylesheet" />
</head>

<body class="page-index">
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="../index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="../assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">Bienestar Corporativo</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php" class="active">Inicio</a></li>
          <li><a href="./et.php">Ética Corporativa</a></li>
          <li><a href="./encuestas.php">Encuestas</a></li>
          <li><a href="./iniciarsesion.php">Iniciar Sesion</a></li>
          <li><a href="./cerrar_sesion.php">Cerrar Sesion</a></li>
        </ul>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="ge" class="hero d-flex align-items-center">
    <div class="container mt-4">
      <form action="encuentaCrudBd.php" method="POST" class="card p-4">
        <h4 class="card-title">Evaluación de Estrés Laboral:</h4>

        <div class="mb-3">
          <label for="cansancio" class="form-label">¿Experimentas cansancio emocional en tu trabajo?</label>
          <select id="cansancio" name="cansancio" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="exhausto" class="form-label">¿Te sientes exhausto/a al terminar tu jornada laboral?</label>
          <select id="exhausto" name="exhausto" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="fatigado" class="form-label">¿Al comenzar el día laboral, te sientes fatigado/a?</label>
          <select id="fatigado" name="fatigado" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="desgaste" class="form-label">¿Notas que tu trabajo te está desgastando gradualmente?</label>
          <select id="desgaste" name="desgaste" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="limites" class="form-label">¿Sientes que estás alcanzando tus límites en el trabajo?</label>
          <select id="limites" name="limites" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="trabajo_casa" class="form-label">¿Tienes la tendencia a llevar trabajo a casa?</label>
          <select id="trabajo_casa" name="trabajo_casa" class="form-select">
            <option value="si">Sí</option>

            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="dificultades_sueno" class="form-label">¿Encuentras dificultades para conciliar el sueño?</label>
          <select id="dificultades_sueno" name="dificultades_sueno" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="sobrecarga" class="form-label">¿Consideras que tienes una sobrecarga laboral?</label>
          <select id="sobrecarga" name="sobrecarga" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="desconectar" class="form-label">¿Puedes desconectar del trabajo al llegar a casa?</label>
          <select id="desconectar" name="desconectar" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="frustracion" class="form-label">¿Te sientes frustrado/a en tu trabajo?</label>
          <select id="frustracion" name="frustracion" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="tareas_desacuerdo" class="form-label">¿Te asignan tareas con las que no estás de acuerdo?</label>
          <select id="tareas_desacuerdo" name="tareas_desacuerdo" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="conflictos_tareas" class="form-label">¿Percebes conflictos entre las distintas tareas y demandas
            laborales?</label>
          <select id="conflictos_tareas" name="conflictos_tareas" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="falta_apoyo" class="form-label">¿Sientes una falta de apoyo o ánimo por parte de tus
            superiores?</label>
          <select id="falta_apoyo" name="falta_apoyo" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>


        <div class="mb-3">
          <label for="emociones_negativas" class="form-label">¿Experimentas emociones negativas (ansiedad, enojo,
            tristeza,
            etc.) relacionadas con tu trabajo?</label>
          <select id="emociones_negativas" name="emociones_negativas" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="delegar" class="form-label">¿Te resulta difícil delegar responsabilidades en tu
            trabajo?</label>
          <select id="delegar" name="delegar" class="form-select">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <h6 class="mt-4">
          Nota: Si has respondido "Sí" a 5 o más preguntas, es posible que
          estés experimentando estrés laboral.
        </h6>

        <div class="mt-3">
          <input type="submit" value="Enviar" class="btn btn-primary" />
        </div>
      </form>
    </div>
  </section>
  <!-- End Hero Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <span>Bienestar Corporativo</span>
            </a>
            <p>
              Bienvenido/a a nuestra plataforma de encuestas de bienestar
              laboral. Crear una cuenta te brinda la oportunidad de participar
              en nuestras encuestas diseñadas para evaluar diversos aspectos de
              tu bienestar en el entorno laboral. Al responder a estas preguntas
              de manera honesta, podrás obtener una comprensión más profunda de
              tu salud mental y emocional en el trabajo.
            </p>
            <div class="social-links d-flex mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <h4>Nuestros Servicios</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="./et.php">Enseñanza Ética</a></li>
              <li>
                <i class="bi bi-dash"></i> <a href="./encuestas.php">Encuestas</a>
              </li>
              <li>
                <i class="bi bi-dash"></i> <a href="./index.php">Profesionales Capacitados</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contáctanos</h4>
            <p>
              Santiago <br />
              Chile <br /><br />
              <strong>Phone:</strong> +569 3522 0329<br />
              <strong>Email:</strong> bienestarcorporativo.cl<br />
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Nova</span></strong>. All Rights Reserved
        </div>
        <div class="credits">Designed by <a href="">Martina Planella</a></div>
      </div>
    </div>
  </footer>
  <!-- End Footer --><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>

</html>