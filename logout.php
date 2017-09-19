<?php
	//destroy any session information and return home
	session_start();
	session_unset();
	session_destroy();
	header("Location: index.php");
	exit();
?>