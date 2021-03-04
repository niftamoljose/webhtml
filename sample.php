<html>
<head></head>
<body>
<form method="post" action="sample.php" >
<input type="text" name="name">
<input type="submit" value="submit">

<?php
$con=mysqli_connect("localhost","20mca039","2637","20mca039");
if($con)
{
echo $name=$_POST["name"];

$qry="INSERT INTO student_name(name) VALUES ('$name')";

if(mysqli_query($con, $qry))
{
echo "Data inserted successfully<br>";
}
}
?>
</body>
</html>