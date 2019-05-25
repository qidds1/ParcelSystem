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
		<table class="parcels" cellpadding="5px" cellspacing="0" border="1" >
	<th>NO</th>
		<th>TRACKING NUMBER</th>
		<th>DATE RECEIVED</th>
		<th>STATUS</th>
			<?php
			$sql = "select * from parcel order by DateReceived";
			$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
$i=1;
while($row=mysql_fetch_object($query))
{
	$trackno = $row->trackingNo;
			?>
			<tr>
<td><?php echo $i++; ?></td>
<td><a href="parceldetails.php?trackNo=<?php echo $trackno;?>"><?php echo $row->trackingNo; ?></a></td>
<td><?php echo $row->DateReceived; ?></td>
				<?php if($row->status == "READY")
			{
				?><td style="background-color: greenyellow"><?php echo $row->status;?></td> <?php
			}
	else { ?>
<td style="background-color: yellow"><?php echo $row->status; ?></td>
		<?php
		}
	?>
			</tr>
			<?php
}
}
?>
	</table>
		</center>
	<br>
	<CENTER><a href="pARCELDETAils.php"><button>INSERT NEW PARCEL</button></a></CENTER>
</body>
</html>