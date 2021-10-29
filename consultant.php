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
                    <li>
                        <a>
                            <form method="post"><input type="submit" name="logout" value="Logout" style="background: none; border:none; color:aliceblue"></form>
                        </a>
                    </li>
                    <li style="color: #ef6603; font-size:larger">
                        <?php echo 'Hello,' . $_SESSION["consultant"]; ?>
                    </li>
                </ul>
                <?php
                if (isset($_POST["logout"])) {
                    unset($_SESSION["consultant"]);
                    session_destroy();
                    echo "<SCRIPT>window.location ='index.php';</SCRIPT>";
                }
                ?>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <br>
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Customer</h2>
                <p>Details</p>
            </div>

            <div class="row">
                <?php
                $userID = mysqli_real_escape_string($db, $_SESSION['consultant']);
                $sql = "SELECT * FROM allotement WHERE consultID=(SELECT consultID from consultant where username='$userID');";
                $result = mysqli_query($db, $sql);
                // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                // $active = $row['active'];

                $count = mysqli_num_rows($result);
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="zoom-in-left">
                            <div class="icon"><i class="bi bi-person-square" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href=""><?php echo $rows['name'] ?></a></h4>
                            <p class="description">TOPIC: <?php echo $rows['topic'] ?></p>
                            <p class="description">IPR: <?php echo $rows['ipr'] ?></p>
                            <p class="description">MOBILE: <?php echo $rows['mobile'] ?></p>
                            <p class="description">EMAIL: <?php echo $rows['email'] ?></p>
                            <p class="description">ACCESSKEY: <?php echo $rows['accessKey'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section><!-- End Services Section -->

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