<!doctype html>
<html lang="en" 
<!-- Head of the code, connecting our css, bootstrap library, and jquery library. Also includes the custom favicon. -->
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="images/icon7.0.ico"/>
	<title>Hip 2 B Fit</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Head of the code, connecting our css, bootstrap library, and jquery library. Also includes the custom favicon. -->
</head>

<!-- The body that contains all of the code -->
<body>
	<!-- Header that includes the navigation bar with links, custom logo that brings you back to the homepage. -->
	<header>
		<a class="navbar-brand" href="index.php"><img src="images/logo.png" height="50" style="margin-left:25px" title="Home" alt="Logo"></a>
		<nav id="nav">
			<ul>
				<li><a href="Memberships.php">Memberships</a>
				<li><a href="Classes.php">Classes</a></li>
				<li><a href="timetable.php" style="color: green;">Timetable</a></li>
				<li><a href="Trainers.php">Trainers</a></li>
				<li><a href="ContactUs.php">Contact Us</a></li>
			</ul>
		</nav> 
	</header>
	
	<!-- Content holds the main body of information of each page  -->
	<content>
	<!-- The main image of each page -->
		<div class="image">
			<img src="images/timetable.jpg"  style="width:100%; height:100%;">
		</div>
		<!-- Massive timetable using a lot bootstrap and css -->
		<div class="container">
			<table class=" table table-bordered">
				<!-- Top row stating days, the id is also for the javascript   -->
				<tr>
					<th></th>
					<th id="day1">Monday</th>
					<th id="day2">Tuesday</th>
					<th id="day3">Wednesday</th>
					<th id="day4">Thursday</th>
					<th id="day5">Friday</th>
					<th id="day6">Saturday</th>
					<th id="day7">Sunday</th>
				</tr>
        <!-- each of these split the timetable up by time and class, each with a link bringing you to the class on the class pages -->
        <tbody>
          <tr>
            <td>6.15am to 7:00am</td>
            <td><a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td><a href="classes.php#Kettlebells" class="class class_4">Kettlebells</a></td>
            <td><a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td><a href="classes.php#Kettlebells" class="class class_4">Kettlebells</a></td>
            <td><a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>7.00am to 7.45am</td>
            <td> <a href="classes.php#CXWORX" class="class class_3">CXWORX</a></td>
            <td><a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td><a href="classes.php#Bodypump" class="class class_2">Bodypump</a></td>
            <td><a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td><a href="classes.php#CXWORX" class="class class_3">CXWORX</a></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>9.30am to 10.15am</td>
            <td><a href="classes.php#Pilates" class="class class_5">Pilates</a></td>
            <td><a href="classes.php#Pilates" class="class class_5">Pilates</a></td>
            <td><a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td><a href="classes.php#Bodypump" class="class class_2">Bodypump</a></td>
            <td><a href="classes.php#Bodypump" class="class class_2">Bodypump</a></td>
            <td><a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td></td>
          </tr>
          <tr>
            <td>11am to 12pm</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="classes.php#Pilates" class="class class_5">Pilates</a></td>
            <td height="45" style="padding-bottom:10px;"><a href="classes.php#CXWORX" class="class class_3">CXWORX</a></td>
          </tr>
          <tr>
            <td>12:45pm to 1:15pm</td>
            <td><a href="classes.php#Kettlebells" class="class class_4">Kettlebells</a></td>
            <td><a href="classes.php#Bodypump" class="class class_2">Bodypump</a> <a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td><a href="classes.php#Kettlebells" class="class class_4">Kettlebells</a></td>
            <td><a href="classes.php#CXWORX" class="class class_3">CXWORX</a> <a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td><a href="classes.php#Kettlebells" class="class class_4">Kettlebells</a></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>1:15pm to 1:45pm</td>
            <td><a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td><a href="classes.php#Kettlebells" class="class class_4">Kettlebells</a></td>
            <td><a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td><a href="classes.php#Bodypump" class="class class_2">Bodypump</a></td>
            <td><a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td height="45"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
					<tr>
            <td>5:30pm to 6:15pm</td>
            <td><a href="classes.php#Bodypump" class="class class_2">Bodypump</a></td>
            <td><a href="classes.php#Bodypump" class="class class_2">Bodypump</a></td>
            <td><a href="classes.php#Bodypump" class="class class_2">Bodypump</a></td>
            <td><a href="classes.php#Kettlebells" class="class class_4">Kettlebells</a></td>
            <td><a href="classes.php#Bodypump" class="class class_2">Bodypump</a></td>
            <td></td>
            <td></td>
					</tr>           
					<tr>
            <td>6:00pm to 7:15pm</td>
            <td></td>
            <td><a href="classes.php#Pilates" class="class class_5">Pilates</a></td>
            <td></td>
            <td><a href="classes.php#Pilates" class="class class_5">Pilates</a></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>        
          <tr>
            <td>6:30pm to 7:15pm</td>
            <td><a href="classes.php#CXWORX" class="class class_3">CXWORX</a></td>
            <td><a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td><a href="classes.php#Pilates" class="class class_5">Pilates</a></td>
            <td><a href="classes.php#Spinning" class="class class_1">Spinning</a></td>
            <td><a href="classes.php#CXWORX" class="class class_3">CXWORX</a></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>7:15pm to 8.00pm</td>
            <td><a href="classes.php#Pilates" class="class class_5">Pilates</a></td>
            <td><a href="classes.php#Kettlebells" class="class class_4">Kettlebells</a></td>
            <td><a href="classes.php#Bodypump" class="class class_2">Bodypump</a></td>
            <td><a href="classes.php#CXWORX" class="class class_3">CXWORX</a></td>
            <td><a href="classes.php#Bodypump" class="class class_2">Bodypump</a></td>
            <td></td>
            <td></td>
          </tr>
	   </tbody>
			</table>
     <div class="class_form">
        <p>*Classes on Saturday & Sunday are private. Please phone to book.</p>
        <?php //if(isset($_SESSION['booking_failed']) && $_SESSION['booking_failed'] == true){ echo "Booking failed, please try again."; $_SESSION['booking_failed'] = false;} ?>
        <form method="POST" action="book_class.php">
            Class:<br>
            <select name="class"required>
                <option value="spinning">Spinning</option>
                <option value="bodypump">Bodypump</option>
                <option value="cxworx">CXWORX</option>
                <option value="kettlebells">Kettlebells</option>
                <option value="pilates">Pilates</option>
            </select><br>
            Member Number:<br>
            <input type="number" name="memno" maxlength="6" required>
            Day:<br>
            <select name="day" required>
                <option value="monday">Monday </option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
            </select>
            Time:<br>
            <select name="time" required>
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Eveneing</option>
            </select>
            <input name='submit' type='submit'>
            <!-- <input type="button" name="submit" value="submit"> -->
        </form>
    </div>
		</div>
	</content>
	
	<!-- Admin link to admin login -->
	<footer>
		<p><a href="admin.php"> Admin</a></p>
	</footer>
	
	<!-- Javascript for the navbar to change into hamburger menu for mobile -->
	<script type="text/javascript">
	$( document ).ready(function(){
		var d = new Date();
		var dayOfWeek = d.getDay();
		console.log(dayOfWeek);
		if(dayOfWeek>0) $('#day'+dayOfWeek).addClass('today');
	})	
	$("#nav").addClass("js").before('<div id="menu">&#9776;</div>');
	$("#menu").click(function(){
		$("#nav").toggle();
	});
	$(window).resize(function(){
		if(window.innerWidth > 768) {
			$("#nav").removeAttr("style");
		}
	});
	</script>
</body>
</html>