<?php							

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wyndpc";
		
	$connect = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection failed");
					
	$username = $_POST["username"];
	$password = $_POST["password"];
					
	$sqlcheck = "SELECT * FROM `user` WHERE username = '$username'";
					
	$result = mysqli_query($connect,$sqlcheck);	
					
	if ($result) {
		if (mysqli_num_rows($result) > 0) {
			echo "Username already exist. Please insert another username.";
			exit();
		}

		else{
							
			$sql = "INSERT INTO `user` (username, password) VALUES ('$username', '$password')";					
			$sendsql = mysqli_query($connect,$sql);
							
			if($sendsql)
				echo "Successful Register.";
			else
				echo "Failed to register. Please try again.";
		}		
	}
	else{
		echo "Error";
	}
