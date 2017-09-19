<?php
	session_start();
	require('connect.php');
	if(session_id() == "" || !isset($_SESSION['admin']) || !isset($_SESSION['admin_check'])){ //checks if user allowed here
		header("Location: admin.php");
	}
	require('header.php');
	$query = "SELECT fname, feedback, memberno FROM feedback WHERE display = 0"; //displays feedback information for approval
	$result = mysqli_query($db_connection, $query);
	$row = mysqli_fetch_array($result);
	if(mysqli_affected_rows($db_connection)){
			echo "<br><br><br>";
			$_SESSION['feedback_memno'] = $row['memberno'];
			echo "<p>" . $row['feedback'] . "<br> -" . $row['fname'] . "</p>";
?>				
			<form method="POST" action="admin_feedback_script.php">
				<input type="submit" name="display" onclick="feedback($row['memberno']);" value="Display">
				<input type="submit" name="delete" onclick="feedback($row['memberno']);" value="Delete">
			</form>
<?php
	}
	else{
		echo "<br><br><br>";
		echo "No feedback testimonials to approve";
	}
	/*(!($row) || mysqli_num_rows($result) == 0){
		echo "<br><br><br>";
		echo "No feedback testimonials to approve";
	}*/	
	require('footer.php');	
?>