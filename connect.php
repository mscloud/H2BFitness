<?php 
	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', '');
	DEFINE ('DB_HOST', 'localhost:3306');
	DEFINE ('DB_NAME', 'database');
	// Make the connection...
	$db_connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die ('Could not connect to database ' . mysqli_connect_error());
	// Set the encoding...
	mysqli_set_charset($db_connection, 'utf8');
?>
