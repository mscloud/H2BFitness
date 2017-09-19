<?php
	session_start();
	require('header.php');
	if(isset($_SESSION['aderror'])){
		if($_SESSION['aderror'] == true){ //check if user entered username/password wrong
			echo "Incorrect Username or Password. Please try again.";
		}
	}
?>
	<form method="post" action="admin_check_script.php"> <!-- login script -->
		<br><br><br>
	 	Username:<br>
	 	<input type="text" name="username"><br>
	 	password:<br>
	 	<input type="password" name="password">
	 	<p><input type="submit" name="submit" value="Submit" /></p>
	</form>
<?php require('footer.php'); ?>