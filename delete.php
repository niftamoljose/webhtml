<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost","20mca039","2637","20mca039");
$id=$_GET["id"];

?>
<form method="post" action="delete.php" >
<h1 style="text-align:center"><u>DELETE</u></h1>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<table align="center">
<tr>
<td>Student ID</td>
<td>:</td>
<td><input type="text" name="id" value="<?php echo $r['id'];?>"></td></tr>
<td colspan="2" style="text-align:right"><input type="submit" value="delete"
name="delete"></td></tr>
</form>
</table>
<?php	
if (isset ($_POST ["delete"]))
{
	$id=$_POST["id"];
$qry1="delete from student where id='$id'";	
if(mysqli_query($con, $qry1))
{
echo "Data Removed<br>";
}
}
?>
</body>
</html>