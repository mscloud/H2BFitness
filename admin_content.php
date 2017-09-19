<?php
	session_start();
	if(session_id() == "" || !isset($_SESSION['admin']) || !isset($_SESSION['admin_check'])){ //check if user allowed here
		header("Location: admin.php");
	}
	require('header.php');
?>
	<h1>Content Management System</h1>		<!-- image upload -->
	<form action="upload.php" method="post" enctype="multipart/form-data">
	    Select image to upload: 
	    <input type="file" name="fileToUpload" id="fileToUpload">
	    <input type="submit" value="Upload Image" name="submitimage">
	</form> <br><br>
	
	<form method="POST" name="content" action="admin_content_script.php">
		<select name="page"> <!-- select which page to edit -->
			<option value="1">Home</option>
			<option value="2">Memberships</option>
			<option value="3">Contact Us</option>
		</select>
		<input name="submitcontent" type="submit" value="Submit" />
	</form>
<?php
	require('footer.php'); 
?>