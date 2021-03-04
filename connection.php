<?php
$servername = "localhost";
$username = "20mca039";
$password = "2637";
$dbname = "20mca039";

// Create connection
$conn = mysqli_connect("localhost","20mca039" , "2637", "20mca039");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO student (name)
VALUES ('John')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
