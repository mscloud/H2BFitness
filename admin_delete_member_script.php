<?php
	//this script returns member information to confirm it is right
	session_start();
	require('connect.php');
	$memberno = null; 
	if(! $db_connection ){
	  die('Could not connect: ' . mysqli_error());
	}
	mysqli_select_db($db_connection, 'member');
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$memberno = $_POST['memno'];
		$_SESSION['memberno'] = $memberno;
		$memberno = mysqli_real_escape_string($db_connection, $memberno);
	}
	$query = "SELECT * FROM member WHERE membernumber ='". $memberno. "'";
	$result = @mysqli_query($db_connection, $query);
	$count = mysqli_num_rows($result);	
	if($count == 1){
		$row = mysqli_fetch_array($result);
		$_SESSION['delete_result'] = $row;
		header("Location: admin_delete_member.php");
	}
	else{
		$_SESSION['delete_return'] = false;
	    header("Location: admin_delete_member.php");
	}
?>