<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IPR E-PORTAL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v4.5.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <?php
  require_once "config.php";
  session_start();
  // echo $_SESSION["email"];
  ?>
</head>

<body class="page">

  <header id="header" class="fixed-top d-flex align-items-center  header-transparent " style="background: #323549;">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php"><img src="assets/img/favicon1.png" alt="" class="img-fluid"></a><a href="index.php"> IPR E-PORTAL</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li class="dropdown"><a href="#"><span>IPR</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>Patent</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="efiling.php">E-Filing</a></li>
                                    <li><a href="#">Consultancy</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Copyright</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">E-Filing</a></li>
                                    <li><a href="#">Consultancy</a></li>
                                    <li><a href="basic.php#noc">Apply NOC</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Trademark</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">E-Filing</a></li>
                                    <li><a href="#">Consultancy</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>SICLD</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">E-Filing</a></li>
                                    <li><a href="#">Consultancy</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
          <li><a class="nav-link scrollto " href="index.php#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="index.php#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="index.php#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <main id="main">
    <section id="thankyou" class="about" style="background: #aed8b6;">
      <div class="container">
        <div class="row content" data-aos="fade-up">
          <div class="jumbotron jumbotron-fluid mt-125 spacing_from_top jumbotron_thankyou">
            <div class="container">
              <h1 class="display-4">Thank You!</h1>
              <p class="lead">Your Message has been received by IPR EPortal.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <br>
  <br>
  <br>
  <?php include("footer.php"); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>