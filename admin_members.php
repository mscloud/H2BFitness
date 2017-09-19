<?php
	//splash screen for membership management
	session_start();
	if(session_id() == "" || !isset($_SESSION['admin']) || !isset($_SESSION['admin_check'])){
		header("Location: admin.php");
	}
	require('header.php');
?>
	<h1>Membership Management System</h1>
	<a class="buttonlink" id="addmember" href="admin_add_member.php">Add</a>
	<a class="buttonlink" id="searchmember" href="admin_search_member.php">Search</a>
	<a class="buttonlink" id="updatemember" href="admin_update_member.php">Update</a>
	<a class="buttonlink" id="deletemember" href="admin_delete_member.php">Delete</a>
<?php
	require('footer.php');
?>