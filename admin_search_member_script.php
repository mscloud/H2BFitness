<?php
	//searches for member via member number supplied
	session_start();
	$memberno = null;
	require ('connect.php');
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$memberno = $_POST['memno'];
		$memberno = mysqli_real_escape_string($db_connection, $memberno);
	}
	$query = "SELECT * FROM member WHERE membernumber ='". $memberno. "'";
	$result = @mysqli_query($db_connection, $query);
	if ($result->num_rows == 1){
		$row = mysqli_fetch_array($result);
		$_SESSION['search_result'] = $row;
		header("Location: admin_search_member.php");
	}
	else{
	    $_SESSION['search_result']['exist'] = false;
	    unset($_SESSION['search_result']);
	    header('location: admin_search_member.php');
	}
?>