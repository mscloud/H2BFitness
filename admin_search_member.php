<?php
	session_start();
	require('connect.php');
	if(session_id() == "" || !isset($_SESSION['admin']) || !isset($_SESSION['admin_check'])){ //check if user allowed here
		header("Location: admin.php");
	}
	require('header.php');
?>
<h1>Membership Management System</h1>
<?php
	if(!empty($_SESSION['search_result']) || isset($_SESSION['search_result'])){ //print out user information
		$query = "SELECT Membershipername FROM membership WHERE memID = " .$_SESSION['search_result']['membership'];
		$result = @mysqli_query($db_connection, $query);
		echo "Name: " . $_SESSION['search_result']["fname"]. " " . $_SESSION['search_result']["lname"] . "<br>";
		echo "Membership plan: " . $result . "<br>";
        echo "Date of Birth: " . $_SESSION['search_result']['dob'] . "<br>";
        echo "Gender: " . strtoupper($_SESSION['search_result']['gender']) . "<br>";
        echo "Mobile Number: " . $_SESSION['search_result']['mobile'] . "<br>";
        echo "Email: " . $_SESSION['search_result']['email'] . "<br>";
        echo "Address: " . $_SESSION['search_result']['address'] . "<br>";
        echo "Join Date: " . $_SESSION['search_result']['joindate'];
        unset($_SESSION['search_result']);
?>		<br><button onclick="history.go(-1);">Back </button> <!-- allow user to go back -->
<?php
	}
	else{
		if(isset($_SESSION['search_result']['exist']) && $_SESSION['search_result']['exist'] == false){ //tell user that the member number isn't registered
			echo "Member does not exist";
			unset($_SESSION['search_result']['exist']);
		}	
?>
		<h3>Search Members</h3> <!-- search member via member number -->
		<form method="POST" action="admin_search_member_script.php">
			Member Number:<br>
			<input type="text" name="memno" maxlength="6" required><br>
			<input id="submit" type="submit" value="Submit" />
		</form>
<?php
	}
?>
<?php require('footer.php'); ?>