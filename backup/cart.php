<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if (!empty($_GET["action"])) {
  switch ($_GET["action"]) {
    case "add":
      if (!empty($_POST["quantity"])) {
        $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
        $itemArray = array($productByCode[0]["code"] => array('name' => $productByCode[0]["name"], 'code' => $productByCode[0]["code"], 'quantity' => $_POST["quantity"], 'price' => $productByCode[0]["price"], 'image' => $productByCode[0]["image"]));

        if (!empty($_SESSION["cart_item"])) {
          if (in_array($productByCode[0]["code"], array_keys($_SESSION["cart_item"]))) {
            foreach ($_SESSION["cart_item"] as $k => $v) {
              if ($productByCode[0]["code"] == $k) {
                if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                  $_SESSION["cart_item"][$k]["quantity"] = 0;
                }
                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
              }
            }
          } else {
            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
          }
        } else {
          $_SESSION["cart_item"] = $itemArray;
        }
      }
      break;
    case "remove":
      if (!empty($_SESSION["cart_item"])) {
        foreach ($_SESSION["cart_item"] as $k => $v) {
          if ($_GET["code"] == $k)
            unset($_SESSION["cart_item"][$k]);
          if (empty($_SESSION["cart_item"]))
            unset($_SESSION["cart_item"]);
        }
      }
      break;
    case "empty":
      unset($_SESSION["cart_item"]);
      break;
  }
}
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
            <a href="about.php" class="nav-item nav-link">About Us</a>
            <a href="cart.php" class="nav-item nav-link active">Cart</a>
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
      </div>
    </div>
  </div>
  <!-- Bottom Bar End -->

  <!-- Breadcrumb Start -->
  <div class="breadcrumb-wrap">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
        <li class="breadcrumb-item"><a href="product-list.php">Products</a></li>
        <li class="breadcrumb-item active">Cart</li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumb End -->

  <!-- Cart Start -->
  <div class="container-fluid" style="padding-top: 50px;">
    <div style="text-align:center;padding-bottom: 50px;">
      <a class="button" href="cart.php?action=empty"><i class="fa fa-trash"></i> Empty Cart</a>
    </div>
    <?php
    if (isset($_SESSION["cart_item"])) {
      $total_quantity = 0;
      $total_price = 0;
    ?>
      <table class="table" style="color:white" cellpadding="10" cellspacing="1">
        <tbody>
          <tr>
            <th>Image</th>
            <th style="text-align:left;">Name</th>
            <th style="text-align:left;">Code</th>
            <th style="text-align:right;" width="5%">Quantity</th>
            <th style="text-align:right;" width="10%">Unit Price</th>
            <th style="text-align:right;" width="10%">Price</th>
            <th style="text-align:center;" width="5%">Remove</th>
          </tr>
          <?php
          foreach ($_SESSION["cart_item"] as $item) {
            $item_price = $item["quantity"] * $item["price"];
          ?>
            <tr>
              <td><img style="width:200px" src="<?php echo $item["image"]; ?>" class="cart-item-image" /></td>
              <td><?php echo $item["name"]; ?></td>
              <td><?php echo $item["code"]; ?></td>
              <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
              <td style="text-align:right;"><?php echo "$ " . $item["price"]; ?></td>
              <td style="text-align:right;"><?php echo "$ " . number_format($item_price, 2); ?></td>
              <td style="text-align:center;"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
            </tr>
          <?php
            $total_quantity += $item["quantity"];
            $total_price += ($item["price"] * $item["quantity"]);
          }
          ?>

          <tr>
            <td></td>
            <td colspan="2" align="right">Total:</td>
            <td align="right"><?php echo $total_quantity; ?></td>
            <td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_price, 2); ?></strong></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    <?php
    } else {
    ?>
      <div class="no-records">&nbsp; Your Cart is Empty</div>
    <?php
    }
    ?>
  </div>
  <!-- Cart End -->

  <!-- Add To Cart Start -->
  <div class="cart-page">
    <div class="container-fluid">
      <div class="row">
        <div class="cart-page-inner">
          <?php
          $product_array = $db_handle->runQuery("SELECT*FROM tblproduct ORDER BY id ASC");
          if (!empty($product_array)) {
            foreach ($product_array as $key => $value) {
          ?>
              <div class="product-item" style="width:400px;height:800px;float:left;margin-left:120px">
                <form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                  <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                  <div class="product-tile-footer">
                    <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
                    <div class="product-price"><?php echo "$" . $product_array[$key]["price"]; ?></div>
                    <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                  </div>
                </form>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Add To Cart End -->

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