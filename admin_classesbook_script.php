<?php
	session_start();
	require('connect.php');	
	require('header.php');

	if(isset($_REQUEST['submit'])){ //check for booked classes
		$query = 'SELECT * FROM BookedClasses WHERE class = "' . $_POST["class"] . '" AND day = "' .$_POST["day"] . '" AND time = "' . $_POST["time"] . '"';
		$result = @mysqli_query($db_connection, $query);
		if ($result->num_rows > 0){
			echo "There is currently " . mysqli_num_rows($result) . " people signed up for "  . $_POST['class'] . " on " . ucwords($_POST['day']) . " " . $_POST['time'] . ".";
?>
			<br><button onclick="history.go(-1);">Back</button> <!-- allow user to go back -->
<?php
		}
		else{
			echo "No one has signed up yet for " . $_POST['class'] . " on " . ucwords($_POST['day']) . " " . $_POST['time'] . ".";
	?>
			<br><button onclick="history.go(-1);">Back</button> <!-- allow user to go back -->
<?php
		}
	}
?>