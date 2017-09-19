<?php
	//get feedback information from database
	$query = "SELECT fname, feedback FROM feedback WHERE display = 1";
	$result = mysqli_query($db_connection, $query);
	if($result){
		while($row = mysqli_fetch_array($result)){
		//echo "<p>" . $row['fname'] . "</p><br><p>" . $row['feedback'] . "</p><br><br>";
		echo '<p>"' . ucwords($row['feedback']) . '"<br>' . '-' . ucwords($row["fname"]) . '<p>';
		}
	}
	else{
		echo "No Feedback testimonials available";
	}
?>