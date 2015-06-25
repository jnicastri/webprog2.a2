<?php
	require_once('ServerSideCode/functions.php');
	
	validateUser();
	
	$uname = trim($_SESSION['userName']);
	
	if (isset($_GET['submit']) && $_GET['submit'] == 'add'){
        $pId = $_GET['id']; 
        addToCart($pId);
        header('Location: Store.php');
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="Styles/Global.css"/>
	<link rel="stylesheet" type="text/css" href="Styles/Store.css"/>
	<link rel="shortcut icon" href="Images/Global/H.ico" />
	<title>Hobbit: The Desolation of Smaug - Online Store</title>
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
				<h2><img class="sword-img" src="Images/Global/mini-sword-variant.png" alt="hobbit-sword"></img>
				&nbsp;Hi <?php echo $uname;?>, Welcome to the Hobbit Online Store</h2>
				<div class="yellow-divider-medium"></div>
				<div id="product-display">
					<ul>
						<?php 
							$productsArray = loadProducts();
							for($i = 0; $i < count($productsArray); $i++){
								echo "<li>";
								$line = explode(";", $productsArray[$i]);
								echo "<a href\"#\"><img src=\"Images/Content/".$line[0].".jpg\" alt=\"\"></img></a>";
								echo "<div class=\"product-title\">".$line[1]."</div>";
								echo "<div class=\"product-price\">Price: $".$line[2]."</div>";
								echo "<div class=\"product-format\">".$line[3]."</div>";
								echo "<div class=\"product-descr\">".$line[4]."</div>";
								echo "<div class=\"basket-controls\"><a href=\"?submit=add&id=".$line[0]."\">Add to Cart</a></div>";
								echo "</li>";
							}
						?>
					</ul>
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