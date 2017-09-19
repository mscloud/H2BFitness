<?php 
	$page=3; 
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
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
				<li><a href="timetable.php">Timetable</a></li>
				<li><a href="Trainers.php">Trainers</a></li>
				<li><a href="ContactUs.php" style="color: green;">Contact Us</a></li>
			</ul>
		</nav> 
	</header>

	<!-- Content holds the main body of information of each page  -->
	<content>
		<!-- The main image on this page is actually a google map taken from the google api and modified to meet our website -->
		<div class="image">
			<style>
				#map {
        width: 100%;
        height: 50em;
      }
			</style>
			<div id="map"></div>
			<script>
				function initMap() {
					var mapDiv = document.getElementById('map');
					var map = new google.maps.Map(mapDiv, {
						center: {lat: 53.331041, lng: -6.278549},
						zoom: 15
					});
					map.setOptions({
						draggable: false,
						zoomControl: false, 
						scrollwheel: false,
						disableDoubleClickZoom: true}
					)
					google.maps.event.addDomListener(map, 'idle', function() {
						calculateCenter();
					});
					google.maps.event.addDomListener(window, 'resize', function() {
						map.setCenter(center);
					});
					var marker = new google.maps.Marker({
					position: {lat: 53.331041, lng: -6.278549},
					map: map,
					});
				infowindow.open(map,marker);
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
		</div>	
		<div class="text">
<?php
			$query = "SELECT content FROM content WHERE page = $page";
			$result = mysqli_query($db_connection, $query);
			$content = mysqli_fetch_array($result);
			echo "<p>" .  $content['content'] . "</p><br>";	
?>
		</div>

		<!-- Three boxes that contain the contact info -->
		<div class="container">
			<div class="col-sm-4">
				<div class= "box">
					<div class="box-head">
						<h2 style="color:black;">Contact</h2>
						<br/>
						<br/>
						<b>Phone:</b> (01) 4565789<br/>
						<b>Email:</b> Info@hip2b.ie<br/>
						<br/>
						Hip 2 be Fit<br/>
						South Circular Road<br/>
						Dublin 8<br/>                       
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class= "box">
					<div class="box-head">
						<h2 style="color:black;">Opening Hours</h2>
						<br/>
						<br/>
						<b>Mon - Fri:</b> 06:00 to 21:00</br>
						<b>Sat - Sun:</b> 09:00 to 20:00</br>
						<b>Bank Holidays:</b> 09:00 to 20:00</br>                      
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class= "box">
					<div class="box-head" >
						<h2 style="color:black;">Feedback?</h2>
						<div style="padding-left:24%;">
							<br/>
							<br/>
							<form method="post" action="feedback_script.php">
								<input type="text" name="name"  placeholder="Name:" maxlength="20" required><br>
								<input type="number" name="memno"  placeholder="Member Number:" pattern="[0-9]" maxlength="6"required><br>
								<input type="text" name="email"  placeholder="Email:" maxlength="30" required><br>
								<textarea name="feedback" placeholder="Feedback:"  required></textarea>
								<input type="submit" name="submit" value="Submit"> <br>
							</form>
						</div>
					</div>
				</div>
			</div>
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