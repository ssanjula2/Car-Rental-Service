function validateForm() {

	let valid = true;

	document.getElementById("nameError").style.display = "none";
    document.getElementById("emailError").style.display = "none";
   	document.getElementById("passwordError").style.display = "none";
    document.getElementById("confirmPasswordError").style.display = "none";
    document.getElementById("termsError").style.display = "none";

    var nameFormat = /^[A-Za-z\s]+$/;
	var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var passwordFormat = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;

    const name = document.getElementById("username").value;
	if (name === ""){
		document.getElementById("nameError").innerHTML = "Please enter your name.";
		document.getElementById("nameError").style.display = "block";
		valid = false;
	} else if (!name.match(nameFormat)) {
		document.getElementById("nameError").innerHTML = "You have entered an invalid name.";
		document.getElementById("nameError").style.display = "block";
		valid = false;
	}

	const email = document.getElementById("email").value;
	if (email === ""){
		document.getElementById("emailError").innerHTML = "Please enter your email.";
		document.getElementById("emailError").style.display = "block";
		valid = false;
	} else if (!email.match(mailFormat)) {
		document.getElementById("emailError").innerHTML = "You have entered an invalid email.";
		document.getElementById("emailError").style.display = "block";
		valid = false;
	}

	const password = document.getElementById("password").value;
	if (password === ""){
		document.getElementById("passwordError").innerHTML = "Please enter your password.";
		document.getElementById("passwordError").style.display = "block";
		valid = false;
	} else if (!password.match(passwordFormat)) {
		document.getElementById("passwordError").innerHTML = "Your password must be at least 8 characters long, containing at least one uppercase letter, one lowercase letter, and one number.";
		document.getElementById("passwordError").style.display = "block";
		valid = false;
	}

	const confirmPassword = document.getElementById("password2").value;
	if (confirmPassword === ""){
		document.getElementById("confirmPasswordError").innerHTML = "Please confirm your password.";
		document.getElementById("confirmPasswordError").style.display = "block";
		valid = false;
	} else if (confirmPassword !== password){
		document.getElementById("confirmPasswordError").innerHTML = "Passwords do not match.";
		document.getElementById("confirmPasswordError").style.display = "block";
		valid = false;
	}

	const terms = document.getElementById("terms").checked;
	if (!terms) {
		document.getElementById("termsError").innerHTML = "You must agree to the terms and conditions.";
		document.getElementById("termsError").style.display = "block";
		valid = false;
	}
	
	return valid;
}