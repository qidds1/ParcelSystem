<?php

include('db.php');
$error="";
$staffname="";
$contact="0";
$icnumber="";
$staffID="0";
$email="";
echo $_POST['txtstaffID'];

if(isset($_POST['btnsave']))
	{
		$staffname=$_POST['txtstaffname'];
		$contact=$_POST['txtcontact'];
		$icnumber=$_POST['txticnumber'];
		$staffID=$_POST['txtstaffID'];
		$email=$_POST['txtemail'];
	if(strlen($staffname)<4)
		{
			$error="NAME MUST ATLEAST 4 CHARACTERS";
		}
	else
	{
		if($_POST['txtstaffID']=="0")
			{
			//add new staff
			$sql="insert into TABLE(staffname,contact,icnumber,staffID,email) values('$staffname','$contact','$icnumber','$staffID','$email')";
			$query=mysql_query($sql);
			echo "REGISTER";
			}
	else
	{
			//update exist staff
			$sql="update TABLE set staffname='$staffname', contact='$contact',icnumber='$icnumber',staffID='$staffID',email='$email' where staffID= '{$_POST['txtstaffID']}'";
			$query=mysql_query($sql);
		if($query)
			{
				header('Refresh:0; view.php');
			}
			echo "hi 456";
	}
	}
	}
	
//check staffID for edit
if(isset($_GET['edited']))
	{
		$sql="select * from TABLE where staffID='{$_GET['id']}' ";
		$query=mysql_query($sql);
		$row=mysql_fetch_object($query);
		$staffname=$row->staffname;
		$contact=$row->contact;
		$icnumber=$row->icnumber;
		$staffID=$row->staffID;
		$email=$row->email;
		
	}
?>
<form action="" method="post">
<table>
<tr>
<td>STAFFNAME</td>
<td><input type="text" name="txtstaffname" value="<?php if(isset($_GET['edited'])) echo $staffname; ?>"> 
</tr>
<tr>
<td>CONTACT</td>
<td><textarea name="txtcontact"><?php if(isset($_GET['edited'])) echo $address; ?></textarea></td>
</tr>
<tr>
</tr>
<tr>
<td>IC NUMBER</td>
<td><textarea name="txticnumber"><?php if(isset($_GET['edited'])) echo $address; ?></textarea></td>
</tr>
<tr>
</tr>
<tr>
<td>STAFF ID</td>
<td><textarea name="txtstaffID"><?php if(isset($_GET['edited'])) echo $address; ?></textarea></td>
</tr>
<tr>
</tr>
<tr>
<td>EMAIL</td>
<td><textarea name="txtemail"><?php if(isset($_GET['edited'])) echo $address; ?></textarea></td>
</tr>
<tr>
</tr>
<td></td>
<td><input type="submit" value="Save" name="btnsave"></td>
</tr>
</form>
</table>