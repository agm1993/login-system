<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="login_db";

	if (!@mysql_connect($host, $user, $pass) || !@mysql_select_db($db)){
		echo 'Error connnecting to the database :'.mysql_error();
	}
?>