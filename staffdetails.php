<?php
include('parcelDB.php');
$StaffNo="";
$Sname="";
$Password="";
$staffTel="";
$staffEmail="";
$staffIC="";
$verified="";

if(isset($_POST['save']))
	{
		$StaffNo=$_POST['StaffNo'];
		$Sname=$_POST['Sname'];
		$Password=$_POST['Password'];
		$staffTel=$_POST['staffTel'];
		$staffEmail=$_POST['staffEmail'];
		$staffIC=$_POST['staffIC'];
		$verified=$_POST['verified'];
	if(strlen($staffTel)<10)
		{
			$error="TELEPHONE NUMBER IS ATLEAST 10 CHARACTERS";
		}
	else
	{
		$checkExisting = "select * from staff where staffNo='{$_POST['StaffNo']}'";
		$queryCheck = mysql_query($checkExisting);
		if(mysql_num_rows($queryCheck) == 0)
			{
			//add new staff
			$sql="insert into staff (StaffNo ,Sname,Password,staffTel,staffEmail,staffIC,verified) values('$StaffNo','$Sname','$Password','$staffTel','$staffEmail','$staffIC','$verified')";
			$query=mysql_query($sql);
			echo "<script type='text/javascript'>alert('STAFF INSERTED');</script>";
			$StaffNo="";
			$Sname="";
			$Pasword="";
			$staffTel="";
			$staffEmail="";
			$staffIC="";
			$verified="";
			}
		else
		{
			//update exist staff
			$sql="update staff set Sname='$Sname',Password='$Password',staffTel='$staffTel',staffEmail='$staffEmail',staffIC='$staffIC',verified='$verified' where StaffNo= '{$_POST['StaffNo']}'";
			$query=mysql_query($sql);
		if($query)
			{
				header('Refresh:0; staffInventory.php');
			}
			//echo "hi 456";
		}
	}
	}
if(isset($_GET['StaffNo']))
{
	//echo $_GET['trackNo'];
	$sql="select * from `staff` where `StaffNo`='{$_GET['StaffNo']}' ";
	$query=mysql_query($sql);
	$row=mysql_fetch_object($query);
	$StaffNo=$row->StaffNo;
	echo "fuck you";
	$Sname=$row->Sname;
	$Password=$row->Password;
	$staffTel=$row->staffTel;
	$staffEmail=$row->staffEmail;
	$staffIC=$row->staffIC;
	$verified=$row->verified;
	
}
?>
<!doctype html>
<html>
<head>
	<center><h1><a href="" ><img src="systemLogo.png" alt="logo.png" width="800px"></a></h1></center>
<style>
body {
	margin: 0;
}
	table.parcels
	{
		font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
	}
ul.topnav {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #333;
	width: 400px
}
ul.topnav li {
	float: left;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
	border-right: 1px solid #FFFFFF;;
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
	border-left: 1px solid #FFFFFF;;
}

@media screen and (max-width: 600px) {
ul.topnav li.right, ul.topnav li {
	float: none;
}
}
</style>
<body bgcolor="">
<font>
<center>
  
	<ul class="topnav">
  <li><a href="#home">HOME</a></li>
  <li><a class="active" href="staffInventory.php">INVENTORY</a></li>
   <li><a href="#home">STATISTIC</a></li>
  <li><a href="parcelhomepage.html">LOGOUT</a></li>
</ul>
</center>
</font> 
</body>
</head>

<body>
	<br>
	<center>
		<form action="" method="POST">
		<table class="parcels" cellpadding="5px" cellspacing="0" border="1" >
		<th>STAFF ID</th>
		<th>STAFF NAME</th>
			<TH>STAFF PASSWORD</TH>
			<th>STAFF TELEPHONE NUMBER</th>
			<th>STAFF EMAIL</th>
			<th>STAFF IC NUMBER</th>
		<th>STATUS</th>
			<tr>
				<td><input type="text" name="StaffNo" value="<?php echo "$StaffNo"; ?>"></td>
				
					
				<td><input type="text" name="Sname" value="<?php echo "$Sname"; ?>"</td>
					
				<td><input type="text" name="Password" value="<?php echo "$Password"; ?>"</td>
					
				<td><input type="text" name="staffTel" value="<?php echo "$staffTel"; ?>"</td>
				
				<td><input type="text" name="staffEmail" value="<?php echo "$staffEmail"; ?>"</td>
					
				<td><input type="text" name="staffIC" value="<?php echo "$staffIC"; ?>"</td>
					
				<td><select name="verified">
					<option <?php if($verified=='1') echo 'selected'; ?> value="1">Confirm</option>
					<option <?php if($verified=='0') echo 'selected'; ?> value="0">Not Confirm</option></select></td>
				
			</tr>
	</table>
		
			<br>
		<input type="submit" name="save" value="SAVE">
		</form>
		</center>
</body>
</html>