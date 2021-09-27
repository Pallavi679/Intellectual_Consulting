<?php
include("navbar.php");
?>
<html>
<head>
    <title>
        Contact Us
    </title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
 <!-- Contact Section -->
 <section id="contact">
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-lg-6 text-center">
                <h2 class="section-heading">Get in touch</h2>
                <h3 class="section-subheading">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="col-md-6">
                             <div class="company-address col-sm-6 col-md-6">  
                                <address>
                                    xBe - Creative Agency
                                    <br>
                                    <span id="map-input">
                             
                                284 Swanston St,<br>
                                Melbourne VIC 3000, Australia</span>
                                    <br>
                                </address>
                            </div>
                           <div class="company-contact col-sm-6 col-md-6">
                                <address>Email Us
                                    <br>
                                    <a href="mailto:#">your.email@example.com</a>
                                    <br>
                                    <a href="mailto:#">support@example.com</a>
                                </address>
                           </div>
             </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="" novalidate>
                    <div class="row">
                        <div class="col-md-6 contact-form-box">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                       

                            <div id="success"></div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                           
                       </div>
                        <div class="col-md-6">
                            <div id="map-canvas">
                                
                            </div>
                          </div>   
                            
                        <div class="clearfix"></div>
                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer>
</body>
</html>

