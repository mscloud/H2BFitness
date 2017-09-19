<?php
	session_start();
	require('connect.php');
	if(session_id() == "" || !isset($_SESSION['admin']) || !isset($_SESSION['admin_check'])){ //check if allowed on this page
		header("Location: admin.php");
	}
	require('header.php');
	if(!empty($_SESSION['delete_result'])){ ?>
		<h1>Membership Management System</h1>
		<h3>Delete Member</h3>
<?php 		//print out information to confirm if it's the right person
			echo "<h1>Membership Management System</h1>";
			echo "Name: " . $_SESSION['delete_result']["fname"]. " " . $_SESSION['delete_result']["lname"] . "<br>";
			echo "Member Number: " . $_SESSION['delete_result']['membernumber'] . "<br>";
			echo "Membership Plan: " . $_SESSION['delete_result']['membership'] . "<br>";
	        echo "Date of Birth: " . $_SESSION['delete_result']['dob'] . "<br>";
	        echo "Gender: " . strtoupper($_SESSION['delete_result']['gender']) . "<br>";
	        echo "Mobile Number: " . $_SESSION['delete_result']['mobile'] . "<br>";
	        echo "Email: " . $_SESSION['delete_result']['email'] . "<br>";
	        echo "Address: " . $_SESSION['delete_result']['address'] . "<br>";
	        echo "Join Date: " . $_SESSION['delete_result']['joindate'];
	        $_SESSION['memberno'] = $_SESSION['delete_result']['membernumber'];
	        unset($_SESSION['delete_result']);
?>	
			<form method="POST" action="admin_delete_member_script1.php"> <!-- Confirm or cancel the deletion -->
	 			<input type="submit" name="Confirm" value="Confirm">
	 			<input type="submit" name="Cancel" value="Cancel">
		 	</form>
		 	<?php
			}
			else{
				if(isset($_SESSION['delete_return']) && $_SESSION['delete_return'] == false){ //tell user if member number doesn't exist
					echo "Member doesn't exist";
					unset($_SESSION['delete_return']);
					unset($_SESSION['memberno']);
				}
				else if(isset($_SESSION['delete_return']) && $_SESSION['delete_return'] == true){ //tell user the member was successfully deleted
					echo "Member successfully deleted";
					unset($_SESSION['delete_return']);
					unset($_SESSION['memberno']);
				}
			?>
			<h1>Membership Management System</h1> <!-- delete member via member number -->
			<h3>Delete Members</h3>
			<form method="POST" action="admin_delete_member_script.php">
				Member Number:<br>
				<input type="text" name="memno" maxlength="6" required><br>
				<input id="submit" type="submit" value="Submit" />
			</form>
<?php
			}
			require('footer.php');
?>