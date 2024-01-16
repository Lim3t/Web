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
          <li><a href="./cerrar_sesion.php">Cerrar Sesion</a></li>
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
          <h1
            class="my-5 display-5 fw-bold ls-tight"
            style="color: hsl(218, 81%, 95%)"
          >
            The best offer <br />
            <span style="color: hsl(218, 81%, 75%)">for your business</span>
          </h1>
          <p class="mb-4 opacity-70">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Temporibus, expedita iusto veniam atque, magni tempora mollitia
            dolorum consequatur nulla, neque debitis eos reprehenderit quasi ab
            ipsum nisi dolorem modi. Quos?
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div
            id="radius-shape-1"
            class="position-absolute rounded-circle shadow-5-strong"
          ></div>
          <div
            id="radius-shape-2"
            class="position-absolute shadow-5-strong"
          ></div>

          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form action="encuestasBd.php" method="POST">
                <div class="row">
                  <div class="col-md-6 mb-4 text-center">
                    <div class="form-outline">
                      <input
                        type="text"
                        id="validationCustom01"
                        class="form-control"
                        name="nombre"
                        placeholder="Nombre"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 text-center">
                    <div class="form-outline">
                      <input
                        type="text"
                        id="validationCustom02"
                        class="form-control"
                        name="apellido"
                        placeholder="Apellido"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-outline col-md-6 mb-4 text-center">
                    <input
                      type="text"
                      id="validationCustomUsername"
                      name="username"
                      class="form-control"
                      placeholder="Usuario"
                      required
                    />
                  </div>

                  <div class="form-outline col-md-6 mb-4 text-center">
                    <input
                      type="email"
                      id="validationCustomUsername"
                      name="correo"
                      class="form-control"
                      placeholder="Correo"
                      required
                    />
                  </div>
                </div>

                <div class="row">
                  <div class="form-outline col-md-6 mb-4 text-center">
                    <input
                      type="number"
                      id="validationCustomUsername"
                      name="edad"
                      class="form-control"
                      placeholder="Edad"
                      required
                    />
                  </div>

                  <div class="form-outline col-md-6 mb-4 text-center">
                    <input
                      type="password"
                      id="contraseña"
                      name="contraseña"
                      class="form-control"
                      placeholder="Contraseña"
                    />
                  </div>
                </div>
                <div class="form-outline col-md mb-4 text-center">
                  <input
                    type="text"
                    id="inputPassword6"
                    name="departamento"
                    class="form-control"
                    placeholder="Departamento"
                  />
                <button type="submit" class="btn-primary mb-4">
                  Registrarse
                </button>
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
              <span>Nova</span>
            </a>
            <p>
              Cras fermentum odio eu feugiat lide par naso tierra. Justo eget
              nada terra videa magna derita valies darta donna mare fermentum
              iaculis eu non diam phasellus.
            </p>
            <div class="social-links d-flex mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Services</a></li>
              <li>
                <i class="bi bi-dash"></i> <a href="#">Terms of service</a>
              </li>
              <li>
                <i class="bi bi-dash"></i> <a href="#">Privacy policy</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="#">Web Design</a></li>
              <li>
                <i class="bi bi-dash"></i> <a href="#">Web Development</a>
              </li>
              <li>
                <i class="bi bi-dash"></i> <a href="#">Product Management</a>
              </li>
              <li><i class="bi bi-dash"></i> <a href="#">Marketing</a></li>
              <li>
                <i class="bi bi-dash"></i> <a href="#">Graphic Design</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br />
              New York, NY 535022<br />
              United States <br /><br />
              <strong>Phone:</strong> +1 5589 55488 55<br />
              <strong>Email:</strong> info@example.com<br />
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
        <div class="credits">Designed by <a href="">MartiPlanella</a></div>
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