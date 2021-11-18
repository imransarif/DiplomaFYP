<?php
session_start();
$username = $_SESSION["username"];
include "db_conn.php";

if (count($_POST) > 0) {

    $result = mysqli_query($conn, "SELECT * from user WHERE username='" . $username . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"]) {
        mysqli_query($conn, "UPDATE user set password='" . $_POST["newPassword"] . "' WHERE username='" . $username . "'");
        $message = '<script>alert("Password Changed Sucessfully")</script>';
    } else {
        $message = '<script>alert("Password is not correct")</script>';
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

    <div class="login" style="margin-top: 250px;">
        <form action="" method="post" class="text-center">
            <div class="container-fluid">
                <h3>CHANGE PASSWORD</h3>
                <div class="center">

                    <?php if (isset($message)) {
                        echo $message;
                    } ?>

                    <label>Current Password:</label>
                    <input class="form-control" name="currentPassword"><span id="currentPassword" class="required"></span>
                </div>
                <div class="center">
                    <label>New Password:</label>
                    <input class="form-control" name="newPassword"><span id="newPassword" class="required"></span>
                </div>
                <div>
                    <input type="submit" class="btn">
                </div>
            </div>
        </form>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>