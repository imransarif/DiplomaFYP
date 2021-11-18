<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
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
    <h1 style="text-align: center;margin-top: 50px;margin-bottom: 50px;">ADMIN MENU</h1>
    <div class="container-fluid">
        <table class="table" style="color:white" cellpadding="10" cellspacing="1">
            <tbody>

                <tr>
                    <th style="text-align:center;">Username</th>
                    <th style="text-align:center;">Email</th>
                    <th style="text-align:center;">Phone Number</th>
                    <th style="text-align:center;">Password</th>
                    <th style="text-align:center;">Delete Button</th>
                </tr>

                <?php
                $product_array = $db_handle->runQuery("SELECT * FROM user ORDER BY id ASC");
                if (!empty($product_array)) {
                    foreach ($product_array as $key => $value) {
                ?>

                        <div>
                            <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["id"]; ?>">
                                <tr>
                                    <td style="text-align:center;"><?php echo $product_array[$key]["username"]; ?></td>
                                    <td style="text-align:center;"><?php echo $product_array[$key]["email"]; ?></td>
                                    <td style="text-align:center;"><?php echo $product_array[$key]["no"]; ?></td>
                                    <td style="text-align:center;"><?php echo $product_array[$key]["password"]; ?></td>
                                    <td style="text-align:center;"><a href="delete.php?Id=<?php echo $product_array[$key]['Id']; ?>">Delete</a></td>
                            </form>
                        </div>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <div style="text-align: center;margin-top: 50px;margin-bottom: 50px;">

        <a href="logout.php">Logout</a>

    </div>
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