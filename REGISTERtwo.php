<html>
<head>
	<center>
		<h1>
				<a href="parcelhomepage.html" >
					<img src="systemLogo.png" width="800px" alt="logo.png">
					</a>
				</h1>
	
	</center>
	<script type="text/javascript">
		
		var staffname = document.forms['regForm']['staffname'];
		var staffname_error = document.getElementById( "staffname_error" );
		var ic =document.forms['regForm']['ic'];
		var telno = document.forms['regForm']['telno'];
		var email = document.forms['regForm']['email'];
		var password = document.forms['vform']['pwInput'];
		var passwordC = document.forms['vform']['pwCInput'];
		staffname.addEventListener( 'blur', nameVerify, true );
		ic.addEventListener( 'blur', icVerify, true );
		telno.addEventListener( 'blur', telnoVerify, true );
		email.addEventListener( 'blur', emailVerify, true );
		password.addEventListener( 'blur', passwordVerify, true );

		function showPassword() {
			var password = document.getElementById( 'pwInput' );
			var passwordC = document.getElementById( 'pwCInput' );
			if ( password.type === "password" && passwordC.type === "password" ) {
				password.type = "text";
				passwordC.type = "text";
			} else {
				password.type = "password";
				passwordC.type = "password";
			}
		}

		function Validate() {
			if ( staffname.value == "" ) {

				staffname.style.border = "1px solid red";
				document.getElementById( 'staffname' ).style.color = "red";
				staffname_error.textContent = "Staff name is required";
				document.getElementById( 'staffname_error' ).style.color = "red";
				return false;

			}
			if ( staffname.value.length < 5 ) {
				staffname.style.border = "1px solid red";
				document.getElementById( 'staffname' ).style.color = "red";
				staffname_error.textContent = "Username must be at least 5 characters";
				return false;
			}
			if ( ic.value == "" ) {
				ic.style.border = "1px solid red";
				document.getElementById( 'ic' ).style.color = "red";
				ic_error.textContent = "Identification number is required!";
				return false;
			}
			if ( ic.value.length < 12 ) {
				ic.style.border = "1px solid red";
				document.getElementById( 'ic' ).style.color = "red";
				ic_error.textContent = "IC Number must be at least 12 characters";
				return false;
			}
			if ( telno.value == "" ) {
				telno.style.border = "1px solid red";
				document.getElementById( 'telno_div' ).style.color = "red";
				telno_error.textContent = "telephone number is required";
				telno.focus();
				return false;
			}
			if ( telno.value.length < 10 ) {
				telno.style.border = "1px solid red";
				document.getElementById( 'telno_div' ).style.color = "red";
				telno_error.textContent = "telephone Number must be at least 10 characters";
				telno.focus();
				return false;
			}
			if ( email.value == "" ) {
				email.style.border = "1px solid red";
				document.getElementById( 'email_div' ).style.color = "red";
				email_error.textContent = "Email is required";
				email.focus();
				return false;
			}
			if ( password.value == "" ) {
				password.style.border = "1px solid red";
				document.getElementById( 'password_div' ).style.color = "red";
				password_confirm.style.border = "1px solid red";
				password_error.textContent = "Password is required";
				password.focus();
				return false;
			}
			if ( password.value != password_confirm.value ) {
				password.style.border = "1px solid red";
				document.getElementById( 'pass_confirm_div' ).style.color = "red";
				password_confirm.style.border = "1px solid red";
				password_error.innerHTML = "The two passwords do not match";
				return false;
			}
		}

		function nameVerify() {
			if ( staffname.value != "" ) {
				staffname.style.border = "1px solid #5e6e66";
				document.getElementById( 'staffname' ).style.color = "#5e6e66";
				username_error.innerHTML = "";
				return true;
			}
		}

		function emailVerify() {
			if ( email.value != "" ) {
				email.style.border = "1px solid #5e6e66";
				document.getElementById( 'email' ).style.color = "#5e6e66";
				email_error.innerHTML = "";
				return true;
			}
		}

		function icVerify() {
			if ( ic.value != "" ) {
				ic.style.border = "1px solid #5e6e66";
				document.getElementById( 'ic' ).style.color = "#5e6e66";
				ic_error.innerHTML = "";
				return true;
			}
		}

		function telnoVerify() {
			if ( telno.value != "" ) {
				telno.style.border = "1px solid #5e6e66";
				document.getElementById( 'telno' ).style.color = "#5e6e66";
				telno_error.innerHTML = "";
				return true;
			}
		}

		function passwordVerify() {
			if ( pwInput.value != "" ) {
				pwInput.style.border = "1px solid #5e6e66";
				document.getElementById( 'pass_confirm' ).style.color = "#5e6e66";
				document.getElementById( 'password' ).style.color = "#5e6e66";
				pwCInput_error.innerHTML = "";
				return true;
			}
			if ( pwInput.value === pwCInput.value ) {
				pwInput.style.border = "1px solid #5e6e66";
				document.getElementById( 'pass_confirm' ).style.color = "#5e6e66";
				pwCInput_error.innerHTML = "";
				return true;
			}
		}
	</script>
	<style>
		body {
			margin: 0;
		}
		
		td.text {
			text-align: right;
		}
		
		ul.topnav {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
			width: 487px
		}
		
		ul.topnav li {
			float: left;
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
			border-right: 1px solid #FFFFFF;
			;
		}
		
		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		
		ul.topnav li a:hover:not(.active) {
			background-color: #111;
		}
		
		ul.topnav li a.active {
			background-color: #FFFFFF;
			color: black;
			border: 1px solid;
		}
		
		ul.topnav li.right {
			float: right;
			border-left: 1px solid #FFFFFF;
			;
		}
		
		@media screen and (max-width: 600px) {
			ul.topnav li.right,
			ul.topnav li {
				float: none;
			}
		}
	</style>

	<body bgcolor="">
		<font>
			<center>
				<ul class="topnav">
					<li>
						<a href="parcelhomepage.html">HOME</a>
					</li>
					<li>
						<a href="#news">CHECK PARCEL STATUS</a>
					</li>
					<li>
						<a href="#contact">ABOUT</a>
					</li>
					<li>
						<a class="active" href="login.html">STAFF LOGIN</a>
					</li>
				</ul>
			</center>
		</font>
		<br>
		<form name="regForm" action="login.html" onsubmit="return Validate()" method="post">
			<center>
				<fieldset style="width: 500">
					<legend style="font-size: 40;font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'">REGISTER</legend>
					<table>
						<tr>
							<td class="text">Staff Name:</td>
							<td>
								<input style="border: 1px solid;padding: 3" type="text" name="staffname" placeholder="UiTMxxxx">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div id="staffname_error"></div>
							</td>
						</tr>
						<tr>
							<td class="text">Identification Number:</td>
							<td>
								<input style="border: 1px solid;padding: 3" type="text" name="ic" placeholder="IC">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div id="ic_error"></div>
							</td>
						</tr>
						<tr>
							<td class="text">Telephone Number:</td>
							<td>
								<input style="border: 1px solid;padding: 3" type="text" name="telno" placeholder="01xxxxxxx">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div id="telno_error"></div>
							</td>
						</tr>
						<tr>
							<td class="text">Email:</td>
							<td>
								<input style="border: 1px solid;padding: 3" type="text" name="email" placeholder="email@email.com">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div id="email_error"></div>
							</td>
						</tr>
						<tr>
							<td class="text">Password:</td>
							<td>
								<input style="border: 1px solid;padding: 3" type="password" id="pwInput" name="password">
							</td>
						</tr>
						<tr>
							<td class="text">Password Confirmation:</td>
							<td>
								<input style="border: 1px solid;padding: 3" type="password" id="pwCInput" name="password_confirm">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div id="password_error"></div>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="checkbox" onclick="showPassword()"> Show Password
							</td>
						</tr>
						<tr></tr>
						<tr>
							<td></td>
							<td>
								<a href="forgotpassword.html">Forgot Password?</a>
							</td>
						</tr>
					</table>
					<br>
					<center>
						<input style="background-color: #1D8E00;color: white; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';height: 50;width: 100; border: 1px solid;" type="submit" name="submit" value="REGISTER">
						<br>
						<br>
						<input style="background-color: #686868or: white; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';height: 50;width: 100; border: 1px solid;" type="button" onClick="location.href='admin.php'" value="ADMIN">
					</center>
				</fieldset>
			</center>
		</form>
	</body>
</head>
</html>