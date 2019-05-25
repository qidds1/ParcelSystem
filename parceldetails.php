<?php
include('parcelDB.php');
$trackno ="";
$rackno ="";
$datereceived = "";
$repname ="";
$status ="";

if(isset($_POST['save']))
	{
		$trackno=$_POST['trackno'];
		$rackno=$_POST['rackno'];
		$datereceived=$_POST['datereceived'];
		$repname=$_POST['repname'];
		$status=$_POST['status'];
	if(strlen($trackno)<10)
		{
			$error="TRACKING NUMBER IS ATLEAST 10 CHARACTERS";
		}
	else
	{
		$checkExisting = "select * from parcel where trackingNo='{$_POST['trackno']}'";
		$queryCheck = mysql_query($checkExisting);
		if(mysql_num_rows($queryCheck) == 0)
			{
			//add new parcel
			$sql="insert into parcel (trackingNo ,RackNo,DateReceived,RepName,status) values('$trackno','$rackno','$datereceived','$repname','$status')";
			$query=mysql_query($sql);
			echo "<script type='text/javascript'>alert('PARCEL INSERTED');</script>";
			$trackno ="";
			$rackno ="";
			$datereceived = "";
			$repname ="";
			$status ="";
			}
	else
	{
			//update exist parcel
			$sql="update parcel set RackNo='$rackno',DateReceived='$datereceived',RepName='$repname',status='$status' where trackingNo= '{$_POST['trackno']}'";
			$query=mysql_query($sql);
		if($query)
			{
				header('Refresh:0; inventory.php');
			}
			//echo "hi 456";
	}
	}
	}
if(isset($_GET['trackNo']))
{
	//echo $_GET['trackNo'];
	$sql="select * from `parcel` where `trackingNo`='{$_GET['trackNo']}' ";
	$query=mysql_query($sql);
	$row=mysql_fetch_object($query);
	$trackno = $row->trackingNo;
	$rackno =$row->RackNo;
	$datereceived = $row->DateReceived;
	$repname =$row->RepName;
	$status =$row->status;
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
	width: 294px
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
  <li><a class="active" href="inventory.php">INVENTORY</a></li>
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
		<th>TRACKING NUMBER</th>
		<th>DATE RECEIVED</th>
			<TH>RACK NUMBER</TH>
			<th>RECEIPIENT NAME</th>
		<th>STATUS</th>
			<tr>
				<td><input type="text" name="trackno" value="<?php echo "$trackno"; ?>"></td>
				<td><input type="date" name="datereceived" value="<?php echo "$datereceived"; ?>"</td>
				<td><input type="text" name="rackno" value="<?php echo "$rackno"; ?>"</td>
				<td><input type="text" name="repname" value="<?php echo "$repname"; ?>"</td>
				<td><select name="status">
					<option <?php if($status=='READY') echo 'selected'; ?> value="READY">READY</option>
					<option <?php if($status=='NOT READY') echo 'selected'; ?> value="NOT READY">NOT READY</option></select></td>
			</tr>
	</table>
		
			<br>
		<input type="submit" name="save" value="SAVE">
		</form>
		</center>
</body>
</html>