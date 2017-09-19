<?php
	//provides alerts for pending callbacks and feedback approvals and allows user to browse admin section
	session_start();
	if(session_id() == "" || !isset($_SESSION['admin']) || !isset($_SESSION['admin_check'])){ //check if member is allowed here
		header("Location: admin.php");
	}
	require('connect.php');
	require('header.php');
?>
	<br><br>
	 <h4>Welcome <?php echo ucwords($_SESSION['name']) . "</h4>"; 
	$query = "SELECT * FROM callback WHERE callback = 0";
	$result = mysqli_query($db_connection, $query);
	$count = mysqli_num_rows($result);
	if($count == 1){ //alerts user to pending callback requests
		echo "<p>You have 1 <a href='admin_callback.php'>callback</a> notification.";
		$count = 0;
	}
	else if($count > 1){
		echo '<p>You have ' . $count . ' <a href="admin_callback.php">callback</a> notifications.';
		$count = 0;
	}
	else if($count == 0){
		echo "<p>You have no <a href='admin_callback.php'>callback</a> notifications. </p>";
		$count = 0;
	}
	$query = "SELECT * FROM feedback WHERE display = 0";
	$result = mysqli_query($db_connection, $query);
	$count = mysqli_num_rows($result);
	if($count == 1){ //alerts user to pending feedback approvals
		echo "<p>You have 1 <a href='admin_feedback.php'>feedback</a> notification.";
		$count = 0;
	}
	else if($count > 1){
		echo '<p>You have ' . $count . ' <a href="admin_feedback.php">feedback</a> notifications.';
		$count = 0;
	}
	else if($count == 0){
		echo "<p>You have no <a href='admin_feedback.php'>feedback</a> notifications.</p>";
		$count = 0;
	}
?> 
<?php require('footer.php');