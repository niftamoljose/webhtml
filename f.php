<html>
<title>student array</title>
<body>

<?php
$name=array("mahesh","jeeva","janu");
$name1=array("jaya","lakshmi","fema");
echo "<h1>ARRAY IS</h1>";
print_r($name);
print_r($name1);
asort($name);
arsort($name1);
echo "<h1>Ascending Order</h1>";
foreach($name as $name_array)
   {
   echo  $name_array;
   echo "<br>";
   }
   echo "<h1>Descending Order</h1>";
foreach($name1 as $name1_array)
   {
   echo  $name1_array;
   echo "<br>";
   }
?>

</body>
</html>