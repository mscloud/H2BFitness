<?php
	session_start();
	require('connect.php');
	$memberno = $_SESSION['update_result']['memno'];
	$memberno = mysqli_real_escape_string($db_connection, $memberno);
	if($_SERVER['REQUEST_METHOD'] == "POST"){ //get information from form and escape it
		$fname = $_POST['fname'];
		$fname = mysqli_real_escape_string($db_connection, $fname);
		$lname = $_POST['lname'];
		$lname = mysqli_real_escape_string($db_connection, $lname);
		$memplan = $_POST['memplan'];
		$memplan = mysqli_real_escape_string($db_connection, $memplan);
		$dob = $_POST['dob'];
		$dob = mysqli_real_escape_string($db_connection, $dob);
		$mobile = $_POST['no'];
		$mobile = mysqli_real_escape_string($db_connection, $mobile);
		$email = $_POST['email'];
		$email = mysqli_real_escape_string($db_connection, $email);
		$address = $_POST['address'];
		$address = mysqli_real_escape_string($db_connection, $address);
	}
	$query = "UPDATE member SET fname='$fname', lname='$lname', membership='$memplan', dob='$dob', mobile='$mobile', email='$email', address='$address' WHERE membernumber =" . $_SESSION['update_result']['memno']; //update member with new information
	$result = mysqli_query($db_connection, $query);
	if ($result){
		$row = mysqli_fetch_array($result);
		unset($_SESSION['update_result']);
		header("Location: admin_update_member.php");
	}
	else{
		    echo "Error: " . $query . "<br>" . $db_connection->error;
	}
?>