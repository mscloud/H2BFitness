<?php
	session_start();
	if(session_id() == "" || !isset($_SESSION['admin']) || !isset($_SESSION['admin_check'])){ //check if they are allowed access this page
		header("Location: admin.php");
	}
	require('header.php');
?>
	<h3>Add New Member</h3> <!-- add new member form -->
	<form method="POST" action="admin_add_mem_script.php">
		First Name:<br>
		<input type="text" name="fname" maxlength="20" required><br>
		Last Name:<br>
		<input type="text" name ="lname" maxlength="20" required><br>
		Membership Plan:<br>
		<select name="memplan" required>
			<option value="1">Monthly</option>
			<option value="2">Yearly</option>
			<option value="3">Discount</option>
		</select><br>
		Date of Birth:<br>
		<input type="date" name="dob" required><br>
		Gender: <br>
		Female
		<input type="radio" name="gender" value="f">Male
		<input type="radio" name="gender" value="m"> <br>
		Mobile: <br>
		<input type="number" name="no" required><br>
		Email:<br>
		<input type="text" name="email" maxlength="30" required><br>
		Address:<br>
		<input type="text" name="address" maxlength="30"><br>
		<input id="submit" type="submit" value="Submit" />
	</form>
<?php require('footer.php');