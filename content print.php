<?php
	//gets content from database and displays it
	$query = "SELECT content FROM content WHERE page = $page";
	$result = mysqli_query($db_connection, $query);
	$content = mysqli_fetch_array($result);
	echo "<p>" .  $content['content'] . "</p>";
?>