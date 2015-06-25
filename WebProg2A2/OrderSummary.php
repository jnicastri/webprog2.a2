<?php

	require_once('ServerSideCode/functions.php');
	
	validateUser();

	$fname = $lname = $email = $ccNo = $ccExp = $address = $city = $state = $country = $ccNumber2 = "";
	
	$order = $_SESSION['completedOrder'];
	
	$fname = $order[1];
	$lname = $order[2];
	$email = $order[3];
	$ccNo = $order[4];
	$ccNumber2 = str_repeat('#', (strlen($ccNo) - 4)) . substr($ccNo,-4,4);	
	$ccExp = $order[5];
	$address = $order[6];
	$city = $order[7];
	$state = $order[8];
	$country = $order[9];
	
	$orderLength = count($order);
	$orderItemsList = array();
	
	for($i = 12; $i < ($orderLength - 1); $i++){
		array_push($orderItemsList, $order[$i]);	
	}
	
	
	if (isset($_GET['logout_request']) && $_GET['logout_request'] == 'true'){
		unset($_SESSION['completedOrder']);
		logoutUser();	
	}
	
	//var_dump($ccNumber2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="Styles/Global.css"/>
	<link rel="stylesheet" type="text/css" href="Styles/OrderSummary.css"/>
	<link rel="shortcut icon" href="Images/Global/H.ico" />
	<title>Hobbit: The Desolation of Smaug - Completed Order Summary</title>
</head>
<body>
	<div id="top-strip">
		<div class="centre">
			<?php if(isset($_SESSION['validUser']) && $_SESSION['validUser'] == true){
					echo "<a href=\"logout.php\">Logout</a>";
					$cartTotal = getCartTotal();
					echo "<a style=\"float:right;\" href=\"Cart.php\">Shopping Cart[".$cartTotal."]</a>";
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
				&nbsp;Submitted Order Summary</h2>
				<div class="yellow-divider-medium"></div>
				<div class="padder"></div>
				<div class="summary-wrapper">
				<div>Your order has been submitted sucessfully. Please see below for an order summary.</div>
					<div id="order-item-detail">
						<table>
							<tr>
								<th style="width:70%;">Product:</th>
								<th style="width:15%;">Qty:</th>
								<th style="width:15%;">Unit Price:</th>
							</tr>
							<?php 
							
								for($i = 0; $i < count($orderItemsList); $i += 2){
									$productLine = loadProductById($orderItemsList[$i]);
									
									echo "<tr><td>".$productLine[1]."</td>";
									echo "<td>".$orderItemsList[$i + 1]."</td>";
									echo "<td>$".$productLine[2]."</td></tr>";
								}
							?>
						</table>
						<div class="padder"></div><div class="padder"></div>
						<table>
							<tr>
								<td style="width:85%;"><b>Total Cost</b></td>
								<?php 
									echo "<td>$".$order[10]."</td>";
								?>
							</tr>
						</table>
					</div>
					<div class="padder"></div>
					<div class="padder"></div>
					<div id="customer-details">
							<table>
								<tr>
									<td style="width:40%;">First Name:</td>
									<td style="width:60%;"><?php echo $fname; ?></td>
								</tr>
								<tr>
									<td>Last Name:</td>
									<td><?php echo $lname; ?></td>
								</tr>
								<tr>
									<td>Email:</td>
									<td><?php echo $email; ?></td>
								</tr>
								<tr>
									<td>Credit Card number:</td>
									<td><?php echo $ccNumber2; ?></td>
								</tr>
								<tr>
									<td>Credit Card Expiry:</td>
									<td><?php echo $ccExp; ?></td>
								</tr>
								<tr>
									<td>Address:</td>
									<td><?php echo $address; ?></td>
								</tr>
								<tr>
									<td>City:</td>
									<td><?php echo $city; ?></td>
								</tr>
								<tr>
									<td>State</td>
									<td><?php echo $state; ?></td>
								</tr>
								<tr>
									<td>Country</td>
									<td><?php echo $country; ?></td>
								</tr>
							</table>					
					</div>
					<div class="padder"></div>
					<div class="padder"></div>
					<div id="button-panel" style="margin: 0 auto; width:65%;">
						<div class="nav-button" style="float:left;"><a href="Store.php"><span class="link-expander"></span></a>RETURN TO STORE</div>
						<div class="nav-button" style="float:right;"><a href="?logout_request=true"><span class="link-expander"></span></a>LOGOUT</div>
				</div>
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