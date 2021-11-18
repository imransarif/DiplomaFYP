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
            <a href="home.php" class="nav-item nav-link active">Home</a>
            <a href="product-list.php" class="nav-item nav-link">Products</a>
            <a href="about.php" class="nav-item nav-link">About Us</a>
            <a href="cart.php" class="nav-item nav-link">Cart</a>


          </div>
          <div class="navbar-nav ml-auto">
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?></a>
              <div class="dropdown-menu">
                <a href="logout.php" class="dropdown-item">Logout</a>
                <a href="edit.php" class="dropdown-item">Change <br> Password</a>
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
        <div class="col-md-3">
          <div class="logo">
            <a href="home.php">
              <img src="img/WYNDPC.png" alt="Logo" />
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="search">
            <input type="text" placeholder="Search" />
            <button><i class="fa fa-search"></i></button>
          </div>
        </div>
        <div class="col-md-3">
          <div class="user">
            <a href="cart.php" class="btn cart">
              <i class="fa fa-shopping-cart"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bottom Bar End -->

  <!-- Main Slider Start -->
  <div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <nav class="navbar bg-light">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="home.php"><i class="fa fa-home"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product-list.php">CPU</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product-list.php">Graphic Card</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product-list.php">Motherboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product-list.php">RAM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product-list.php">Case</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product-list.php">Power Supply</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-md-3">
          <img src="img/gpu.png" style="height: 350px;" alt="Slider Image" />
        </div>
        <div class="col-md-3">
          <img src="img/psu.png" style="height: 350px;" alt="Slider Image" />
        </div>
        <div class="col-md-3">
          <img src="img/mobo.png" style="height: 350px;" alt="Slider Image" />
        </div>
      </div>
    </div>
  </div>

  <p style="font-size:small;text-align:center;">*Display Only</p>
  <!-- Main Slider End -->

  <!-- Brand Start -->
  <div class="brand">
    <div class="container-fluid">
      <div class="brand-slider">
        <div class="brand-item"><img src="img/ryzen.png" alt="" /></div>
        <div class="brand-item"><img src="img/amd.png" alt="" /></div>
        <div class="brand-item"><img src="img/evga.png" alt="" /></div>
        <div class="brand-item"><img src="img/nvidia.png" alt="" /></div>
        <div class="brand-item"><img src="img/intel.png" alt="" /></div>
        <div class="brand-item"><img src="img/gigabyte.png" alt="" /></div>
      </div>
    </div>
  </div>
  <!-- Brand End -->

  <!-- Feature Start-->
  <div class="feature">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-6 feature-col">
          <div class="feature-content">
            <i class="fab fa-cc-mastercard"></i>
            <h2>Secure Payment</h2>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 feature-col">
          <div class="feature-content">
            <i class="fa fa-truck"></i>
            <h2>Nationwide Delivery</h2>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 feature-col">
          <div class="feature-content">
            <i class="fa fa-sync-alt"></i>
            <h2>30 Days Return</h2>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 feature-col">
          <div class="feature-content">
            <i class="fa fa-wrench"></i>
            <h2>Warranty Guarantee</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p style="font-size:small;text-align:center;">*Term and condition apply</p>
  <!-- Feature End-->



  <!-- Call to Action Start -->
  <div class="call-to-action">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1>Whatsapp Us For Any Enqueries</h1>
        </div>
        <div class="col-md-6">
          <a href="https://wa.me/+601131822639">+60 11-3182 2639</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Call to Action End -->

  <!-- Featured Product Start -->
  <div class="featured-product product">
    <div class="container-fluid">
      <div class="section-header">
        <h1>Featured Product</h1>
      </div>
      <div class="row align-items-center product-slider product-slider-4">
        <div class="col-lg-3">
          <div class="product-item">
            <div class="product-title">
              <a href="product-list.php">AMD Ryzen Threadripper 3990X 64-Core, 128-Thread Unlocked Processor</a>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="product-image">
              <a href="product-list.php">
                <img src="product-images/cpu1.jpg" alt="Product Image" />
              </a>
            </div>
            <div class="product-price">
              <h3><span>RM</span>100</h3>
              <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="product-item">
            <div class="product-title">
              <a href="product-list.php">MSI Gaming GeForce RTX 3090 24GB</a>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="product-image">
              <a href="product-list.php">
                <img src="product-images/gpu1.jpg" alt="Product Image" />
              </a>
            </div>
            <div class="product-price">
              <h3><span>RM</span>100</h3>
              <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="product-item">
            <div class="product-title">
              <a href="product-list.php">Asus Prime TRX40-PRO AMD 3rd Gen Ryzen Threadripper Strx4 ATX Motherboard</a>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="product-image">
              <a href="product-list.php">
                <img src="product-images/mobo1.jpg" alt="Product Image" />
              </a>
            </div>
            <div class="product-price">
              <h3><span>RM</span>100</h3>
              <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="product-item">
            <div class="product-title">
              <a href="product-list.php">Corsair VENGEANCE RGB PRO 32GB (2x16GB) DDR4 3600</a>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="product-image">
              <a href="product-list.php">
                <img src="product-images/ram1.jpg" alt="Product Image" />
              </a>
            </div>
            <div class="product-price">
              <h3><span>RM</span>100</h3>
              <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="product-item">
            <div class="product-title">
              <a href="product-list.php">Thermaltake Core P8 Tempered Glass E-ATX Full-Tower Chassis</a>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="product-image">
              <a href="product-list.php">
                <img src="product-images/case1.jpg" alt="Product Image" />
              </a>
            </div>
            <div class="product-price">
              <h3><span>RM</span>100</h3>
              <a class="btn" href="cart.php"><i class="fa fa-shopping-cart"></i>Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Featured Product End -->

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