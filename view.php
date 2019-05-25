<?php
include('db.php');
?>
<table cellpadding="5" cellspacing="0" border="1">
<tr>
<th>NO</th>
<th>Student Name</th>
<th>Address</th>
<th>Status</th>
<th>Action</th>
</tr>
<?php
$sql="select * from tb_student";
$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
$i=1;
while($row=mysql_fetch_object($query))
{
?>
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $row->stu_name; ?></td>
<td><?php echo $row->address; ?></td>
<td><?php echo $row->status; ?></td>
<td>
<a href="insert.php?edited=1&id=<?php echo $row->stu_id; ?>">Edit</a> |
<a href="#">Delete</a>
</td>
</tr>
<?php
}
}
?>
</table>