<?php
	include("connection.php");
	if (isset($_POST["loginUser"])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		if (!empty($email) && !empty($password)) {
			$query = mysql_query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
			$no_rows = mysql_num_rows($query);
			if ($no_rows == 1) {
				//ob_start();
				session_start();	// start a session 
				if ($_SESSION['userLogin'] = $email) {
					echo '<script>location.href="profile.php";</script>';
				}
				
			} else {
				echo    "<div class='alert alert-danger text-center' role='alert'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<strong>Error!</strong> Invalid login details !
					</div>";
			}
		} else {
			echo    "<div class='alert alert-danger text-center' role='alert'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<strong>Error!</strong> Please, enter your email and password !
					</div>";
		}
		
	}
?>