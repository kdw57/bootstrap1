<?php
	
	// Login Details
	include('db-connect.php');
	
	// Set table name
	$table = 'cm_event_contact';

	// Form Data
	$name = addslashes($_POST['name']);
	$email = addslashes($_POST['email']);
	$organisation = addslashes($_POST['organisation']);
	$job_title = addslashes($_POST['job_title']);
	$message = addslashes($_POST['message']);
	
	// Inserts Form Data into table
	$query = 
		
		"INSERT INTO " . $table . " (name, email, organisation, job_title, message)" .
		"VALUES ('$name', '$email', '$organisation', '$job_title', '$message')";
		
	$result = mysqli_query($con, $query);

	if(!$result) {
		
		// Creates table if it doesn't already exist
		$create_table =  
			"CREATE TABLE " . $table . " ( 
			id int(50) NOT NULL AUTO_INCREMENT, 
			name varchar(250), 
			email varchar(250), 
			organisation varchar(250), 
			job_title varchar(250), 
			message varchar(1000), 
			time_stamp TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP, 
			PRIMARY KEY (id)
		)";
		
		$result = mysqli_query($con, $create_table)
			or die('Issue creating table.' . mysql_error());

		// If successful
		echo "Table created, you can now start using the form!";
		exit();

	}
	
	// Send email notification to admin
	include('email-admin-contact.php');

	// Send email confirmation to customer
	include('email-customer-contact.php');

	// Redirects to the Thank You page.
	header ('Location: ../index?=contactThankyou');

	// Closes the connection to the server.
	mysqli_close($con);
	
?>