<?php

$a=$_POST['n1'];
$b=$_POST['n2'];
$op=$_POST['op'];
if($op=="add")
{
	$res=$a+$b;
}
if($op=="sub")
{
	$res=$a-$b;
}
if($op=="mul")
{
	$res=$a*$b;
}
if($op=="div")
{
	$res=$a/$b;
}

echo"result is =$res";
/*
$a=$_POST['n1'];
$i;
echo"table of $a is </br>";
for($i=1;$i<11;$i++)
{
	$res= $a*$i;
	echo"$a X $i = $res </br>";
}
*/
?>