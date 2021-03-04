<?php
$servername = "localhost";
$username = "20mca039";
$password = "2637";
$dbname = "20mca039";

// Create connection
$conn = mysqli_connect("localhost", "20mca039", "2637", "20mca039");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT id, name FROM student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - name: " . $row["name"]." ".  "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
