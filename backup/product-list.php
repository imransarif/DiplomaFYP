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
            <a href="product-list.php" class="nav-item nav-link active">Products</a>
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

  <!-- Breadcrumb Start -->
  <div class="breadcrumb-wrap">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
        <li class="breadcrumb-item active">Products</li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumb End -->

  <!-- Product List Start -->
  <div class="product-view">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 sidebar">
          <div class="sidebar-widget category">
            <h2 class="title">Category</h2>
            <nav class="navbar bg-light">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="home.php"><i class="fa fa-home"></i>Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#CPU">CPU</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#GPU">Graphic Card</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#MOBO">Motherboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#RAM">RAM</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#CASE">Case</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#PSU">Power Supply</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="row">
            <div class="col-md-4" id="CPU">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">AMD Ryzen Threadripper 3990X 64-Core, 128-Thread Unlocked Processor</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/cpu1.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">AMD Ryzen 9 5900X 12-core, 24-Thread Unlocked Processor</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/cpu2.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">Intel Core i9-10900K Desktop Processor 10 Cores up to 5.3 GHz Unlocked LGA1200</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/cpu3.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4" id="GPU">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">MSI Gaming GeForce RTX 3090 24GB GDRR6X</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/gpu1.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">PowerColor Red Devil AMD Radeon RX 6900 XT Gaming Graphics Card with 16GB GDDR6</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/gpu2.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">EVGA GeForce GTX 1650 Super SC Ultra Gaming, 4GB GDDR6, Dual Fan</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/gpu3.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4" id="MOBO">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">Asus Prime TRX40-PRO AMD 3rd Gen Ryzen Threadripper Strx4 ATX Motherboard</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/mobo1.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">GIGABYTE X570 AORUS Elite Wi-Fi ATX Motherboard</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/mobo2.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">ASUS ROG Maximus XII Apex (WiFi 6) Z490 LGA 1200 (Intel 10th Gen) ATX Gaming Motherboard</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/mobo3.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4" id="RAM">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">Corsair VENGEANCE RGB PRO 32GB (2x16GB) DDR4 3600</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/ram1.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">G.Skill Trident Z RGB Series 32GB (2 x 16GB) DDR4 3600</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/ram2.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">Corsair Dominator Platinum RGB 16GB (2x8GB) DDR4 3200</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/ram3.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4" id="CASE">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">Thermaltake Core P8 Tempered Glass E-ATX Full-Tower Chassis</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/case1.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">NZXT H510 Compact ATX Mid-Tower PC Gaming Case</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/case2.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">Lian-Li Case O11D Mini -X Mid Tower Black</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/case3.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4" id="PSU">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">EVGA 210-GQ-0750-V1 750 GQ, 80+ GOLD 750W, Semi Modular</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/psu1.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">Gigabyte P650B 80 Plus Bronze 650W</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/psu2.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-item">
                <div class="product-title">
                  <a href="cart.php">EVGA SuperNOVA 650 GM, 80 Plus Gold 650W, Fully Modular, ECO Mode with DBB Fan</a>
                  <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="product-image">
                  <a href="cart.php">
                    <img src="product-images/psu3.jpg" alt="Product Image" />
                  </a>
                </div>
                <div class="product-price">
                  <h3><span>RM</span>100</h3>

                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Side Bar Start -->

      </div>
    </div>
  </div>



  <!-- Product List End -->

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
  <a class="back-to-top" href="#"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/slick/slick.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>