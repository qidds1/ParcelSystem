<?php
require ('sql_connect.php');
if (isset($_POST['submit']))
{
	$adminuname=mysql_escape_string($_POST['adminuname']);
	$adminpass=mysql_escape_string($_POST['adminpass']);
	
	if (!$_POST['adminuname'] && !$_POST['adminpass'])
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Both Columns Are Empty! Please Fill Up!')
		window.location.href='adminlogin.html'
		</SCRIPT>");
		exit();
	}
	else if (!$_POST['adminuname'])
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('ALERT! Please Fill Up The Admin Username Column!')
		window.location.href='adminlogin.html'
		</SCRIPT>");
		exit();
	}
	else if (!$_POST['adminpass'])
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('ALERT! Please Fill Up The Admin Password Column!')
		window.location.href='adminlogin.html'
		</SCRIPT>");
		exit();
	}
	
	
$sql =  mysql_query("SELECT * FROM `staff` WHERE `StaffNo` = '$adminuname' AND `Password` =
'$adminpass' AND `verified` = 1");

$wrongpass = mysql_query("SELECT * FROM `staff` WHERE `StaffNo` = '$adminuname' AND `Password` !=
'$adminpass'");
	
$unverified = mysql_query("SELECT * FROM `staff` WHERE `StaffNo` = '$adminuname' AND `Password` =
'$adminpass' AND `verified` = 0");
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
		window.location.href='adminlogin.html'
		</SCRIPT>");
	}
	else if (mysql_num_rows($unverified) > 0)
	{
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Your account is not yet activated, please wait until admin verify your account')
		window.location.href='adminlogin.html'
		</SCRIPT>");
	}
else
	
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Wrong username password combination.Please re-enter.')
		window.location.href='adminlogin.html'
		</SCRIPT>");
		
exit();
}

else
{
	
}
?>