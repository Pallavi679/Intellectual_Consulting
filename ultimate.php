<?php
error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["submit"])) {
    $count = 7;
    $topic = $_POST['tname'];
    $desc = $_POST['description'];
    // $name[1] = '';
    // $name[2] = '';
    // $name[3] = '';
    // $name[4] = '';
    // $name[5] = '';
    $name[1] = $_POST['name1'];
    $name[2] = $_POST['name2'];
    $name[3] = $_POST['name3'];
    $name[4] = $_POST['name4'];
    $name[5] = $_POST['name5'];
    $name[6] = $_POST['name6'];
    $name[7] = $_POST['name7'];

    // $role1 = '';
    // $role2 = '';
    // $role3 = '';
    // $role4 = '';
    // $role5 = '';
    $role[1] = $_POST['role1'];
    $role[2] = $_POST['role2'];
    $role[3] = $_POST['role3'];
    $role[4] = $_POST['role4'];
    $role[5] = $_POST['role5'];
    $role[6] = $_POST['role6'];
    $role[7] = $_POST['role7'];

    $desgination[1] = $_POST['desgination1'];
    $desgination[2] = $_POST['desgination2'];
    $desgination[3] = $_POST['desgination3'];
    $desgination[4] = $_POST['desgination4'];
    $desgination[5] = $_POST['desgination5'];
    $desgination[6] = $_POST['desgination6'];
    $desgination[7] = $_POST['desgination7'];

    $dept = $_POST['department'];
    if ($dept == 'Computer Engineering') {
        $receiver = 'sachin.singh_19@sakec.ac.in';
    } else if ($dept == 'IT') {
        $receiver = 'sachinm090910@gmail.com';
    } else {
        $receiver = 'sachin26240@gmail.com';
    }


    // recognize faculty
    $facultyname = '';
    for ($f = 1; $f <= $count; $f++) {
        if ($desgination[$f] == 'faculty') {
            $facultyname = $name[$f];
            break;
        }
    }

    include('pdf.php');
    //first pdf
    $file_name = 'NOC_letter_' . $facultyname . '_' . date('d.m.y') . '.pdf';
    $pdf = new Pdf();
    $html = '
    <style>
    html{margin:60px 60px;}
    table,
    th,
    td {
        border: 1px solid black;
    }
    
    td {
        text-align: center;
    }
    
    table {
        border-collapse: collapse;
        table-layout: auto;
        width: 400px;
    }
    </style>
    <p align="right">Date:' . date("d/m/Y") . '<br></p>
    <p>
    To<br>
    The Principal,<br>
    Shah and Anchor Kutchhi Engineering College,<br>
    Chembur<br>
</p>
<p>
    <b>Subject</b>: Application for permission to carry out the work and request to issue No Objection Certificate to file Intellectual Property .
</p>
<p>
    Respected Sir,
</p>
<p>
    I/We request you to kindly grant me/us the permission to carry out the work. The details of the work and applicants are mentioned below. I/We also request you to kindly issue the No Objection Certificate (NOC) for registering the below mentioned work to file the Copyright with Shah & Anchor Kutchhi Engineering College. As an applicant I/we also grant the privileges to Shah & Anchor Kutchhi Engineering College to use the work without any permission from the authors or applicants.
</p>
<p>
    <b>Details of the work:</b>
</p>
<p>
    <b>Topic Name: </b>' . $topic . '
</p>
<p>
    <b>Description: </b>' . $desc . '
</p>
<table>
    <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Role</th>
    </tr>';
    $id = 0;
    for ($y = 1; $y <= $count; $y++) {

        if ($name[$y] != '') {
            $id = 1 + $y;
            $html .= ' <tr>
                            <td>' . $y . '</td>
                            <td>' . $name[$y] . '</td>
                            <td>' . $role[$y] . '</td>
                        </tr>';
        }
    }


    $html .= '<tr><td>' . $id . '</td>
    <td>Shah & Anchor Kutchhi Engineering College</td>
    <td>Applicant</td></tr>
    </table>
    <p>Thanking You.</br>
    <ol>';

    for ($z = 1; $z <= $count; $z++) {
        if ($name[$z] != '') {
            $html .= '<li>' . $name[$z] . '</li>';
        }
    }

    $html .= '</ol>
    </p>';

    $pdf->load_html($html);
    $pdf->render();
    // $pdf->output();
    // $pdf->stream("", array("Attachment" => false));
    // exit(0);
    $file = $pdf->output();
    file_put_contents($file_name, $file);

    //second pdf
    $file_name1 =  'NOC_letter_head_' . date("d.m.y") . '.pdf';
    $pdf1 = new Pdf();

    $html1 = '
    <style>
        html{margin:80px 80px;}
    </style>
    <p align="right">Date:' . date("d/m/Y") . '<br></p>
    <p>
        To,<br>
        Registrar of Copyrights,<br>
        Copyright Office,<br>
        Department for Promotion of Industry and Internal Trade,<br>
        Ministry of Commerce and Industry,<br>
        Boudhik Sampada Bhawan,<br>
        Plot No. 32, Sector 14, Dwarka,<br>
        New Delhi-110078<br>
        Email Address: copyright@nic.in<br>
        Telephone No.: 011-28032496<br>
    </p>
    <p align="center">
        <b>Subject: No Objection letter</b>
    </p>
    <p>
        Respected Sir / Madam,
    </p>
    <p>
        On behalf of Shah & Anchor Kutchhi Engineering College, 
        the institute does not have any objection on filing copyright for 
        the work with title <b>' . $topic . '</b> by the following Shah & Anchor 
        Kutchhi Engineering College faculty members and students
    </p>
    <ol>
    ';

    for ($s = 1; $s <= $count; $s++) {
        if ($name[$s] != '') {
            $html1 .= '<li>' . $name[$s] . '</li>';
        }
    }

    $html1 .= '
    </ol>
    <p align="right">
    <br>
        Dr.Bhavesh Patel<br>
        <b>Principal<b>
    </p>
    ';

    $pdf1->load_html($html1);
    $pdf1->render();
    // $pdf->output();
    // $pdf->stream("", array("Attachment" => false));
    // exit(0);
    $file1 = $pdf1->output();
    file_put_contents($file_name1, $file1);

    //Load Composer's autoloader
    require 'phpmailer/vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'sachine027890@gmail.com';                     //SMTP username //EmailID
        $mail->Password   = 'rollno51';                               //SMTP password //Email passsword
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('sachine027890@gmail.com', 'Mailer');
        $mail->addAddress($receiver, 'Sachin');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo($receiver, 'Information');
        // $mail->addCC('cc@example.com');
        $sender = $_POST['email'];
        $mail->addCC($sender);
        // $mail->addBCC('bcc@example.com');

        //Attachments
        $mail->addAttachment($file_name);
        $mail->addAttachment($file_name1);         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'NOC Application';
        $mail->Body    = 'Application for NOC.';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        unlink($file_name);
        unlink($file_name1);

        header("location:thankyou.php#thankyou");
        //echo 'Message has been sent';
        // echo "<script language='javascript' type='text/javascript'>
        //     window.location.href = 'index.php';
        // </script>";
    } catch (Exception $e) {
        unlink($file_name);
        unlink($file_name1);
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NOC</title>
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
</head>

<body class="page">
    <!-- <div class="noc">
       <p class="heading_of_noc">Application of NOC Letter</p>
    </div> -->

    <header id="header" class="fixed-top d-flex align-items-center  header-transparent " style="background: #323549;">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.php"><img src="assets/img/favicon1.png" alt="" class="img-fluid"></a><a href="index.php"> IPR E-PORTAL</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="#efiling">EFiling</a></li>
                    <li><a class="nav-link scrollto" href="#consultancy">Consultancy</a></li>
                    <li><a class="nav-link scrollto" href="#noc">NOC</a></li>
                    <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
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
                                    <li><a href="noc.php">Apply NOC</a></li>
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
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <br><br>
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
                            <h4 class="title"><a href="">Patent</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-briefcase" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="">Copyright</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-journal-check" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Trademark</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-journal-check" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">SICLD</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <section id="consultancy" class="services">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Consultancy</h2>
                    <p>Intellectual Property Rights</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="zoom-in-left">
                            <div class="icon"><i class="bi bi-pencil-square" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="">Patent</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-briefcase" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="">Copyright</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-journal-check" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Trademark</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-journal-check" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">SICLD</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <section id="noc" class="about">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>No Objection Certificate</h2>
                    <p>For Filing Copyright</p>
                </div>

                <div class="row content" data-aos="fade-up">
                    <div class="offset-md-3 col-md-6 mt-125">

                        <form method="post" action="#noc">

                            <div class="form-group">
                                <label for="authorcount">Number of Author:</label>
                                <input type="text" class="form-control" id="authorcount" name="authorcount">
                                <input class="btn btn-primary my-2 align-center " type="submit" value="Submit" name="count">
                            </div>
                        </form>
                        <?php

                        if (isset($_POST["count"])) {
                            $count = $_POST['authorcount'];
                            //echo $count;
                            if ($count <= 0) {
                                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <strong>Incorrect Input!</strong> Please enter Postive value.
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>";
                            } else {
                        ?>
                                <div class=" col-md-12">
                                    <form name="myform" method="POST">
                                        <label for="topicname">Topic name:</label><br>
                                        <input type="text" id="topicname" class="form-control" name="tname" value=""><br>
                                        <label for="desp">Description:</label><br>
                                        <input type="text" id="desp" class="form-control" name="description" value=""><br><br>
                                        <label for="dep">Deparment:</label><br>
                                        <select id='dep' name='department' class="form-control">
                                            <option value="Computer Engineering">Computer Engineering</option>
                                            <option value="IT">IT</option>
                                            <option value="EXTC">EXTC</option>
                                        </select><br><br>
                                        <label for="email">EmailID:</label><br>
                                        <input type="text" id="email" class="form-control" name="email" value=""><br><br>

                                        <?php
                                        for ($x = 1; $x <= $count; $x++) {
                                            $name[$x] = 'name';
                                            $name[$x] .= $x;
                                            $role[$x] = 'role';
                                            $role[$x] .= $x;
                                            $desgination[$x] = 'desgination';
                                            $desgination[$x] .= $x;
                                            echo '<label for="' . htmlspecialchars($name[$x]) . '">Name:</label><br>';
                                            echo '<input type="text" class="form-control" id="' . htmlspecialchars($name[$x]) . '" name="' . htmlspecialchars($name[$x]) . '" value=""><br><br>';
                                            echo '<label for="' . htmlspecialchars($role[$x]) . '">Role:</label><br>';
                                            echo '<select class="form-control" name="' . htmlspecialchars($role[$x]) . '" id="' . htmlspecialchars($role[$x]) . '">';

                                        ?>

                                            <option value="Author">Author</option>
                                            <option value="Applicant">Applicant</option>
                                            <option value="Both">Both</option>
                                            </select><br><br>
                                            <?php
                                            echo '<label for="' . htmlspecialchars($desgination[$x]) . '">Desgination:</label><br>';
                                            echo '<select class="form-control" name="' . htmlspecialchars($desgination[$x]) . '" id="' . htmlspecialchars($desgination[$x]) . '">';
                                            ?>
                                            <option value="student">Student</option>
                                            <option value="faculty">Faculty</option>
                                            <option value="other">Other</option>
                                            </select><br><br>
                                        <?php } ?>

                                        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                                    </form>
                                </div>
                        <?php }
                        }
                        ?>
                    </div>
                </div>

            </div>
        </section>

    </main>
    <footer id="footer">
        <div class="container">
            <h3>Selecao</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

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
</body>