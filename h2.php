<html>
<head> maximum of three numbers </head>
<body> 
<?php
$a=1;
$b=2;
$c=3;
if($a>$b)
{
if($a>$c)
{
echo "maximum is a=$a";
else
echo "maximum is c=$c";
}
else
{
if($b>$c)
{
echo "maximum is c=$c";
else
echo "maximum is b=$b";
}
?>
</body>
</html>
