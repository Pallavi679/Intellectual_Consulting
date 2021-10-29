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
                    <li><a class="nav-link scrollto" href="#form">Consultancy</a></li>
                    <li><a class="nav-link scrollto" onclick="warning()" style="cursor: pointer;">Home</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <section id="form" class="about">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Consultant Allotement</h2>
                <p>Fill Details</p>
            </div>

            <div class="row content" data-aos="fade-up">
                <div class="offset-md-3 col-md-6 mt-125">

                    <form method="post">

                        <div class="form-group">
                            <label for="name">Applicant Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <label for="topic">Topic:</label>
                            <input type="text" class="form-control" id="topic" name="topic">
                            <label for="ipr">Intellectual Property Rights:</label>
                            <select id='ipr' name='ipr' class="form-control">
                                <option value="">Select an Option</option>
                                <option value="Patent">Patent</option>
                                <option value="Copyright">Copyright</option>
                                <option value="Trademark">Trademark</option>
                                <option value="SICLD">SICLD</option>
                            </select>
                            <label for="mobile">Mobile No:</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <label for="key">Generate Key:</label>
                            <input type="text" class="form-control" id="key" name="key" readonly>
                            <button type="button" style="float: right;" onclick="random()">Generate</button><br>
                            <input class="btn btn-primary my-2 align-center " type="submit" value="Allot" name="allotement">
                        </div>
                    </form>
                    <?php

                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\SMTP;
                    use PHPMailer\PHPMailer\Exception;

                    if (isset($_POST["allotement"])) {
                        $name = mysqli_real_escape_string($db, $_POST['name']);
                        $topic = mysqli_real_escape_string($db, $_POST['topic']);
                        $ipr = mysqli_real_escape_string($db, $_POST['ipr']);
                        $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
                        $email = mysqli_real_escape_string($db, $_POST['email']);
                        $key = mysqli_real_escape_string($db, $_POST['key']);

                        $sql = "SELECT consultID FROM consultant";
                        $result = mysqli_query($db, $sql);

                        $count = mysqli_num_rows($result);
                        $random = rand(1, $count);

                        // echo '<script>alert(' . $count . ');</script>';
                        $sql2 = "SELECT name FROM `consultant` WHERE `consultID`='$random'";
                        $query = mysqli_query($db, $sql2)  or die(mysqli_error($db));
                        $row = mysqli_fetch_row($query);

                        $consultname = $row[0];
                        // echo '<script>alert(' . $random . ');</script>';

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
                            $mail->setFrom('sachine027890@gmail.com', 'IPR-EPORTAL');
                            $mail->addAddress($email, $name);     //Add a recipient
                            // $mail->addAddress('ellen@example.com');               //Name is optional
                            // $mail->addReplyTo($receiver, 'Information');
                            // $mail->addCC('cc@example.com');
                            // $sender = $_POST['email'];
                            // $mail->addCC($sender);
                            // $mail->addBCC('bcc@example.com');

                            //Attachments
                            //Add attachments
                            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = 'Consultant Alloted for ' . $topic;
                            $mail->Body    = 'Dear Customer, You have been alloted the consultant. Your Consultant Name is ' . $consultname . ' and Key is \'' . $key . '\'. Share this key with consultant for verification. Thank you.';
                            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                            $mail->send();
                            try {
                                $sql1 = "INSERT INTO allotement (ID, name,topic,ipr,mobile,email,accessKey,consultID) VALUES (NULL, '$name', '$topic', '$ipr', '$mobile', '$email', '$key', '$random')";
                                $result1 = mysqli_query($db, $sql1) or die(mysqli_error($db));
                                // $result = mysqli_query($db, $sql);
                                if (mysqli_affected_rows($db) > 0) {
                                    echo "<script>alert('Consultant Alloted, Check your mail')</script>";
                                    echo "<script>window.location.href = 'index.php';</script>";
                                } else {
                                    echo "<script>alert('Something went wrong')</script>";
                                }
                            } catch (Exception $f) {
                                echo $f;
                            }
                            // echo 'Message has been sent';
                            // echo "<script language='javascript' type='text/javascript'>
                            //     window.location.href = 'index.php';
                            // </script>";
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            echo "<script>alert('Enter Valid Email.')</script>";
                        }
                    }
                    mysqli_close($db);
                    ?>
                </div>
            </div>

        </div>
    </section>
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
    <script>
        function random() {
            const result = Math.random().toString(36).substring(2, 9);
            console.log(result);
            document.getElementById('key').value = result;
        }

        function warning() {
            if (confirm('Do you really want to quit.')) {
                window.location.href = 'index.php';
            }
        }
    </script>
</body>

</html>