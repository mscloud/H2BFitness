<?php
	session_start();
	require('connect.php');
	if(session_id() == "" || !isset($_SESSION['admin']) || !isset($_SESSION['admin_check'])){ //checks if user allowed here
		header("Location: admin.php");
	}
	require('header.php');
	if(!empty($_SESSION['update_result']['memno'])) { ?> <!-- update member -->
		<h1>Membership Management System</h1>
		<h3>Update Member</h3>
		<form method="POST" action="admin_update_member_script1.php">
			First Name:<br>
			<input type="text" name="fname" maxlength="20" required><br>
			Last Name:<br>
			<input type="text" name ="lname" maxlength="20" required><br>
			Membership Plan:<br>
			<select name="memplan" required>
				<option value="1">Monthly</option>
				<option value="2">Yearly</option>
				<option value="3">Discount</option>
			</select>
			Date of Birth:<br>
			<input type="date" name="dob" required><br>
			Mobile: <br>
			<input type="number" name="no" required><br>
			Email:<br>
			<input type="text" name="email" maxlength="30" required><br>
			Address:<br>
			<input type="text" name="address" maxlength="30"><br>
			<input type="submit" name="Confirm" value="Confirm">
	 		<input type="submit" name="Cancel" value="Cancel">
		 </form>
<?php
	}
	else{
?>
		<h1>Membership Management System</h1>
			<h3>Update Member</h3>
			<form method="POST" action="admin_update_member_script.php">
				Member Number:<br>
				<input type="text" name="memno" maxlength="6" required><br>
				<input id="submit" type="submit" value="Submit" />
			</form>
<?php
	}
			if(isset($_SESSION['update_return']) && $_SESSION['update_return'] == false){ //tell user that the member number doesn't exist
					echo "Member doesn't exist";
					unset($_SESSION['update_return']);
					unset($_SESSION['memno']);
			}
			else if(isset($_SESSION['update_return']) && $_SESSION['update_return'] == true){ //tell user that the member was successfully updated
				echo "Member successfully updated";
				unset($_SESSION['update_return']);
				unset($_SESSION['memno']);
			}
			require('footer.php');
?>