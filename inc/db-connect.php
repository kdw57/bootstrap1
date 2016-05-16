<?php

	// Connects to Database
	$host = 'localhost'; // db address
	$user = 'root'; // db username
	$pass = ''; // password
	$db = 'cm_events'; // database name
	
	// Connect to MySQL Server and select Database
	$con = mysqli_connect($host, $user, $pass, $db)
		or die('Login Issue.' . mysql_error());
	
?>