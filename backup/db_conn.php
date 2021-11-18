<?php

$sname = "localhost";
$uname = "id17159863_root";
$password = "VqO5U1>EbYKZOl\U";

$db_name = "id17159863_wyndpc";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
