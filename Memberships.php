<?php
	$page = 2;
	require('connect.php');
	mysqli_select_db($db_connection, 'content');
?>
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
				<li><a href="Memberships.php" style="color: green;">Memberships</a>
				<li><a href="Classes.php">Classes</a></li>
				<li><a href="timetable.php">Timetable</a></li>
				<li><a href="Trainers.php">Trainers</a></li>
				<li><a href="ContactUs.php">Contact Us</a></li>
			</ul>
		</nav> 
	</header>
	
	<!-- Content holds the main body of information of each page  -->
	<content>
		<!-- The main image of each page -->
		<div class="image">
			<img src="images/Memberships.jpg"  style="width:100%; height:100%;">
		</div>
		<!-- text field -->
		<div class="text">
<?php
		$query = "SELECT content FROM content WHERE page = $page";
		$result = mysqli_query($db_connection, $query);
		$content = mysqli_fetch_array($result);
		echo "<p>" .  $content['content'] . "</p><br>";	
?>
		</div>
		<!-- Membership options divided into three colums using bootstrap and css -->
		<div class="container">
		<div class="col-sm-4">
			<div class= "box">
				<div class="box-head">
					<h2>MONTHLY</h2>
					<h3>€50 Monthly</h3>
					<ul>
					<br/>
						<li>No contract</li>
						<li>Personalised bimonthly program</li>
						<li>Pool and spa access</li>
						<li>Other shit</li>
					</ul>                        
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class= "box">
				<div class="box-head">
					<h2>YEARLY</h2>
					<h3>€480 Annually</h3>
					<ul>
					<br/>
						<li>SAVE €120</li>
						<li>Personalised bimonthly program</li>
						<li>Pool and spa access</li>
						<li>Other shit</li>
					</ul>                        
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class= "box">
				<div class="box-head" >
					<h2>DISCOUNT</h2>
					<h3>€400 Annually</h3>
					<ul>
					<br/>
						<li>Students and over 60s</li>
						<li>No contract</li>
						<li>Personalised bimonthly program</li>
						<li>Pool and spa access</li>
						<li>Other shit</li>
						<br/>
					</ul>                        
				</div>
			</div>
		</div>
		<!-- Second field -->
		<div class="text">
			<h4>Still have questions?</h4>
			<h5>Leave your name and number for a FREE callback!</h5>
			<form method="POST" action="callback_script.php">
				Name: <br>
				<input type="text" name="name"  placeholder="Name:" maxlength="35" required><br>
				Phone Number: <br>
				<input type="number" name="phone"  placeholder="Phone Number:" pattern="[0-9]" maxlength="11" required><br>
				<input type="submit" name="submit" value="Submit"> <br>
		</div>
	</content>
	
	<!-- Admin link to admin login -->
	<footer>
		<p><a href="admin.php"> Admin</a></p>
	</footer>
	
	<!-- Javascript for the navbar to change into hamburger menu for mobile -->
	<script type="text/javascript">
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