<?php
	//put booked class into database
	session_start();
	require('connect.php');
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$class = $_POST['class'];
		$memno = $_POST['memno'];
		$memno = mysqli_real_escape_string($db_connection, $memno);
		$day = $_POST['day'];
		$time = $_POST['time'];
	}
	$query = "INSERT INTO BookedClasses (class, memno, day, time) VALUES ('$class', '$memno', '$day', '$time');";
	$result = mysqli_query($db_connection, $query);
	if($result){ header('location: timetable.php'); }
	else{ 
		$_SESSION['booking_failed'] = true;
	    header('location: timetable.php');
	}


?>