<?php
include("navbar.php");
?>

<head>
    <title>
        Home
    </title>
</head>

<body>
    <div style="width: 100%; background:rgba(9,42,73,255)">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="width: 70%; margin:auto">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="3000">
                    <img src="carousel-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="3000">
                    <img src="carousel-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="carousel-3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="col-md-8 text-center w-md-50 mx-auto mb-4 ">
                    <h2 class="mb-md-2">Our Services</h2>
                    <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.<br><br>
                    </p>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card card_red text-center">
                            <div class="title">
                                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                <h2>Consulting</h2>
                            </div>
                            <div class="price">
                                <h4><sup>$</sup>25</h4>
                            </div>
                            <div class="option">
                                <ul>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>10 GB Space</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>3 Domain Names</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>20 Emails Addresse</li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i>Live Support</li>
                                </ul>
                            </div>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card card_violet text-center">
                            <div class="title">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                <h2>E-Filling</h2>
                            </div>
                            <div class="price">
                                <h4><sup>$</sup>25</h4>
                            </div>
                            <div class="option">
                                <ul>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>10 GB Space</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>3 Domain Names</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>20 Emails Addresse</li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i>Live Support</li>
                                </ul>
                            </div>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card card_three text-center">
                            <div class="title">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                                <h2>NOC</h2>
                            </div>
                            <div class="price">
                                <h4><sup>$</sup>50</h4>
                            </div>
                            <div class="option">
                                <ul>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>50 GB Space</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>5 Domain Names</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i>20 Emails Addresse</li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i>Live Support</li>
                                </ul>
                            </div>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
 <br>
 <br>
</body>

<?php include("footer.php"); ?>