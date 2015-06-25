<?php

	session_start();
	
	//REGISTRATION VALIDATIONS & OPERATIONS
	function validatePwd($pwd){
		
		$pwdPattern = "/^(?=(.*?[0-9]){2,2})(?=.*?[a-zA-Z]).{8,}$/";
		
		if(!preg_match($pwdPattern, $pwd))
			return false;
		else 
			return true;
	}	
		
	function checkDob($dob){
		
		$dobPattern = "/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/";
		
		if(!preg_match($dobPattern, $dob))
			return false;
		else
			return true; 	
	}		

	function validateEmail($email){
		
		$emailPattern = "/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/";
		
		if(!preg_match($emailPattern, $email))
			return false;
		else
			return true;
	}
		
	function checkUserName($uname){
		
		$fp = fopen('DataFiles/users.txt', "r");
		rewind($fp);
		
		while(!feof($fp)){
			$fileLine = fgets($fp);
			$lineArray = explode(";", $fileLine);
			
			if($lineArray[0] == $uname){
				fclose($fp);
				return false;
			}
		}
		return true;
	}
	
	function createUser($userDataString){
		
		//$userDataString = $uname;$pwd;$email;$fname;$lname;$memberType;$memberDuration;$dob;$gender;$address\n";
		
		$fp = fopen('DataFiles/users.txt', "a");
		
		fwrite($fp, $userDataString);
		
		fclose($fp);
		return true;	
	}

	//USER OPERATIONS
	function loginUser($uname, $pwd){
		
		$success = false;
		
		$fp = fopen('DataFiles/users.txt', "r");
		rewind($fp);
		
		while(!feof($fp)){
			$fileLine = fgets($fp);
			$lineArray = explode(";", $fileLine);
			
			if(($lineArray[0] == $uname) && ($lineArray[1] == md5($pwd))){
				$_SESSION['userName'] = $uname;
				$success = true;
				break;
			}	
		}
		fclose($fp);
		
		if($success){
			$_SESSION['validUser'] = true;
			$_SESSION['cart'] = array();
		}
		else{
			$_SESSION['validUser'] = false;
		}
		
		return $success;
	}
	
	function getUserData($uname){

		$userData = array();
		$fp = fopen('DataFiles/users.txt', "r");
		rewind($fp);
		
		while(!feof($fp)){
			$fileLine = fgets($fp);
			$lineArray = explode(";", $fileLine);
			
			if($lineArray[0] == $uname){
				$userData[0] = $lineArray[0]; //uname
				$userData[1] = $lineArray[3]; //fname
				$userData[2] = $lineArray[4]; //lname
				$userData[3] = $lineArray[2]; //email
				$userData[4] = $lineArray[9]; //address
				break;
			}	
		}
		fclose($fp);
		
		return $userData;
	}
	
	function validateUser(){
		
		if ((!isset($_SESSION['validUser'])) || ($_SESSION['validUser'] != true)){
			header('Location: login.php');	
		}
	}
	
	function logoutUser(){
		
		unset($_SESSION['validUser']);
		unset($_SESSION['userName']);
		header('Location: Home.php');
	}

	//PRODUCT DATA - LOADING
	function loadProducts(){
		
		$productsArray = array();
		$i = 0;
		
		$fp = fopen('DataFiles/products.txt', "r");
		rewind($fp);
		
		while(!feof($fp)){
			$fileLine = fgets($fp);
			$productsArray[$i] = $fileLine;
			$i++;
		}
		fclose($fp);
		
		return $productsArray;	
	}
	
	function loadProductById($pId){
		
		$product;
		$fp = fopen('DataFiles/products.txt', "r");
		rewind($fp);
		
		while(!feof($fp)){
			$fileLine = fgets($fp);
			$lineArray = explode(";", $fileLine);
			
			if($lineArray[0] == $pId){
				$product = $lineArray;
				break;
			}	
		}
		fclose($fp);
		
		if($product == "P")
			return;
		
		return $product;
	}
	
	//CART FUNCTIONALITY & QTY PROVIDER
	function getCartTotal(){
		
		$count = 0;
		
		foreach($_SESSION['cart'] as $key=>$cartItem){
			$count += $cartItem['qty'];
		}
		return $count;	
	}
	
	function addToCart($pId){

		if(isset($_SESSION['cart'][$pId])) {
            $_SESSION['cart'][$pId]['qty']++;
            return TRUE;
        } else {
            $_SESSION['cart'][$pId]['qty'] = 1;
            return TRUE;
        }
        return FALSE;
		
	}	
	
	function incrementCartQty($pId){

		$_SESSION['cart'][$pId]['qty']++;
	}
	
	function decrementCartQty($pId){
		
		$_SESSION['cart'][$pId]['qty']--;
		
		if($_SESSION['cart'][$pId]['qty'] == 0)
			unset($_SESSION['cart'][$pId]);
	}
	
	
	
	function submitCart($orderString){

		$cartString = ";".getCartValue().";".getCartTotal().";";
		
		foreach($_SESSION['cart'] as $key=>$cartItem){
			$cartString = $cartString.$key.";".$cartItem['qty'].";";
		}
		
		$fileString = $orderString.$cartString."\n";
		
		$fp = fopen("DataFiles/orders.txt", "a");
		fwrite($fp, $fileString);
		fclose($fp);
		
		$transArray = explode(";", $fileString);
		
		unset($_SESSION['cart']);
		$_SESSION['cart'] = array();
		
		return $transArray;
		
	}
	
	function getCartValue(){

		$cartTotal = 0;
									
		foreach($_SESSION['cart'] as $key=>$cartItem){
			$item = loadProductById($key);
			$cartTotal += ($item[2] * $cartItem['qty']);	
		}
		return $cartTotal;
	}
	
?>