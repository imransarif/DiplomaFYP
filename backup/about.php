<?php
session_start();
?>

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

  <!-- Nav Bar Start -->
  <div class="nav">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a href="home.php" class="navbar-brand">MENU</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav mr-auto">
            <a href="home.php" class="nav-item nav-link">Home</a>
            <a href="product-list.php" class="nav-item nav-link">Products</a>
            <a href="about.php" class="nav-item nav-link active">About Us</a>
            <a href="cart.php" class="nav-item nav-link">Cart</a>
          </div>
          <div class="navbar-nav ml-auto">
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?></a>
              <div class="dropdown-menu">
                <a href="logout.php" class="dropdown-item">Logout</a>
                <a href="edit.php" class="dropdown-item">Change<br>Password</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Nav Bar End -->

  <!-- Bottom Bar Start -->
  <div class="bottom-bar">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-8">
          <div class="logo">
            <a href="home.php">
              <img src="img/WYNDPC.png" alt="Logo" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bottom Bar End -->

  <!-- Breadcrumb Start -->
  <div class="breadcrumb-wrap">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
        <li class="breadcrumb-item active">About Us</li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumb End -->

  <!-- Contact Start -->
  <div class="contact">
    <div class="col-lg-4" style="flex:0 0 100%; max-width:100%">
      <div class="contact-info" style="text-align: justify;text-justify: inter-word;">
        <img src="img/About.png" class="center" style="width: 15%">

        <h2 style="text-align: center;">About Us</h2>

        <h3>
          The name "WYND" comes from the Windows operating system. In the logo, each member of the
          group is represented by a different color. The main goal of our website is to sell computer
          hardware and software in the same way that other e-commerce sites such as Lazada and Shopee
          do, but with more specifics. Many people nowadays rely on technology to connect via the
          internet and other means. It is now considered an essential requirement in the modern world.
          Despite the global pandemic, we continue to provide a platform for people to purchase their
          necessities through online shopping.
        </h3>

        <h2 style="text-align: center; margin-top:50px">Meet the Team</h2>

        <div>
          <table class="table table-bordered" style="color:white">
            <tr>
              <th>Picture</th>
              <th colspan="2">Name</th>
              <th>Student Number</th>
              <th>Group</th>
              <th colspan="2">Email</th>
            </tr>

            <tr>
              <td><img src="img/imran.png"></img></td>
              <td colspan="2">Muhammad Imran Bin Sarifudin</td>
              <td>2019407482</td>
              <td>CSC264 4I</td>
              <td colspan="2">2019407482@student.uitm.edu.my</td>
            </tr>

            <tr>
              <td><img src="img/daud.jpg"></img></td>
              <td colspan="2">Muhammad Daud Bin Mohammad</td>
              <td>2019272924</td>
              <td>CSC264 4I</td>
              <td colspan="2">2019272924@student.uitm.edu.my</td>
            </tr>

            <tr>
              <td><img src="img/akid.png"></img></td>
              <td colspan="2">Akma Akid Bin Aminudin</td>
              <td>2019433854</td>
              <td>CSC264 4I</td>
              <td colspan="2">2019433854@student.uitm.edu.my</td>
            </tr>

            <tr>
              <td><img src="img/akmal.png"></img></td>
              <td colspan="2">Muhammad Akmal Ikhwan Bin Hamzah</td>
              <td>2019265584</td>
              <td>CSC264 4I</td>
              <td colspan="2">2019265585@student.uitm.edu.my</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

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

        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h2>Company Info</h2>
            <ul>
              <li><a href="about.php">About Us</a></li>
            </ul>
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
            Copyright &copy; <a href="#">WYND PC</a>.
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