<!-- bottom of admin pages that require it -->
		</div>
	</content>
	
	<footer>
		<p><a href="logout.php">Logout</a></p>
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