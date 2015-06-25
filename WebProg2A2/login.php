<?php

	require_once ('ServerSideCode/functions.php');
	
	$loginError = $uname = $pwd = "";

	if(isset($_POST['SubmitBtn'])){
		
		$uname = trim($_POST['uname']);
		$pwd = trim($_POST['pwd']);
		
		if(empty($uname) || empty($pwd)){
			$loginError = "Please fill in all fields";
		}
		else{
			if(loginUser($uname, $pwd)){
				header('Location: Store.php');	
			}
			else{
				$loginError = "Invalid login details";	
			}
		}
	}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="Styles/login.css"/>
	<link rel="shortcut icon" href="Images/Global/H.ico" />
	<title>Login</title>
</head>
<body>
	<div id="top-strip">
		<div class="centre"><a href="Home.php">Return to Home</a></div>		
	</div>
	<div id="container">
		<div id="login-box">
			<div id="logon-header"><h3>&nbsp;Login</h3></div>
			<div id="login-message">&nbsp;<b><?php echo $loginError; ?></b></div>
			<div id="form-container">
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
					<table>
						<tr>
							<td><b>&nbsp;Username:</b></td>
							<td><input type="text" name="uname" /></td>
						</tr>
						<tr>
							<td><b>&nbsp;Password:</b></td>
							<td><input type="password" name="pwd" /></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="SubmitBtn" value ="   Login   " /></td>
						</tr>
						<tr>
							<td id="registerlink" colspan="2"><a href="Register.php">Not Registered? Click here to register</a></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>