<?php
	session_start();
	require('connect.php');
	$page = null;
	require('header.php');
	if(! $db_connection ){
		die('Could not connect: ' . mysqli_error());
	}
	if(isset($_REQUEST['submitcontent'])){ //get the content to edit
		$page = $_POST['page'];
		$query = "SELECT content FROM content WHERE page = $page";
		$result = mysqli_query($db_connection, $query);
		while ($row = $result->fetch_assoc()){
			$_SESSION['content_page'] = $page;
	    	$value = $row['content'];
	    	$query = "SELECT page FROM content_page WHERE pageid = $page";
	    	$results = mysqli_query($db_connection, $query);
	    	while ($rows = $results->fetch_assoc()){
	    		$pagename =  $rows['page'];
	    	}
?>
	    	<form method="POST" action="admin_content_script1.php">
				<h4>You are editing content on the <?php echo ucwords($pagename); ?> page</h4> <!-- tell user what page they are editing -->
				<textarea name="textcontent" class='textarea' cols="200" rows="15"><?php echo $row['content'] ?></textarea>
		    	<input type="submit" name="submitcontent" value="Submit">
	    	</form>
<?php
		}
?>
		<br><button onclick="history.go(-1);">Cancel</button> <!-- allow user to go back -->
<?php
	}
	else{ header('location: admin_content.php');}
	require('footer.php');
?>