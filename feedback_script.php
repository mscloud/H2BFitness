<?php
	//insert feedback information into database
	require("connect.php");
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$parts = explode(" ", $_POST['name']);
		$lname = array_pop($parts);
		$lname = htmlspecialchars($lname);
		$fname = implode(" ", $parts);
		$fname = htmlspecialchars($fname);
		$memberno = $_POST['memno'];
		$memberno = htmlspecialchars($memberno);
		$email = $_POST['email'];
		$email = htmlspecialchars($email);
		$feedback = $_POST['feedback'];
		$feedback = htmlspecialchars($feedback);

		$query = "INSERT INTO feedback (fname, lname, memberno, email, feedback) VALUES ('$fname', '$lname', '$memberno', '$email', '$feedback')";
		$result = @mysqli_query($db_connection, $query);
		header('location: contactus.php');
	}	
?>