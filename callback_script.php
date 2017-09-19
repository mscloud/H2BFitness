<?php
	//put callback infromation into database
	require("connect.php");
	if(isset($_REQUEST['submit'])){
		echo "hello";
		$parts = explode(" ", $_POST['name']);
		$lname = array_pop($parts);
		$lname = htmlspecialchars($lname);
		$fname = implode(" ", $parts);
		$fname = htmlspecialchars($fname);
		$phone = $_POST['phone'];
		$phone = htmlspecialchars($phone);
		$query = "INSERT INTO callback (fname, lname, phonumber) VALUES ('$fname', '$lname', '$phone')";
		$result = @mysqli_query($db_connection, $query);
		header('location: Memberships.php');
	}
	else { header('location: Memberships.php');}
	echo "nieagea";
?>