<?php
include('parcelDB.php');
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
		<table class="parcels" cellpadding="5px" cellspacing="0" border="1" >
	<th>NO</th>
		<th>STAFF ID</th>
		<th>STAFF NAME</th>
		<th>STAFF IC</th>
			<?php
			$sql = "select * from staff order by Sname";
			$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
$i=1;
while($row=mysql_fetch_object($query))
{
	$staffno = $row->StaffNo;
			?>
			<tr>
<td><?php echo $i++; ?></td>
<td><a href="staffdetails.php?StaffNo=<?php echo $staffno;?>"><?php echo $row->StaffNo; ?></a></td>
<td><?php echo $row->Sname; ?></td>
<td><?php echo $row->staffIC; ?></td>
			</tr>
			<?php
}
}
?>
	</table>
		</center>
	<br>
	<CENTER><a href="staffdetails.php"><button>INSERT NEW STAFF</button></a></CENTER>
</body>
</html>