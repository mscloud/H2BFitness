<?php
	session_start();
	require('connect.php');
	if(isset($_REQUEST['display'])){ //change display boolean to true if approved
		$query = "UPDATE feedback SET display = '1' WHERE memberno = " . $_SESSION['feedback_memno'];
		$result = mysqli_query($db_connection, $query);
			unset($_SESSION['feedback_memno']);
			header("Location: admin_feedback.php");
	}
	if(isset($_REQUEST['delete'])){ //deleted feedback if not approved
		$query = "DELETE FROM feedback  WHERE memberno = " . $_SESSION['feedback_memno'];
		$result = mysqli_query($db_connection, $query);
			unset($_SESSION['feedback_memno']);
			header("Location: admin_feedback.php");
	}
?>