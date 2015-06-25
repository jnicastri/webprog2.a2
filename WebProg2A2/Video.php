<?php
	require_once ('ServerSideCode/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="Styles/Global.css"/>
	<link rel="shortcut icon" href="Images/Global/H.ico" />
	<script type="text/javascript" src="html5gallery/html5gallery.js"></script>
	<title>Hobbit: The Desolation of Smaug - Video Gallery</title>
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
				<h2><img class="sword-img" src="Images/Global/mini-sword-variant.png" alt="hobbit-sword"></img>&nbsp;Video Gallery</h2>
				<div class="yellow-divider-medium"></div>
				<div class="padder"></div>
				<div style="display:none;" class="html5gallery" data-skin="showcase" data-width="790" data-height="450">
			       <a href="http://www.youtube.com/embed/fnaojlfdUbs?rel=0"><img src="http://img.youtube.com/vi/fnaojlfdUbs/2.jpg" alt="Desolation of Smaug: Official Teaser"></a>
			       <a href="http://www.youtube.com/embed/IprWEvYxg8A?rel=0"><img src="http://img.youtube.com/vi/IprWEvYxg8A/2.jpg" alt="Martin Freeman and Benedict Cumberbatch Interview"></a>
			       <a href="http://www.youtube.com/embed/T90Holdcrps?rel=0"><img src="http://img.youtube.com/vi/T90Holdcrps/2.jpg" alt="Hobbit: An Unexpected Journey Trailer 1"></a>
			       <a href="http://www.youtube.com/embed/SDnYMbYB-nU?rel=0"><img src="http://img.youtube.com/vi/SDnYMbYB-nU/2.jpg" alt="Hobbit: An Unexpected Journey Trailer 2"></a>
			       <a href="http://www.youtube.com/embed/xml_ACaaYMw?rel=0"><img src="http://img.youtube.com/vi/xml_ACaaYMw/2.jpg" alt="The Hobbit: The Desolation Of Smaug - Production Vlog #12"></a>
			    </div>
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