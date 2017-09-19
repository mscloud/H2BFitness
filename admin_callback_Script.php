<?php
	session_start();
	require('connect.php');	
	if(isset($_REQUEST['later'])){ //if later is selected then the status of the callback is not changed and admin is brough back to admin home
		$complete = null; $later = null;
		unset($_SESSION['phonumber']);
		header("Location: admin_splash.php");
	}
	if(isset($_REQUEST['completed'])) { //if callback completed then user is brough to the next one
		$query = "UPDATE callback SET callback = '1' WHERE phonumber =" .$_SESSION['phonumber'];
		$result = mysqli_query($db_connection, $query);
		$complete = null; $later = null;
		unset($_SESSION['phonumber']);
		header("Location: admin_callback.php");
	}
	else{
		$complete = null; $later = null;
		unset($_SESSION['phonumber']);
		header("Location: admin_splash.php");
	}
?>