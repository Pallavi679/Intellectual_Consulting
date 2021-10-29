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

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent " style="background: #323549;">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.php"><img src="assets/img/favicon1.png" alt="" class="img-fluid"></a><a href="index.php"> IPR E-PORTAL</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#efiling">E-Filing</a></li>
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
    <br><br>
    <!-- ======= Hero Section ======= -->
    <main id="main">
        <section id="efiling" class="services">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Efiling</h2>
                    <p>Intellectual Property Rights</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="zoom-in-left">
                            <div class="icon"><i class="bi bi-pencil-square" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="workflow\PatentWorkflow.pdf" target="_blank">Patent</a></h4>
                            <p class="description">A patent is the granting of a property right by a sovereign authority to an inventor.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-briefcase" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="workflow\CopyrightWorkflow.pdf" target="_blank">Copyright</a></h4>
                            <p class="description">A copyright is a collection of rights that automatically vest to someone who creates an original work of authorship like a literary work, song, movie or software.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-journal-check" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="workflow\TrademarkWorkflow.pdf" target="_blank">Trademark</a></h4>
                            <p class="description">A trademark is a unique symbol or word(s) used to represent a business or its products.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-journal-check" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">SICLD</a></h4>
                            <p class="description">The main idea behind the SICLD, 2000 is to provide protection of IPR in the area of Semiconductor Integrated Circuit Layout-Designs.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
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