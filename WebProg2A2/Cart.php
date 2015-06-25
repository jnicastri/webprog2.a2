<?php

	require_once('ServerSideCode/functions.php');
	
	validateUser();
	
	if (isset($_GET['submit']) && $_GET['submit'] == 'incr'){
        $pId = $_GET['id']; 
        incrementCartQty($pId);
        header('Location: Cart.php');
    }
    else if(isset($_GET['submit']) && $_GET['submit'] == 'decr'){
    	$pId = $_GET['id']; 
        decrementCartQty($pId);
        header('Location: Cart.php');	
    }
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="Styles/Global.css"/>
	<link rel="stylesheet" type="text/css" href="Styles/Cart.css"/>
	<link rel="shortcut icon" href="Images/Global/H.ico" />
	<title>Hobbit: The Desolation of Smaug - Cart</title>
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
				&nbsp;Shopping Cart</h2>
				<div class="yellow-divider-medium"></div>
				<div class="padder"></div>
				<div id="cart-summary-display">
					<table>
						<tr>
							<th style="width:64%;">Product Name:</th>
							<th style="width:15%;">Unit Price:</th>
							<th style="width:7%;">Qty</th>
							<th style="width:14%;">Change Qty</th>
						</tr>
						<?php 
							if(getCartTotal() == 0){
								echo "<div>There are currently no items in your cart.<br /></div>";
							}
							else{
								foreach($_SESSION['cart'] as $key=>$cartItem){
	
									$item = loadProductById($key);
									
									echo "<tr><td>&nbsp;".$item[1]."</td>";
									echo "<td>$".$item[2]."</td>";
									echo "<td>".$cartItem['qty']."</td>";
									echo "<td style=\"text-align:center;\"><a href=\"?submit=incr&id=".$key."\"><img src=\"Images/Global/cartPlus.png\"></img></a> <a href=\"?submit=decr&id=".$key."\"><img src=\"Images/Global/cartMinus.png\"></img></a></td>";
									echo "</tr>";
								}
							}?>
							</table>
							<div class="padder"></div><div class="padder"></div>
							<table><tr>
							<td style="width:85%;"><b>Total Cost</b></td>
							<?php 
								echo "<td>$".getCartValue()."</td>";
							?>
							</tr></table>
						<?php //var_dump($_SESSION['cart']);?>
				</div>
				<div class="padder"></div><div class="padder"></div>
				<div id="button-panel" style="margin: 0 auto; width:65%;">
					<div class="nav-button" style="float:left;"><a href="Store.php"><span class="link-expander"></span></a>RETURN TO STORE</div>
					<?php 
						if(getCartTotal() > 0){
							echo "<div class=\"nav-button\" style=\"float:right;\"><a href=\"Checkout.php\"><span class=\"link-expander\"></span></a>PROCEED TO CHECKOUT</div>";	
						}
					?>	
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