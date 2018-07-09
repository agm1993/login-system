<?php
	ob_start();
	session_start(); // Start a session
	// check if the session is not set, then redirect the user to login page
	if (!isset($_SESSION['userLogin'])) {
		header("location: index.php");
	} else {
		include 'actions/connection.php';
		$email = $_SESSION['userLogin'];
		$row = mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE `email` = '$email'"));
		$name = $row['name'];
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<link type="image/x-icon" href="/images/logo.png" rel="shortcut icon" />

		
		   
	</head>
	<body>
		
		<br>
		<div class="row">
			<div class="container">
				<div class="row">
					<center><h3>Welcome <span style="font-style: italic; font-weight: normal;"><?php echo $name; ?></span></h3></center>
					<center><a href="actions/logout.php" style="font-size: 14pt;">Logout</a></center>
				</div>
			</div>
		</div>
		<br>
		
	</body>
</html>