<?php
	session_start();
	$memberno = null;
	require ('connect.php'); 
	if(! $db_connection ){
	  die('Could not connect: ' . mysqli_error());
	}
	if($_SERVER['REQUEST_METHOD'] == "POST"){ //get member number for update
		$_SESSION['update_result']['memno'] = $_POST['memno'];
	}
	header('location: admin_update_member.php')
?>