<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$hname='localhost';
$pwd='';
$uname='root';

$conn =mysqli_connect($hname,$uname,$pwd) or die("not ");
$db="alien";

$db_select = mysqli_select_db($conn, 'alien');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($conn));
}
else
{
	echo "success";
}
$sql="select * from inst";
$result=mysql_query('select * from inst');
while ($row=mysql_fetch_array($result)) {

	# code...
}
?>
<tr>
	<td>
		<?php echo $row['name'];?><br></td>
		<td><?php echo $row['no'];?><br></td>

</tr>


</body>
</html>