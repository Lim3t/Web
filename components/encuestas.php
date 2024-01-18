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
    <link href="../assets/img/favicon.png" rel="apple-touch-icon" />

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
                    <li class="dropdown"><a href="#"><span>Perfil</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="./editProfile.php">Mi Perfil</a></li>
                            <li><a href="./cerrar_sesion.php">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="ge" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">Encuestas Semanales</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>
                            Medimos métricas para evaluar tu rendimiento y bienestar laboral a través de encuenstas.
                            Otorgamos apoyo de profesionales si es que se evaúa como necesario.
                            Queremos promover el bienestar corporativo a través de la propia enseñanza ética.
                        </p>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="./ge.php" class="btn-get-started">Realizar Encuesta</a>
                    </div>
                </div>
            </div>
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
                                <i class="bi bi-dash"></i> <a href="./pc.php">Profesionales Capacitados</a>
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
                    &copy; Copyright <strong><span>Martina Planella</span></strong>. All Rights Reserved
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