<?php 
	session_start();
	$username = null;
	$password = null;
	require('connect.php');
	mysqli_select_db($db_connection, 'fitness');
	if(isset($_POST['submit'])){ //check if user has correct details
		$username = $_POST['username'];
		$username = mysqli_real_escape_string($db_connection, $username);
		$password = $_POST['password'];
		$password = mysqli_real_escape_string($db_connection, $password);	
		$sql="SELECT * FROM staff WHERE username='$username' and password='$password'";
		$result = mysqli_query($db_connection, $sql);
	}
	$count=mysqli_num_rows($result);
	if ($count==1){ //if only 1 result is returned 
		$_SESSION['name'] = $username; //set the username
		$_SESSION['aderror'] = false;
		$_SESSION['admin_check'] = true; //stop incorrect notification on admin.php page
	    $_SESSION['admin'] = $result; //allow information to be carried to other pages
	    header("Location: admin_splash.php"); //redirect to admin splash page

	} 
	else{
		$_SESSION['aderror'] = true;
		$_SESSION['admin_check'] = false; //if information is false check incorrect information notificaiton
		header("Location: admin.php"); //redirect to admin.php
	}
?>