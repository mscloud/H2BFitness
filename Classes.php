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
				<li><a href="Classes.php" style="color: green;">Classes</a></li>
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
			<img src="images/classes.jpg"  style="width:100%; height:100%;">
		</div>
		<!-- Different classes split up using bootstrap, with images -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 item" id="Spinning">
          <div class="row">
            <div class="col-sm-6 col-sm-push-6">
              <img src="images/classes_spin.jpg" class="img-responsive">
            </div>
            <div class="col-sm-6 col-sm-pull-6">
              <h2>Spinning</h2>
              <p>Spinning can be a great way to get in a vigorous workout burning calories and keeping your muscles in shape -- especially during the off-season. But you have to have a high tolerance for exercise bikes and being cooped up inside with a bunch of other sweaty people for this to be a satisfying alternative to the real thing.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12 item" id="Bodypump">
          <div class="row">
            <div class="col-sm-6 col-sm-push-6">
              <img src="images/classes_pump.jpg" class="img-responsive">
            </div>
            <div class="col-sm-6 col-sm-pull-6">
              <h2>Bodypump</h2>
              <p>BodyPump is a weight-based group-fitness program. Scientific research shows that BodyPump improves muscular strength and endurance. It offers calorie and fat burning effects, can assist in improving aerobic fitness and offers positive psychological benefits. BodyPump is also proven to improve bone density. Research shows that lifting weights in a group setting, such as a BodyPump class, is more effective than an independent weight training. The scalability of BodyPump makes it beneficial for the deconditioned.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12 item" id="CXWORX">
          <div class="row">
            <div class="col-sm-6 col-sm-push-6">
              <img src="images/classes_CXWORX.jpg" class="img-responsive">
            </div>
            <div class="col-sm-6 col-sm-pull-6">
              <h2>CXWORX</h2>
              <p>Exercising muscles around the core, CXWORX provides the vital ingredient for a stronger body. A stronger core makes you better at all things you do, from everyday life to your favorite sports - it’s the glue that holds everything together. All the moves in CXWORX have options, so it’s challenging but achievable for your own level of fitness. During the 30-minute workout trained instructors guide you through correct technique as you work with resistance tubes and weight plates, as well as body weight exercises like crunches, and hovers. You will also get into some hip, butt and lower back exercises.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12 item" id="Kettlebells">
          <div class="row">
            <div class="col-sm-6 col-sm-push-6">
              <img src="images/classes_kb.jpg" class="img-responsive">
            </div>
            <div class="col-sm-6 col-sm-pull-6">
              <h2>Kettlebells</h2>
              <p>MKettlebell training is different than other forms of weight training because many parts of the body are exercised simultaneously, and in addition kettlebell training elevates the heart rate for effective cardiovascular training. Kettlebells can be used in ballistic (explosive) swinging movements utilizing the whole body along with momentum or used in more traditional press and squat exercises. The displacement of the weight from the hand requires that the stabilizing muscles engage more with each movement and therefore requiring more muscle firing at once. Kettlebell exercises are whole-body exercises requiring full body integration and core stabilization. There is no such thing as isolated muscle work in kettlebell training.</p>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-12 item" id="Pilates">
          <div class="row">
            <div class="col-sm-6 col-sm-push-6">
              <img src="images/classes_ab.jpg" class="img-responsive">
            </div>
            <div class="col-sm-6 col-sm-pull-6">
              <h2>Pilates</h2>
              <p>Pilates emphasizes breath, core conditioning, and body awareness. Instructors will pay special attention to alignment and form. props such as weighted balls, the pilates ring, and more – may be used to add challenge or assistance throughout the class. whether you’re a beginner or expert practitioner, this mat workout will strengthen the core, tone the hips and thighs, and flatten the abs. after mastering the basic repertoire in beginner mat classes, you can challenge yourself with the quicker-paced intermediate or advanced options.</p>
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