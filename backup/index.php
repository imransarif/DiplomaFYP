<?php
include "db_conn.php";
if (isset($_POST["register"])) {

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $no = mysqli_real_escape_string($conn, $_POST["no"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);


  $sqlcheck = "SELECT * FROM user WHERE username = '$username'";

  $result = mysqli_query($conn, $sqlcheck);


  if (mysqli_num_rows($result) > 0) {
    echo '<script>alert("Username already exist. Please insert another username.")</script>';
  } else {

    $sql = "INSERT INTO user (username, email, no, password) VALUES ('$username','$email','$no','$password')";
    $sendsql = mysqli_query($conn, $sql);

    if ($sendsql)
      echo '<script>alert("Successful Register. Please Log-in")</script>';
    else
      echo '<script>alert("Failed to register. Please try again.")</script>';
  }
}
?>

<script>
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  function myFunction2() {
    var x = document.getElementById("myInput2");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>WYND PC</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet" />

  <!-- CSS Libraries -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="lib/slick/slick.css" rel="stylesheet" />
  <link href="lib/slick/slick-theme.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>

  <!-- Bottom Bar Start -->
  <div class="bottom-bar">
    <div class="container-fluid">
      <div class="logo">
        <a href="#">
          <img src="img/WYNDPC.png" alt="Logo" />
        </a>
      </div>
    </div>
  </div>
  <!-- Bottom Bar End -->

  <!-- Login -->
  <form action="login.php" method="post">
    <div class="login">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <h2>Login</h2>
            <div class="login-form">
              <div class="row">
                <div class="col-md-6">
                  <label>Username</label>
                  <input class="form-control" name="username" type="text" placeholder="Username" />
                </div>
                <div class="col-md-6">
                  <label>Password</label>
                  <input class="form-control" name="password" type="password" id="myInput" placeholder="Password" />
                  <input type="checkbox" onclick="myFunction()">Show Password
                </div>
                <div class="col-md-6">
                  <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                  <?php } ?>
                </div>
                <div class="col-md-12">
                  <input type="submit" class="btn" value="Log in" name="login">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-auto">
            <img src="img/verify.gif">
          </div>
        </div>
      </div>
    </div>
  </form>





  <!-- Register -->
  <form action="" method="post">
    <div class="login">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <h2>Register</h2>
            <div class="register-form">
              <div class="row">
                <div class="col-md-6">
                  <label>Username</label>
                  <input class="form-control" name="username" type="text" placeholder="Username" />
                </div>
                <div class="col-md-6">
                  <label>E-mail</label>
                  <input class="form-control" name="email" type="text" placeholder="E-mail" />
                </div>
                <div class="col-md-6">
                  <label>Mobile Number</label>
                  <input class="form-control" name="no" type="text" placeholder="Mobile No" />
                </div>
                <div class="col-md-6">
                  <label>Password</label>
                  <input class="form-control" name="password" type="password" id="myInput2" placeholder="Password" />
                  <input type="checkbox" onclick="myFunction2()">Show Password
                </div>
                <div class="col-md-12">
                  <input type="submit" class="btn" value="Register" name="register">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-auto">
            <img src="img/verify.gif">
          </div>
        </div>
      </div>
    </div>
  </form>

  <div class="sidebar-widget"></div>

  <!-- Footer Start -->
  <div class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h2>Get in Touch</h2>
            <div class="contact-info">
              <p>
                <i class="fa fa-map-marker"></i>E2.05.08, Tamarind Square, Persiaran Multimedia, Cyberjaya
              </p>
              <p><i class="fa fa-envelope"></i>customerservice@wynd.com.my</p>
              <p><i class="fa fa-phone"></i>+60 11-3182 2639</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h2>Follow Us</h2>
            <div class="contact-info">
              <div class="social">
                <a href="https://twitter.com/OfficialPCMR"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/OfficialPCMasterRace"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/pcmasterrace_official/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/user/LinusTechTips"><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Footer Bottom Start -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 copyright">
          <p>
            Copyright &copy; <a href="admin.php">WYND PC</a>.
            All Rights Reserved
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Bottom End -->

  <!-- Back to Top -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/slick/slick.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>

</body>

</html>