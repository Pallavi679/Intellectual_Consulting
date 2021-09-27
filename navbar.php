<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .nav-link b {
            font-style: oblique;
            color: white;
        }

        .nav-link b:hover {
            color: #ff9d34
        }

        .dd a b {
            color: white;
        }

        .dd a:hover {
            background: #64b5f6
        }

        @import url('https://fonts.googleapis.com/css?family=Roboto:300');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        section {
            width: 100%;
            height: 100vh;
            box-sizing: border-box;
            padding: 140px 0;

        }

        .card {
            position: relative;
            min-width: 300px;
            height: auto;
            overflow: hidden;
            border-radius: 15px;
            margin: 0 auto;
            padding: 40px 20px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
            transition: .5s;
        }

        .card:hover {
            transform: scale(1.1);
        }

        .card_red,
        .card_red .title .fa {
            background: linear-gradient(-45deg, #ffec61, #f321d7);
        }

        .card_violet,
        .card_violet .title .fa {
            background: linear-gradient(-45deg, #f403d1, #64b5f6);
        }

        .card_three,
        .card_three .title .fa {
            background: linear-gradient(-45deg, #24ff72, #9a4eff);
        }

        .card:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40%;
            background: rgba(255, 255, 255, .1);
            z-index: 1;
            transform: skewY(-5deg) scale(1.5);
        }

        .title .fa {
            color: #fff;
            font-size: 60px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            text-align: center;
            line-height: 100px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, .1);
        }

        .title h2 {
            position: relative;
            margin: 20px 0 0;
            padding: 0;
            color: #fff;
            font-size: 28px;
            z-index: 2;
        }

        .price {
            position: relative;
            z-index: 2;
        }

        .price h4 {
            margin: 0;
            padding: 20px 0;
            color: #fff;
            font-size: 60px;
        }

        .option {
            position: relative;
            z-index: 2;
        }

        .option ul {
            margin: 0;
            padding: 0;
        }

        .option ul li {
            margin: 0 0 10px;
            padding: 0;
            list-style: none;
            color: #fff;
            font-size: 16px;
        }

        .card a {
            display: block;
            position: relative;
            z-index: 2;
            background-color: #fff;
            color: #26ff;
            width: 150px;
            height: 40px;
            text-align: center;
            margin: 20px auto 0;
            line-height: 40px;
            border-radius: 40px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
        }

        .card a:hover {}
    </style>
</head>

<body>
    <div class="hidden-xs hidden-sm nav-top bg-dark py-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="nav-top-contact">
                        <!-- Social links -->
                        <ul class="list-inline text-center text-md-left mb-0">
                            <li class="list-inline-item mx-2" style="color: white;"><i class="fa fa-phone"></i>
                                +1-1245-678-980</li>
                            <li class="list-inline-item mx-2" style="color: white;"><i class="fa fa-envelope" aria-hidden="true"></i>
                                info@yourdomain.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="list-inline text-center text-md-right mb-0">
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <a target="_blank" href="https://www.facebook.com/webthemez" style="color: white;">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                            <a target="_blank" href="https://www.instagram.com" style="color: white;">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <a target="_blank" href="https://twitter.com/webthemez" style="color: white;">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
                            <a target="_blank" href="https://dribbble.com" style="color: white;">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm sticky-top navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h2 style="color: white;"><span style="color: #ff9d34;">Web</span> Consulting</h2>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><b>About Us</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Services</b>
                        </a>
                        <div class="dropdown-menu dd" aria-labelledby="navbarDropdownMenuLink" style="background:#007bff;">
                            <a class="dropdown-item" href="noc.php"><b>Apply NOC</b></a>
                            <a class="dropdown-item" href="#"><b>E-Filing</b></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><b>Contact Us</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>

</html>