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

</head>

<body class="page-index">
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="../index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
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
          <li class="dropdown"><a href="#"><span>Perfil</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
  <section id="register" class="hero d-flex align-items-center">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 test">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-xl-4 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            Descubre tu bienestar, <br />
            <span style="color: hsl(218, 81%, 75%)">una encuesta a la vez</span>
          </h1>
          <p class="mb-4 opacity-70">
            En nuestra comunidad, nos preocupamos por tu bienestar
            y queremos ofrecerte las herramientas necesarias para
            mejorar tu calidad de vida. ¡Crea tu cuenta hoy y comienza
            tu viaje hacia un mayor bienestar laboral!
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form action="registerBd.php" method="POST" id="formulario">
                <div class="row">

                  <div class="col-md-6 mb-4 text-center form-group formulario__grupo" id="grupo__nombre">
                    <label for="name" class="formulario__label">Nombre</label>
                    <div class="formulario__grupo-input">
                      <input type="text" name="nombre" class="form-control formulario__input" id="name"
                        placeholder="Nombre">
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <h1 class="formulario__input-error">Debe rellenar este campo, Solo puede tener caracteres
                      alfabeticos.</h1>
                  </div>

                  <div class="col-md-6 mb-4 text-center form-group formulario__grupo" id="grupo__apellido">
                    <label for="apellido" class="formulario__label">Apellido</label>
                    <div class="formulario__grupo-input">
                      <input type="text" name="apellido" class="form-control formulario__input" id="apellido"
                        placeholder="Apellido">
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <h1 class="formulario__input-error">Debe rellenar este campo, Solo puede tener caracteres
                      alfabeticos.</h1>
                  </div>

                  <div class="col-md-6 mb-4 text-center form-group formulario__grupo" id="grupo__username">
                    <label for="username" class="formulario__label">Usuario</label>
                    <div class="formulario__grupo-input">
                      <input type="text" name="username" class="form-control formulario__input" id="username"
                        placeholder="Usuario">
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <h1 class="formulario__input-error">Debe rellenar este campo, Solo puede tener caracteres
                      alfabeticos.</h1>
                  </div>


                  <div class="col-md-6 form-group mt-3 mt-md-0 form-group formulario__grupo" id="grupo__correo">
                    <label for="correo" class="formulario__label">Email</label>
                    <div class="formulario__grupo-input">
                      <input type="email" class="form-control formulario__input" name="correo" id="correo"
                        placeholder="Email">
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <h1 class="formulario__input-error">Debe rellenar este campo, Debe rellenar con un correo valido.
                    </h1>
                  </div>

                  <div class="col-md-6 mb-4 text-center form-group formulario__grupo" id="grupo__edad">
                    <label for="edad" class="formulario__label">Edad</label>
                    <div class="formulario__grupo-input">
                      <input type="number" name="edad" class="form-control formulario__input" id="edad"
                        placeholder="Edad">
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <h1 class="formulario__input-error">Debe rellenar este campo, Solo puede tener caracteres
                      numericos.</h1>
                  </div>

                  <div class="col-md-6 mb-4 text-center form-group formulario__grupo" id="grupo__departamento">
                    <label for="departamento" class="formulario__label">Departamento</label>
                    <div class="formulario__grupo-input">
                      <input type="text" name="departamento" class="form-control formulario__input" id="departamento"
                        placeholder="Departamento">
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <h1 class="formulario__input-error">Debe rellenar este campo, Solo puede tener caracteres
                      numericos.</h1>
                  </div>

                  <div class="col-md-6 mb-4 text-center form-group formulario__grupo" id="grupo__contraseña">
                    <label for="contraseña" class="formulario__label">Contraseña</label>
                    <div class="formulario__grupo-input">
                      <input type="password" name="contraseña" class="form-control formulario__input" id="contraseña"
                        placeholder="Contraseña">
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <h1 class="formulario__input-error">Debe rellenar este campo, minimo 8 caracteres y maximo 15.</h1>
                  </div>

                  <div class="formulario__mensaje my-4" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle"><b> Error:</b> Por favor rellenar el formulario
                        correctamente.</i>
                    </p>
                  </div>
                  <br>

                  <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button class="formulario__btn mb-4" type="submit" id="submit-btn">Enviar</button>
                    <div id="loading-icon" style="display:none;">Cargando...</div>
                    <br>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Usuario Registrado!</p>
                  </div>
              </form>
            </div>
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
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script src="../assets/js/validaciones.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>

</html>