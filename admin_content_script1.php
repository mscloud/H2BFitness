<?php
	session_start();
	require('connect.php');
	if(! $db_connection ){
		die('Could not connect: ' . mysqli_error());
	}
	if(isset($_REQUEST['submitcontent'])){ //save any edits to database
		$query = "UPDATE content SET content = '" . $_POST['textcontent'] ."' WHERE page = '" . $_SESSION['content_page'] . "';";
		$result = mysqli_query($db_connection, $query);
		unset($_SESSION['content_page']);
		header('location: admin_content.php');
	}
	else{ header('location: admin_content.php');}


?>