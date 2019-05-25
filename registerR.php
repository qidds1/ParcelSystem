<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register New Staff</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div id="wrapper">
		<form method="POST" action="test_reg.php" onsubmit="return Validate()" name="vform">
			<center>
				<h1>Staff Registration</h1>
			</center>
			<div id="staffname_div">
				<label>Staff Name</label> <br>
				<input type="text" name="staffname" class="textInput">
				<div id="staffname_error"></div>
			</div>
			<div id="ic_div">
				<label>Identification Number</label> <br>
				<input type="text" name="ic" class="textInput">
				<div id="ic_error"></div>
			</div>
			<div id="telno_div">
				<label>Telephone Number</label> <br>
				<input type="text" name="telno" class="textInput">
				<div id="telno_error"></div>
			</div>

			<div id="email_div">
				<label>Email</label> <br>
				<input type="email" name="email" class="textInput">
				<div id="email_error"></div>
			</div>
			<div id="password_div">
				<label>Password</label> <br>
				<input type="password" name="password" class="textInput">
			</div>
			<div id="pass_confirm_div">
				<label>Password confirm</label> <br>
				<input type="password" name="password_confirm" class="textInput">
				<div id="password_error"></div>
			</div>
			<div>
				<input type="submit" name="register" value="Register" class="btn">
			</div>
		</form>
	</div>
</body>
</html>
<script type="text/javascript">
var staffname = document.forms['vform']['staffname'];
var ic = document.forms['vform']['ic'];
var telno = document.forms['vform']['telno'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
var staffname_error = document.getElementById('staffname_error');
var ic_error = document.getElementById('ic_error');
var telno_error = document.getElementById('telno_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
staffname.addEventListener('blur', nameVerify);
ic.addEventListener('blur', icVerify);
telno.addEventListener('blur', telnoVerify);
email.addEventListener('blur', emailVerify);
password.addEventListener('blur', passwordVerify);

function Validate() {
	if (staffname.value == "") {
		staffname.style.border = "1px solid red";
		document.getElementById('staffname_div').style.color = "red";
		staffname_error.textContent = "Staff name is required";
		return false;
	}
	if (staffname.value.length < 5) {
		staffname.style.border = "1px solid red";
		document.getElementById('staffname_div').style.color = "red";
		staffname_error.textContent = "Username must be at least 5 characters";
		return false;
	}
	if (ic.value == "") {
		ic.style.border = "1px solid red";
		document.getElementById('ic_div').style.color = "red";
		ic_error.textContent = "Identification number is required!";
		return false;
	}
	if (ic.value.length < 12) {
		ic.style.border = "1px solid red";
		document.getElementById('ic_div').style.color = "red";
		ic_error.textContent = "IC Number must be at least 12 characters";
		return false;
	}
	if (telno.value == "") {
		telno.style.border = "1px solid red";
		document.getElementById('telno_div').style.color = "red";
		telno_error.textContent = "telephone number is required";
		telno.focus();
		return false;
	}
	if (telno.value.length < 10) {
		telno.style.border = "1px solid red";
		document.getElementById('telno_div').style.color = "red";
		telno_error.textContent = "telephone Number must be at least 10 characters";
		telno.focus();
		return false;
	}
	if (email.value == "") {
		email.style.border = "1px solid red";
		document.getElementById('email_div').style.color = "red";
		email_error.textContent = "Email is required";
		email.focus();
		return false;
	}
	if (password.value == "") {
		password.style.border = "1px solid red";
		document.getElementById('password_div').style.color = "red";
		password_confirm.style.border = "1px solid red";
		password_error.textContent = "Password is required";
		password.focus();
		return false;
	}
	if (password.value != password_confirm.value) {
		password.style.border = "1px solid red";
		document.getElementById('pass_confirm_div').style.color = "red";
		password_confirm.style.border = "1px solid red";
		password_error.innerHTML = "The two passwords do not match";
		return false;
	}
}

function nameVerify() {
	if (staffname.value != "") {
		staffname.style.border = "1px solid #5e6e66";
		document.getElementById('staffname_div').style.color = "#5e6e66";
		staffname_error.innerHTML = "";
		return true;
	}
}

function emailVerify() {
	if (email.value != "") {
		email.style.border = "1px solid #5e6e66";
		document.getElementById('email_div').style.color = "#5e6e66";
		email_error.innerHTML = "";
		return true;
	}
}

function icVerify() {
	if (ic.value != "") {
		ic.style.border = "1px solid #5e6e66";
		document.getElementById('ic_div').style.color = "#5e6e66";
		ic_error.innerHTML = "";
		return true;
	}
}

function telnoVerify() {
	if (telno.value != "") {
		telno.style.border = "1px solid #5e6e66";
		document.getElementById('telno_div').style.color = "#5e6e66";
		telno_error.innerHTML = "";
		return true;
	}
}

function passwordVerify() {
	if (password.value != "") {
		password.style.border = "1px solid #5e6e66";
		document.getElementById('pass_confirm_div').style.color = "#5e6e66";
		document.getElementById('password_div').style.color = "#5e6e66";
		password_error.innerHTML = "";
		return true;
	}
	if (password.value === password_confirm.value) {
		password.style.border = "1px solid #5e6e66";
		document.getElementById('pass_confirm_div').style.color = "#5e6e66";
		password_error.innerHTML = "";
		return true;
	}
}

</script>