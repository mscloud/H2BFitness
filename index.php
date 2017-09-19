<?php
	$page = 1;
	require('connect.php');
?>
<!doctype html>
<html lang="en" 
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="images/icon7.0.ico"/>
	<title>Hip 2 B Fit</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<a class="navbar-brand" href="index.php"><img src="images/logo.png" height="50" style="margin-left:25px" title="Home" alt="Logo"></a>
		<nav id="nav">
			<ul>
				<li><a href="Memberships.php">Memberships</a>
				<li><a href="Classes.php">Classes</a></li>
				<li><a href="timetable.php">Timetable</a></li>
				<li><a href="Trainers.php">Trainers</a></li>
				<li><a href="ContactUs.php">Contact Us</a></li>
			</ul>
		</nav> 
	</header>

	<content>
		<div class="image">
			<img src="images/Home.jpg"  style="width:100%; height:100%;">
		</div>
		<div class="text"> <br><br>
<?php

		//	 $dir = "../images/";
		//		 foreach(glob($dir) as $file)  
		//		 {  
		//		 echo $file;  
		//	 }
			/*$files = glob("images/*.*");
			for ($i=0; $i<count($files); $i++) {
			    $image = $files[$i];
			    print $image ."<br />";
			    echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
			}
		*/
			$query = "SELECT content FROM content WHERE page = $page";
			$result = mysqli_query($db_connection, $query);
			$content = mysqli_fetch_array($result);
			echo "<p>" .  $content['content'] . "</p><br>";	
	?>
			<div class="feedback">
				<H4>Check out some testimonials!</H4>
				<?php require('feedback.php'); ?>
			</div>
			<div class="twitter">
				<a class="twitter-timeline" href="https://twitter.com/H2BFitness" data-widget-id="717047137956179968">Tweets by @H2BFitness</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
	</content>
	
	<footer>
		<p><a href="admin.php"> Admin</a></p>
	</footer>
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