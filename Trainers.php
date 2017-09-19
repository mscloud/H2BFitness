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
				<li><a href="Trainers.php" style="color: green;">Trainers</a></li>
				<li><a href="ContactUs.php">Contact Us</a></li>
			</ul>
		</nav> 
	</header>
	
	<!-- Content holds the main body of information of each page  -->
	<content>
	<!-- The main image of each page -->
		<div class="image">
			<img src="images/trainers.jpg"  style="width:100%; height:100%;">
		</div>
		<!-- Like classes page, different trainer profiles with their profiles-->
		<div class="container" >
			<div class="row" style="margin-left:3em;">
				<div class="col-lg-12 item">
					<div class="row">
						<div class="col-sm-6 col-sm-push-6">
							<img src="images/t4.jpg" style="padding-left:50px" class="img-responsive">
						</div>
						<div class="col-sm-6 col-sm-pull-6">
							<h2>Sue</h2>
							<p>Sue is a long term fitness expert and has studied to a high degree in health nutrition and body fitness. Sue has a passion for working out and currently specialises as our pilates coach. Sue is always happy to help.</p><blockquote>“Fitness is for everyone, whether you’re at a desk all day or competing in the Iron Man. We are all different, but we can all get a little healthier!”</blockquote>
						</div>
					</div>
				</div>
				<div class="col-lg-12 item" >
					<div class="row">
						<div class="col-sm-6 col-sm-push-6">
							<img src="images/t1.jpg" style="padding-left:50px" class="img-responsive">
						</div>
						<div class="col-sm-6 col-sm-pull-6">
							<h2>Daniel</h2>
							<p>Daniel initally studied to be a physiotherapist but changed directions to be a personal coach as he enjoys interacting with people on a more personal level. Daniel is currently studying further into health nutrition and is currently our head CXWORX and Kettlebells coach.</p></p><blockquote>“Consistency is key. Move and breathe every day to restore to your natural, positive, motivated state.”</blockquote>
						</div>
					</div>
				</div>
				<div class="col-lg-12 item">
					<div class="row">
						<div class="col-sm-6 col-sm-push-6">
							<img src="images/t2.jpg" style="padding-left:50px" class="img-responsive">
						</div>
						<div class="col-sm-6 col-sm-pull-6">
							<h2>Laura</h2>
							<p>Laura always enjoyed a challenge is a avid hillwalker and mountain climber, when she is not bust conquering Mount Everest she is here at Hip 2 B Fit helping other fulfil their goals whatever they might be. Laura is our spinning coach</p><blockquote>“Rebuild, Reclaim, Renew. A strong body and healthy lifestyle is within everyone’s reach. Confidence to take on the challenges of your life soars when you feel good and look good.”</blockquote>
						</div>
					</div>
				</div>
				<div class="col-lg-12 item">
					<div class="row">
						<div class="col-sm-6 col-sm-push-6">
							<img src="images/t3.jpg" style="padding-left:50px" class="img-responsive">
						</div>
						<div class="col-sm-6 col-sm-pull-6">
							<h2>Neil</h2>
							<p>Neil is the newest member to our team but has made a huge impact. Customers love his friendliness and his knowledge is a wide range of fields, our very own health guru!</p><blockquote>“Exercise can be fun, enjoyable and blended into your daily routine as if it was the most natural thing in the world. Find the activities that you most enjoy so you can look forward to exercise. Keep at it and keep moving!”</blockquote>
							</ul>
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