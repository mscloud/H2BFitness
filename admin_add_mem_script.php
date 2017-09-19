<?php
	require ('connect.php'); 
	if($_SERVER['REQUEST_METHOD'] == "POST"){ //get information from form and escape it
		$fname = $_POST['fname'];
		$fname = mysqli_real_escape_string($db_connection, $fname);
		$lname = $_POST['lname'];
		$lname = mysqli_real_escape_string($db_connection, $lname);
		$memplan = $_POST['memplan'];
		$memplan = mysqli_real_escape_string($db_connection, $memplan);
		$dob = $_POST['dob'];
		$dob = mysqli_real_escape_string($db_connection, $dob);
		$gender = $_POST['gender'];
		$gender = mysqli_real_escape_string($db_connection, $gender);
		$mobile = $_POST['no'];
		$mobile = mysqli_real_escape_string($db_connection, $mobile);
		$email = $_POST['email'];
		$email = mysqli_real_escape_string($db_connection, $email);
		$address = $_POST['address'];
		$address = mysqli_real_escape_string($db_connection, $address);
	}
	$query = "INSERT INTO member (fname, lname, membership, dob, gender, mobile, email, address)
	VALUES ('$fname', '$lname', '$memplan', '$dob', '$gender', '$mobile', '$email', '$address');";  //enter information into database
	$result = @mysqli_query($db_connection, $query);
	if($result){
		header("Location: admin_membership.php"); //redirect them if complete
	}else {
	    echo "Error: " . $query . "<br>" . $db_connection->error; //error if not ?>
	    <br><button onclick="location.href='admin_splash.php'">Home</button> <!-- return home after displaying error -->
<?php
	}
?>