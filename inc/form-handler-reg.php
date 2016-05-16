<?php
	
	// Login Details
	include('db-connect.php');
			  
	// Set table name
	$table = 'cm_event_reg';

	// Form Data
	$name = addslashes($_POST['name']);
	$company_name = addslashes($_POST['company_name']);
	$option_1 = addslashes($_POST['option_1']);
	$option_2 = addslashes($_POST['option_2']);
	$option_3 = addslashes($_POST['option_3']);
	$option_4 = addslashes($_POST['option_4']);
	$option_5 = addslashes($_POST['option_5']);
	$option_6 = addslashes($_POST['option_6']);
	$queries = addslashes($_POST['queries']);
	
	// Inserts Form Data into table
	$query = 
		
		"INSERT INTO " . $table . " (name, company_name, option_1, option_2, option_3, option_4, option_5, option_6, queries)" .
		"VALUES ('$name', '$company_name', '$option_1', '$option_2', '$option_3', '$option_4', '$option_5', '$option_6', '$queries')";
		
	$result = mysqli_query($con, $query);

	if(!$result) {
		
		// Creates table if it doesn't already exist
		$create_table =  
			"CREATE TABLE " . $table . " ( 
			id int(50) NOT NULL AUTO_INCREMENT, 
			name varchar(250), 
			company_name varchar(250), 
			option_1 varchar(250), 
			option_2 varchar(250), 
			option_3 varchar(250), 
			option_4 varchar(250), 
			option_5 varchar(250), 
			option_6 varchar(250), 
			queries varchar(1000), 
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
	include('email-admin-reg.php');

	// Send email confirmation to customer
	include('email-customer-reg.php');

	// Redirects to the Thank You page.
	header ('Location: ../index?=regThankyou');

	// Closes the connection to the server.
	mysqli_close($con);
	
?>