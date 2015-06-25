<?php
	require_once('ServerSideCode/functions.php');
	
	validateUser();
	
	$uname = trim($_SESSION['userName']);
	$fname = $lname = $email = $address = "";
	$ccNo = $ccExp = $city = $state = $country = $ccexpmonth = $ccexpyear = "";
	$userData = getUserData($uname);
	
	if(!empty($userData)){
		$fname = $userData[1];
		$lname = $userData[2];
		$email = $userData[3];
		
		if(!empty($userData[4])){
			$address = $userData[4];
		}
	}
	
	if(isset($_POST['submit'])){
		
		$fname = trim($_POST['fnametb']);
		$lname = trim($_POST['lnametb']);
		$email = trim($_POST['emailtb']);
		$ccNo = trim($_POST['cctb']);
		$ccexpmonth = $_POST['ccexpmonth'];
		$ccexpyear = $_POST['ccexpyear'];
		$ccExp = $ccexpmonth."/".$ccexpyear."";
		$address = trim($_POST['addresstb']);
		$city = trim($_POST['citytb']);
		$state = trim($_POST['statetb']);
		$country = trim($_POST['countrytb']);
		
		$orderString = $uname.";".$fname.";".$lname.";".$email.";".$ccNo.";".$ccExp.";".$address.";".$city.";".$state.";".$country;
		
		$order = submitCart($orderString);
		
		$_SESSION['completedOrder'] = $order;
		
		header('Location: OrderSummary.php');
		 
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="Styles/Global.css"/>
	<link rel="stylesheet" type="text/css" href="Styles/Checkout.css"/>
	<link rel="shortcut icon" href="Images/Global/H.ico" />
	<title>Hobbit: The Desolation of Smaug - Online Store</title>
						<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://jquery.bassistance.de/validate/jquery.validate.js"></script>
	<script src="http://jquery.bassistance.de/validate/additional-methods.js"></script>
	<script>
		jQuery.validator.setDefaults({
		  debug: false,
		  success: "valid"
		});

		$(document).ready(function(){
			$( "#checkout-form" ).validate({
			  rules: {
				fnametb: "required",
				lnametb: "required",
				emailtb: "required",
				cctb: {
			      required: true,
			      minlength: 13,
			      maxlength: 16,
			      creditcard: true
			    },
				ccexpmonth: {
					selectcheck: true	
			    },
				ccexpmonth: {
			    	selectcheck: true		
			    },
				addresstb: "required",
				citytb: "required",
				statetb: "required",
				countrytb: "required"
			},
			  messages: {
				fnametb: "Required field",
				lnametb: "Required field",
				emailtb: "Required field",
				cctb: "Invalid Card No.",
				ccexptb: "Required field",
				addresstb: "Required field",
				citytb: "Required field",
				statetb: "Required field",
				countrytb: "Required field"
			    } 
			});

			jQuery.validator.addMethod('selectcheck', function (value) {
		        return (value != '0');
		    }, "Select expiry date");
		});
</script>
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
				&nbsp;Checkout</h2>
				<div class="yellow-divider-medium"></div>
				<div class="padder"></div>
				<div class="checkout-wrapper">
					<div id="order-header">
						<table>
							<tr>
								<th style="width:40%;">Total Units:</th>
								<th style="width:60%;">Total Order Value:</th>
							</tr>
							<?php 
								echo "<tr><td>".getCartTotal()." Items</td>";
								echo "<td>$".getCartValue()."</td></tr>";
							?>
						</table>
					</div>
					<div class="padder"></div>
					<div id="checkout-details">
						<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="checkout-form">
							<table>
								<tr>
									<td style="width:30%;">First Name:</td>
									<td style="width:35%;"><input class="left" type="text" id="fnametb" name="fnametb" value="<?php echo $fname; ?>"></input></td>
									<td><label for="fnametb" class="error"></label></td>
								</tr>
								<tr>
									<td>Last Name:</td>
									<td><input type="text" id="lnametb" name="lnametb" value="<?php echo $lname; ?>"></input></td>
									<td><label for="lnametb" class="error"></label></td>
								</tr>
								<tr>
									<td>Email:</td>
									<td><input type="text" id="emailtb" name="emailtb" value="<?php echo $email; ?>"></input></td>
									<td><label for="emailtb" class="error"></label></td>
								</tr>
								<tr>
									<td>Credit Card No.</td>
									<td><input type="text" id="cctb" name="cctb"></input></td>
									<td><label for="cctb" class="error"></label></td>
								</tr>
								<tr>
									<td>Credit Card Exp</td>
									<td>
										<select name="ccexpmonth">
											<option value="0" selected="selected">Month</option>
											<option value="1">01</option>
											<option value="2">02</option>
											<option value="3">03</option>
											<option value="4">04</option>
											<option value="5">05</option>
											<option value="6">06</option>
											<option value="7">07</option>
											<option value="8">08</option>
											<option value="9">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>	
										</select>
										<select name="ccexpyear">
											<option value="0" selected="selected">Year</option>
											<?php 
												$currentYear = date("y");
												for($i = 0; $i < 10; $i++){
													echo "<option value=\"".($currentYear + $i)."\">".($currentYear + $i)."</option>";	
												}
											?>
										</select>
									</td>
									<td><label for="ccexpmonth ccexpyear" class="error"></label></td>
								</tr>
								<tr>
									<td>Address:</td>
									<td><input type="text" id="addresstb" name="addresstb" value="<?php echo $address; ?>"></input></td>
									<td><label for="addresstb" class="error"></label></td>
								</tr>
								<tr>
									<td>City:</td>
									<td><input type="text" id="citytb" name="citytb"></input></td>
									<td><label for="citytb" class="error"></label></td>
								</tr>
								<tr>
									<td>State:</td>
									<td><input type="text" id="statetb" name="statetb"></input></td>
									<td><label for="statetb" class="error"></label></td>
								</tr>
								<tr>
									<td>Country:</td>
									<td><input type="text" id="countrytb" name="countrytb"></input></td>
									<td><label for="countrytb" class="error"></label></td>
								</tr>
								<tr>
									<td colspan="3" style="text-align:center;"><input type="submit" name="submit" value="  submit order  "></input></td>
								</tr>
							</table>
						</form>					
					</div>

					<div id="button-panel" style="margin: 0 auto; width:65%;">
						<div class="nav-button"><a href="Store.php"><span class="link-expander"></span></a>RETURN TO STORE</div>
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