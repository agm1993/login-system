<?php
	include("connection.php");
	if (isset($_POST["registerUser"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		if (!empty($name) && !empty($email) && !empty($password)) {
			$no_users = mysql_num_rows(mysql_query("SELECT * FROM `users` WHERE `email`='$email'")); // check if the email has been used
			if ($no_users == 0) {
				$query = "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES ('', '$name', '$email', '$password')";
				if (mysql_query($query)) {
					echo    "<div class='alert alert-success text-center' role='alert'>
								<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
								<strong></strong> Registered Successifully. You can login now!
						</div>";
				} else {
					echo    "<div class='alert alert-danger text-center' role='alert'>
								<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
								<strong>Error!</strong> Failed to register, try again !
						</div>";
					echo mysql_error();
				}
			} else {
				echo "<div class='alert alert-danger text-center' role='alert'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<strong>Error!</strong> $email has been used!
					</div>";
			}
		} else {
			echo    "<div class='alert alert-danger text-center' role='alert'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<strong>Error!</strong> Please, enter your name, email and password !
					</div>";
		}
		
	}
?>