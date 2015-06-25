function resetForm(){
	document.getElementById('fname-error-ph').innerHTML = "";
	document.getElementById('lname-error-ph').innerHTML = "";
	document.getElementById('uname-error-ph').innerHTML = "";
	document.getElementById('pwd-error-ph').innerHTML = "";
	document.getElementById('dob-error-ph').innerHTML = "";
	document.getElementById('gender-error-ph').innerHTML = "";
	document.getElementById('email-error-ph').innerHTML = "";
	document.getElementById('member-type-error-ph').innerHTML = "";
	document.getElementById('member-term-error-ph').innerHTML = "";
}

function validateForm(){

	var fname = document.getElementById('first-name-tb').value;
	var lname = document.getElementById('last-name-tb').value;
	var uname = document.getElementById('uname-tb').value;
	var pwd = document.getElementById('pwd-tb').value;
	var dob = document.getElementById('dob').value;
	var gender = checkRadio();
	var email = document.getElementById('email-tb').value;
	var address = document.getElementById('address-ta').value;
	
	var memberTypeDdl = document.getElementById('membership-types-ddl');
	var memberTypeIndex = memberTypeDdl.options[memberTypeDdl.selectedIndex].value;
	
	var memberTermDdl = document.getElementById('membership-term-ddl');
	var memberTermIndex = memberTermDdl.options[memberTermDdl.selectedIndex].value;
	
	resetForm();
	
	if(fname == ""){
		document.getElementById('fname-error-ph').innerHTML = "This is a compulsory field";
		document.getElementById('first-name-tb').select();
		document.getElementById('first-name-tb').focus();
		return false;
	}
	else if(lname == ""){
		document.getElementById('lname-error-ph').innerHTML = "This is a compulsory field";
		document.getElementById('last-name-tb').select();
		document.getElementById('last-name-tb').focus();
		return false;
	}
	else if(uname == ""){
		document.getElementById('uname-error-ph').innerHTML = "This is a compulsory field";
		document.getElementById('uname-tb').select();
		document.getElementById('uname-tb').focus();
		return false;
	}
	else if(pwd == ""){
		document.getElementById('pwd-error-ph').innerHTML = "This is a compulsory field";
		document.getElementById('pwd-tb').select();
		document.getElementById('pwd-tb').focus();
		return false;
	}
	else if(email == ""){
		document.getElementById('email-error-ph').innerHTML = "This is a compulsory field";
		document.getElementById('email-tb').select();
		document.getElementById('email-tb').focus();
		return false;
	}
	else if(memberTypeIndex == 0){
		document.getElementById('member-type-error-ph').innerHTML = "Please choose a member type";
		return false;
	}
	else if(memberTermIndex == 0){
		document.getElementById('member-term-error-ph').innerHTML = "Please choose a membership duration";
		return false;
	}
	
	if(dob != ""){
		if(checkDob(dob) == false){
			document.getElementById('dob-error-ph').innerHTML = "DOB is not in the specified format";
			document.getElementById('dob').select();
			document.getElementById('dob').focus();
			return false;
		}
	}
	
	if(validateEmail(email) == false){
		document.getElementById('email-error-ph').innerHTML = "The entered email is invalid";
		document.getElementById('email-tb').select();
		document.getElementById('email-tb').focus();
		return false;
	}
	
	if(checkPwd(pwd) == false){
		document.getElementById('pwd-error-ph').innerHTML = "Password doesn't meet minimum requirements: Must be minimum 8 characters & contain 2 numbers";
		document.getElementById('pwd-tb').select();
		document.getElementById('pwd-tb').focus();
		return false;
	}
	
	return true;	
}

function checkRadio(){
	
	var selections = document.getElementsByName('gender');
	var selected = "";
	
	for(var i = 0; i < selections.length; i++){
		if(selections[i].checked == true){
			selected = selections[i].value;	
		}
	}
	return selected;
}

function validateEmail(email){

	var pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
	return pattern.test(email);
}

function checkPwd(pwd){
	
	var pattern = /^(?=(.*?[0-9]){2,2})(?=.*?[a-zA-Z]).{8,}$/;
	return pattern.test(pwd);
}

function checkDob(dob){

	var pattern = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
	return pattern.test(dob);
}

function clearForm(){

	document.getElementById('first-name-tb').value = "";
	document.getElementById('last-name-tb').value = "";
	document.getElementById('uname-tb').value = "";
	document.getElementById('pwd-tb').value = "";
	document.getElementById('dob').value = "";
	
	var radio = document.getElementsByName('gender');
	
	for(var i = 0; i < radio.length; i++){
		radio[i].checked = false;
	}
	
	document.getElementById('email-tb').value = "";
	document.getElementById('address-ta').value = "";
	document.getElementById('membership-types-ddl').selectedIndex = 0;
	document.getElementById('membership-term-ddl').selectedIndex = 0;

	resetForm();
}

