<?php
	session_start();
	require('connect.php');
	if(session_id() == "" || !isset($_SESSION['admin']) || !isset($_SESSION['admin_check'])){ //check if user allowed here
		header("Location: admin.php");
	}
	require('header.php');
	$query = "SELECT fname, phonumber FROM callback WHERE callback = 0";
	$result = mysqli_query($db_connection, $query);
	$row = mysqli_fetch_array($result);
	if(mysqli_affected_rows($db_connection)){ //if query returned anything display a callback to be completed
			echo "<br><br><br>";
			$_SESSION['phonumber'] = $row['phonumber'];
			echo "<p>" . $row['fname'] . "<br>0" . $row['phonumber'] . "</p>";
?>				
			<form method="POST" action="admin_callback_script.php">
				<input type="submit" name="completed" onclick="feedback($row['phonumber']);" value="Completed">
				<input type="submit" name="later" onclick="feedback($row['phonumber']);" value="Later">
			</form>
<?php
		//}
	}
	else{
		echo "<br><br><br>";
		echo "No one is waiting for a callback";
?>			<br><button onclick="location.href='admin_splash.php'">Back</button>
<?php
		}
	require('footer.php');	
?>