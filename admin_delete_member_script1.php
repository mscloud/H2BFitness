<?php
	//this script deletes the member or cancels it
	session_start();
	require('connect.php');
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_POST['Cancel'])){
			header('location: admin_delete_member.php');
		}
		else{
			$query = "DELETE FROM member WHERE membernumber=" . $_SESSION['memberno'];
			$result = @mysqli_query($db_connection, $query);
			unset($_POST['submit']);
			if(mysqli_affected_rows($db_connection) == 1){
				$_SESSION['delete_return'] = true;
				header("Location: admin_delete_member.php");
			}
			else{
				header("Location: admin_members.php");
			}
		}
	}
	else{
		header('Location: admin_delete_member.php');
	}
?>