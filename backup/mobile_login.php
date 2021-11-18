<?php
							
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wyndpc";
		
	$connect = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection failed");
					
	$user = $_POST["user"];
	$password = $_POST["password"];

	$sqlcheck = "SELECT * FROM `login` WHERE user = '$user' AND password = '$password'";
					
	$result = mysqli_query($connect,$sqlcheck);	
					
	if ($result) {
		if (mysqli_num_rows($result) > 0) {
			echo "Successfully Login";
		}
		
		else{
			echo "Username does not exist. Please register.";
		}
	}
