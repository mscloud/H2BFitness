<?php
	session_start();
	if(session_id() == "" || !isset($_SESSION['admin']) || !isset($_SESSION['admin_check'])){ //check if they are allowed access this page
		header("Location: admin.php");
	}
	require('header.php');
    if(!empty($_SESSION['bookclass_count']) || isset($_SESSION['bookclass_count'])){
        echo "There is currently " . $_SESSION['bookclass_count'] ."signed up.";

        unset($_SESSION['bookclass_count']);
    }
?>
	<br> <br>
	<h4>Please select the class you would like to look at:</h4> <!--options for viewing class -->
	<form method="POST" action="admin_classesbook_script.php">
        Class:<br>
        <select name="class"required>
            <option value="spinning">Spinning</option>
            <option value="bodypump">Bodypump</option>
            <option value="cxworx">CXWORX</option>
            <option value="kettlebells">Kettlebells</option>
            <option value="pilates">Pilates</option>
        </select><br>
        Day:<br>
        <select name="day" required>
            <option value="monday">Monday </option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thursday">Thursday</option>
            <option value="friday">Friday</option>
        </select><br>
        Time:<br>
        <select name="time" required>
            <option value="morning">Morning</option>
            <option value="afternoon">Afternoon</option>
            <option value="evening">Eveneing</option>
        </select><br>
		<input type="submit" name="submit" value="Submit">
	</form>



<?php
require('footer.php');
?>