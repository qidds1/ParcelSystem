<?php

include('parcelDB.php');
$error="";
$staffname="";
$contact="0";
$icnumber="";
$password="0";
$email="";

if(isset($_POST['submit']))
{
	$staffname = $_POST['staffname'];
	$contact = $_POST['telno'];
	$icnumber = $_POST['ic'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	if($staffname=="" || $contact =="" || $icnumber=="" || $password=="" || $email =="")
	{
		echo "
		<script type='text/javascript'>
		alert('MAKE SURE YOU INSERTED ALL FIELDS');
		window.location.href='registerSafe.html'
		</script>";
		exit();
	}
	else
	{
		$checkIC = mysql_query("select * from `staff` where `staffIC` = '$icnumber'");
		$checkEmail = mysql_query("select * from `staff` where `staffEmail`='$email'");
		if(mysql_num_rows($checkIC) > 0)
		{
			echo "
			<script type='text/javascript'>
			alert('THIS IC NUMBER HAS ALREADY REGISTERED');
			window.location.href='registerSafe.html'
			</script>";
			exit();
		}
		else if (mysql_num_rows($checkEmail) > 0)
		{
			echo "
			<script type='text/javascript'>
			alert('THIS EMAIL HAS ALREADY BEEN USED');
			window.location.href='registerSafe.html'
			</script>";
			exit();
		}
		else
		{
		$sql="insert into `staff` (`Sname`,`Password`,`staffIC`,`staffTel`,`staffEmail`) values ('$staffname','$password','$icnumber','$contact','$email')";
		$query=mysql_query($sql);
		echo "
			<script type='text/javascript'>
			alert('REGISTER SUCESSFULL! PLEASE WAIT FOR ADMIN VERIFICATION');
			window.location.href='login.html'
			</script>";
			exit();
		}
	}
}
else
{
	echo "wtf";
}?>