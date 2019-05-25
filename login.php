<?php
require ('sql_connect.php');
if (isset($_POST['submit']))
{
	$username=mysql_escape_string($_POST['username']);
	$password=mysql_escape_string($_POST['password']);
	
	if (!$_POST['username'] && !$_POST['password'])
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Both Columns Are Empty! Please Fill Up!')
		window.location.href='login.html'
		</SCRIPT>");
		exit();
	}
	else if (!$_POST['username'])
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('ALERT! Please Fill Up The Username Column!')
		window.location.href='login.html'
		</SCRIPT>");
		exit();
	}
	else if (!$_POST['password'])
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('ALERT! Please Fill Up The Password Column!')
		window.location.href='login.html'
		</SCRIPT>");
		exit();
	}
	
	
$sql =  mysql_query("SELECT * FROM `staff` WHERE `StaffNo` = '$username' AND `Password` =
'$password' AND `verified` = 1");

$wrongpass = mysql_query("SELECT * FROM `staff` WHERE `StaffNo` = '$username' AND `Password` !=
'$password'");
	
$unverified = mysql_query("SELECT * FROM `staff` WHERE `StaffNo` = '$username' AND `Password` =
'$password' AND `verified` = 0");
if(mysql_num_rows($sql) > 0)
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('LOGIN SUCCESFULLY')
		window.location.href='staffPage.php'
		</SCRIPT>");
		exit();
	}
else if(mysql_num_rows($wrongpass) > 0)
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Wrong Password !Please re-enter.')
		window.location.href='login.html'
		</SCRIPT>");
	}
	else if (mysql_num_rows($unverified) > 0)
	{
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Your account is not yet activated, please wait until admin verify your account')
		window.location.href='login.html'
		</SCRIPT>");
	}
else
	
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Wrong username password combination.Please re-enter.')
		window.location.href='login.html'
		</SCRIPT>");
		
exit();
}

else
{
	
}
?>