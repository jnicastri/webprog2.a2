<?php
	
	require_once('ServerSideCode/functions.php');

	$fnameError = $lnameError = $unameError = $pwdError = $emailError = ""; 
	$dobError = $memberTypeError = $memberTermError = $statusMsg = "";
	
	$fname = $lname  = $uname = $pwd = $dob = $email = $address = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//TODO: Strip all inputs of any ";" chars using str_replace('toReplace', 'replaceWith', $string)
		
		$fname = trim($_POST['fnametb']);
		$lname = trim($_POST['lnametb']);
		$uname = trim($_POST['unametb']);
		$pwd = trim($_POST['pwdtb']);
		$dob = trim($_POST['dobtb']);
		$gender = $_POST['gender'];
		$email = trim($_POST['emailtb']);
		$address = trim($_POST['addressta']);
		$memberType = $_POST['membershiptypeddl'];
		$memberDuration = $_POST['membershiptermddl'];
		
		if($fname == ""){
			$fnameError = "This is a required field";	
		}
		else if($lname == ""){
			$lnameError = "This is a required field";
		}
		else if($uname == ""){
			$unameError = "This is a required field";
		}
		else if(($pwd == "") || (validatePwd($pwd) == false)){
			$pwdError = "Invalid password: Must be at least 8 characters containing at least two numbers";
		}
		else if(($dob != "") && (checkDob($dob) == false)){
			$dobError = "Date is not in specified format";
		}
		else if(($email == "") || (validateEmail($email) == false)){
			$emailError = "Empty or invalid email entered";
		}		
		else if($memberType == 0){
			$memberTypeError = "Please select a type";
		}
		else if($memberDuration == 0){
			$memberTermError = "Please select a duration";
		}
		else{
			
			$filepwd = md5($pwd);
			$userDataString = $uname.";".$filepwd.";".$email.";".$fname.";".$lname.";".$memberType.";".$memberDuration.";".$dob.";".$gender.";".$address."\n";
			
			if(!checkUserName($uname)){
				$statusMsg = "Registration Failed: User name already registered";	
			}
			else if(createUser($userDataString)){	
				$fname = $lname  = $uname = $pwd = $dob = $email = $address = $gender = "";
				$statusMsg = "Registration Successful: Click <a href=\"login.php\">here</a> to log in.";	
			}
			else{
				$statusMsg = "Registration Failed. An error has occured. Please try again later";
			}	
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="Styles/Global.css"/>
	<link rel="stylesheet" type="text/css" href="Styles/Register.css"/>
	<link rel="shortcut icon" href="Images/Global/H.ico" />
	<title>Hobbit: The Desolation of Smaug - User Registration</title>
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
				<h2><img class="sword-img" src="Images/Global/mini-sword-variant.png" alt="hobbit-sword"></img>&nbsp;User Registration</h2>
				<div class="yellow-divider-medium"></div>
				<p class="main-content-p">To register as a user for this site please fill in the form below</p>
				<div id="form-container">
					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<table>
							<tr>
								<td class="statusLine" colspan="3"><?php echo $statusMsg; ?></td>
							</tr>
							<tr>
								<td class="label">First Name:*</td>
								<td><input type="text" id="first-name-tb" name="fnametb" value="<?php echo $fname;?>" /></td>
								<td id="fname-error-ph"><?php echo $fnameError; ?></td>
							</tr>
							<tr>
								<td class="label">Last Name:*</td>
								<td><input type="text" id="last-name-tb" name="lnametb" value="<?php echo $lname;?>" /></td>
								<td id="lname-error-ph"><?php echo $lnameError; ?></td>
							</tr>
							<tr>
								<td class="label">User Name:*</td>
								<td><input type="text" id="uname-tb" name="unametb" value="<?php echo $uname;?>" /></td>
								<td id="uname-error-ph"><?php echo $unameError; ?></td>
							</tr>
							<tr>
								<td class="label">Password:*</td>
								<td><input type="password" id="pwd-tb" name="pwdtb" value="<?php echo $pwd;?>" /></td>
								<td id="pwd-error-ph"><?php echo $pwdError; ?></td>
							</tr>
							<tr>
								<td class="label">Date of birth: (DD/MM/YYYY)</td>
								<td><input type="text" id="dob" name="dobtb" value="<?php echo $dob;?>" /></td>
								<td id="dob-error-ph"><?php echo $dobError; ?></td>
							</tr>
							<tr>
								<td class="label">Gender:</td>
								<td><input type="radio" name="gender" <?php if(isset($gender) && $gender=="male") echo "checked";?> value="male" />Male&nbsp;&nbsp;
								<input type="radio" name="gender" <?php if(isset($gender) && $gender=="female") echo "checked";?> value="female"/>Female</td>
								<td id="gender-error-ph"></td>
							</tr>
							<tr>
								<td class="label">Email Address:*</td>
								<td><input type="text" id="email-tb" name="emailtb" value="<?php echo $email;?>" /></td>
								<td id="email-error-ph"><?php echo $emailError; ?></td>
							</tr>
							<tr>
								<td class="label">Address:</td>
								<td><textarea id="address-ta" rows="2" cols="16" name="addressta"><?php echo $address; ?></textarea></td>
								<td></td>
							</tr>
							<tr>
								<td class="label">Membership Type:*</td>
								<td>
									<select id="membership-types-ddl" name="membershiptypeddl">
										<option value="0" selected="selected">Please select an option</option>
										<option value="1">Regular</option>
										<option value="2">Premium</option>
										<option value="3">VIP</option>
									</select>
								</td>
								<td id="member-type-error-ph"><?php echo $memberTypeError; ?></td>
							</tr>
							<tr>
								<td class="label">Membership Duration:*</td>
								<td>
									<select id="membership-term-ddl" name="membershiptermddl">
										<option value="0" selected="selected">Please select an option</option>
										<option value="1">1 Year</option>
										<option value="2">5 Years</option>
										<option value="3">10 Years</option>
										<option value="4">Lifetime</option>
									</select>
								</td>
								<td id="member-term-error-ph"><?php echo $memberTermError; ?></td>
							</tr>
						</table>
						<p id="form-controls"><input type="submit" value=" Submit " name="submitBtn"/></p>
					</form>
				</div>
				<p class="main-content-p">* Denotes a required field</p>
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
