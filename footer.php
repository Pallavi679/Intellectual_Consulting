<?php
$error = "";
if (isset($_POST["admin"])) {
    // session_start();
    // username and password sent from form 
    $myusername = mysqli_real_escape_string($db, $_POST['email']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT adminID FROM admin WHERE username='$myusername' and password = '$mypassword'";
    $result = mysqli_query($db, $sql);
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $active = $row['active'];

    $count = mysqli_num_rows($result);
    echo $count;
    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION['admin'] = $myusername;
        echo "<script>window.location.href = 'basic.php';</script>";
    } else {
        echo "<script>alert('Invalid Username or Password')</script>";
    }
    mysqli_close($db);
}

if (isset($_POST["consultant"])) {
    // session_start();
    // username and password sent from form 
    $myusername = mysqli_real_escape_string($db, $_POST['email']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT consultID FROM consultant WHERE username='$myusername' and password = '$mypassword'";
    $result = mysqli_query($db, $sql);
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $active = $row['active'];

    $count = mysqli_num_rows($result);
    // echo $count;
    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION['consultant'] = $myusername;
        echo "<script>window.location.href = 'consultant.php';</script>";
    } else {
        echo "<script>alert('Invalid Username or Password')</script>";
    }
    mysqli_close($db);
}
?>
<link href="assets/css/loginstyle.css" rel="stylesheet">
<footer id="footer">
    <div class="container">
        <h3>Web Consultancy IPR</h3>
        <p>Intellectual property is a category of property that includes intangible creations of the human intellect. There are many types of intellectual property, and some countries recognize more than others.</p>
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div>
            <div class="footer-link">

                <h2>Quick Links</h2>

                <!-- <a onclick="loginPage()" style="cursor: pointer; color:#FF8221">Admin Login</a>| -->
                <!-- Modal -->
                <a onclick="document.getElementById('id01').style.display='block'" style="cursor: pointer; color:#FF8221">Login</a>|

                <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                    <form class="modal-content animate" method="POST">
                        <div class="container">
                            <input type="text" placeholder="Enter Email" name="email" required>
                            <input type="password" placeholder="Enter Password" name="password" required>
                            <input type="submit" name="admin" value="Admin Login">
                            <input type="submit" name="consultant" value="Consultant Login">
                            <!-- <div class="clearfix">
                  <button type="submit" class="cancelbtn" name="admin">Admin Login</button>
                  <button type="submit" class="signupbtn" name="consultant">Consultant Login</button>
                </div> -->
                        </div>
                    </form>
                </div>

                <a href="https://www.shahandanchor.com/home/" target="_blank">Home</a>|
                <a href="https://ipindia.gov.in/" target="_blank">IP India</a>|
                <a href="https://www.wipo.int/portal/en/index.html" target="_blank">WIPO</a>|
                <a href="contact.php">Contact Us</a>

            </div><br>
        </div>
        <!-- <div class="copyright">
            &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
        </div> -->
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">Web Consultancy IPR</a>
        </div>
    </div>
</footer><!-- End Footer -->
<script>
    var modal = document.getElementById('id01');

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>