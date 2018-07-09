<?php
	session_start(); // start a session

	if (isset($_SESSION['userLogin'])) { 		// check if the session is set
		unset($_SESSION['userLogin']);   		// unset the session
		header("Location: /login/index.php"); 	// redirect the user to login page
	} else {
		header("Location: /login/profile.php");	// redirect the user to profile page
	}
?>