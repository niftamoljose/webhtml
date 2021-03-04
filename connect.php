<?php
$servername = "localhost";
$username = "20mca039";
$password = "2637";

// Create connection
$conn = mysqli_connect("localhost", "20mca039", "2637");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>