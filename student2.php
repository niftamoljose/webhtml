<html>
<head></head>
<body>
<form method="post" action="student2.php" >
name:
<input type="text" name="name"><br><br>
mark:
<input type="text" name="mark"><br><br>
branch:
<input type="text" name="branch"><br><br>
<input type="submit" value="submit">

<?php
$con=mysqli_connect("localhost","20mca039","2637","20mca039");
if($con)
{
echo $name=$_POST["name"];
echo $mark=$_POST["mark"];
echo $branch=$_POST["branch"];

$qry="INSERT INTO stud(name,mark,branch) VALUES ('$name','$mark','$branch')";

if(mysqli_query($con, $qry))
{
echo "Data inserted successfully<br>";
}
}
?>
</body>
</html>
