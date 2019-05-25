<html>
<head>
	<center>
		<h1><a href="parcelhomepage.html" ><img src="systemLogo.png" width="800px" alt="logo.png"></a></h1>
	</center>
	<script type="text/javascript">
		function showPassword() {
			var pass = document.getElementById( "pwInput" );
			var passC = document.getElementById( "pwCInput" );
			if ( pass.type === "password" && passC.type === "password" ) {
				pass.type = "text";
				passC.type = "text";
			} else {
				pass.type = "password";
				passC.type = "password";
			}
		}

		function validate() {

			var staffname = document.getElementById( "staffname" );
			var staffname_error = document.getElementById( "staffname_error" );
			var ic = document.getElementById( "ic" );
			var telno = document.getElementById( "telno" );
			var email = document.getElementById( "email" );
			var pass = document.getElementById( "pwInput" );
			var passC = document.getElementById( "pwCInput" );

			if ( staffname.value == "" ) {

				staffname.style.border = "1px solid red";
				document.getElementById( 'staffname' ).style.color = "red";
				staffname_error.textContent = "Staff name is required";
				document.getElementById( 'staffname_error' ).style.color = "red";
				return false;

			} else if ( staffname.value.length < 5 ) {
				staffname.style.border = "1px solid red";
				document.getElementById( 'staffname' ).style.color = "red";
				staffname_error.textContent = "Username must be at least 5 characters";
				return false;
			} else if ( staffname.value != "" ) {
				staffname.style.border = "1px solid #5e6e66";
				document.getElementById( 'staffname' ).style.color = "#5e6e66";
				username_error.innerHTML = "";
				return true;
			}
			
			if ( ic.value == "" ) {
				ic.style.border = "1px solid red";
				document.getElementById( 'ic' ).style.color = "red";
				ic_error.textContent = "Identification number is required!";
				return false;
			}
			else if ( ic.value.length < 12 ) {
				ic.style.border = "1px solid red";
				document.getElementById( 'ic' ).style.color = "red";
				ic_error.textContent = "IC Number must be at least 12 characters";
				return false;
			}
			else if ( ic.value != "" ) {
				ic.style.border = "1px solid #5e6e66";
				document.getElementById( 'ic' ).style.color = "#5e6e66";
				ic_error.innerHTML = "";
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
					<li><a href="parcelhomepage.html">HOME</a>
					</li>
					<li><a href="#news">CHECK PARCEL STATUS</a>
					</li>
					<li><a href="#contact">ABOUT</a>
					</li>
					<li><a class="active" href="login.html">STAFF LOGIN</a>
					</li>
				</ul>
			</center>
		</font> <br>
		<form action="login.html" onSubmit="return validate()" method="post">
			<center>
				<fieldset style="width: 500">
					<legend style="font-size: 40;font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'">REGISTER</legend>
					<table>
						<tr>
							<td class="text">Staff Name:</td>
							<td>
								<input style="border: 1px solid;padding: 3" type="text" id="staffname" name="username" placeholder="UiTMxxxx">
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
								<input style="border: 1px solid;padding: 3" type="text" name="ic" placeholder="IC" id="ic">
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
								<input style="border: 1px solid;padding: 3" type="text" id="telno" name="telno" placeholder="01xxxxxxx">
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
								<input style="border: 1px solid;padding: 3" type="text" id="email" name="email" placeholder="email@email.com">
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
								<input style="border: 1px solid;padding: 3" type="password" id="pwCInput" name="passwordC">
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
						<input style="background-color: #333;color: white; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';height: 50;width: 100; border: 1px solid;" type="submit" value="REGISTER">
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