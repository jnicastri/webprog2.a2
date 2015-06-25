<?php
 	require_once ('ServerSideCode/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="Styles/Global.css"/>
	<link rel="stylesheet" type="text/css" href="Styles/HallOfFame.css"/>
	<link rel="shortcut icon" href="Images/Global/H.ico" />
	<title>Hobbit: The Desolation of Smaug - Hall Of Fame</title>
</head>
<body>
	<div id="top-strip">
		<div class="centre">
			<?php if(isset($_SESSION['validUser']) && $_SESSION['validUser'] == true){
					echo "<a href=\"logout.php\">Logout</a>";
					$cartTotal = getCartTotal();
					echo "<a style=\"float:right;\" href=\"cart.php\">Shopping Cart[".$cartTotal."]</a>";
				  }
				  else{
					echo "<a href=\"login.php\">Login</a>"; 
			  	  }
		    ?>
	    </div>		
	</div>
	<div style="height:25px;width:100%;"></div>
	<div id="container">
		<div id="header">
			<div id="head-logo"></div>
			<div class="yellow-divider"></div>
		</div>
		<div id="nav">
			<h4>Site Menu</h4>
			<div class="yellow-divider-small"></div>
			<ul>
				<li><a href="Home.php">Home</a></li>
				<li><a href="CastCrew.php">Cast &amp; Crew</a></li>
				<li><a href="Gallery.php">Image Gallery</a></li>
				<li><a href="Video.php">Video Gallery</a></li>
				<li><a href="Store.php">Store</a></li>
				<li><a href="Register.php">Register</a></li>
				<li><a href="HallOfFame.php">Hall of Fame</a></li>
			</ul>
			<div class="yellow-divider-small"></div>
			<div id="social-badges">
				<h4>Share:</h4>
				&nbsp;&nbsp;<a href="https://www.facebook.com/TheHobbitMovie"><img src="Images/Global/badge1.png" alt=""></img></a>
				<a href="https://twitter.com/wbpictures"><img src="Images/Global/badge2.png" alt=""></img></a>
				<a href="https://plus.google.com/+TheHobbitMovie/posts"><img src="Images/Global/badge3.png" alt=""></img></a>
				<a href="http://www.youtube.com/thehobbit"><img src="Images/Global/badge4.png" alt=""></img></a>
				<a href="http://thehobbitmovie.tumblr.com/"><img src="Images/Global/badge5.png" alt=""></img></a>
				<a href="http://instagram.com/thehobbitmovie"><img src="Images/Global/badge6.png" alt=""></img></a>
			</div>			
		</div>
		<div id="main-content">
			<div id="centre-content">
				<h2><img class="sword-img" src="Images/Global/mini-sword-variant.png" alt="hobbit-sword"></img>&nbsp;Hall of Fame</h2>
				<div class="yellow-divider-medium"></div>
				<div class="padder"></div>				
				<span id="sl_play" class="sl_command">&nbsp;</span>
				<span id="sl_pause" class="sl_command">&nbsp;</span>
				<span id="sl_i1" class="sl_command sl_i">&nbsp;</span>
				<span id="sl_i2" class="sl_command sl_i">&nbsp;</span>
				<span id="sl_i3" class="sl_command sl_i">&nbsp;</span>
				<span id="sl_i4" class="sl_command sl_i">&nbsp;</span>
				<section id="slideshow">				
					<a class="commands prev commands1" href="#sl_i4" title="Go to last slide">&lt;</a>
					<a class="commands next commands1" href="#sl_i2" title="Go to 2nd slide">&gt;</a>
					<a class="commands prev commands2" href="#sl_i1" title="Go to 1rst slide">&lt;</a>
					<a class="commands next commands2" href="#sl_i3" title="Go to 3rd slide">&gt;</a>
					<a class="commands prev commands3" href="#sl_i2" title="Go to 2nd slide">&lt;</a>
					<a class="commands next commands3" href="#sl_i4" title="Go to 4th slide">&gt;</a>
					<a class="commands prev commands4" href="#sl_i3" title="Go to 3rd slide">&lt;</a>
					<a class="commands next commands4" href="#sl_i1" title="Go to first slide">&gt;</a>
					<a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
					<a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
					<div class="container">
						<div class="c_slider"></div>
						<div class="slider">
							<figure>
								<img src="Images/Content/slider1.jpg" alt="" width="640" height="310" />
								<figcaption>Aragorn</figcaption>
							</figure><!--
							--><figure>
								<img src="Images/Content/slider2.jpg" alt="" width="640" height="310" />
								<figcaption>Lord of the Rings Trilogy</figcaption>
							</figure><!--
							--><figure>
								<img src="Images/Content/slider3.jpg" alt="" width="640" height="310" />
								<figcaption>Legolas</figcaption>
							</figure><!--
							--><figure>
								<img src="Images/Content/slider4.jpg" alt="" width="640" height="310" />
								<figcaption>Gollum</figcaption>
							</figure>
						</div>
					</div>
					<span id="timeline"></span>
					<ul class="dots_commands"><!--
						--><li><a title="Show slide 1" href="#sl_i1">Slide 1</a></li><!--
						--><li><a title="Show slide 2" href="#sl_i2">Slide 2</a></li><!--
						--><li><a title="Show slide 3" href="#sl_i3">Slide 3</a></li><!--
						--><li><a title="Show slide 4" href="#sl_i4">Slide 4</a></li>
					</ul>
				</section>	
			</div>
		</div>		
		<div class="clear"></div>
		<div id="footer">
			<div class="yellow-divider"></div>
			<div><img src="Images/Global/real3D.png" alt="available_in_3D"></img></div>	
			<p><a href="#">SITE MAP</a> | <a href="#">PRIVACY</a></p>
		</div>
	</div>
</body>
</html>