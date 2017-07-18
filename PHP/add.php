<?php
$a=$_POST['it1'];
$b=$_POST['it2'];
$c=$_POST['it3'];
$d=$_POST['it4'];
$con=mysqli_connect("localhost","root","","pst");
$q="insert into item values('$a','$b','$c','$d')";
$res=mysqli_query($con,$q);
if($res)
{
	echo"item successsfully added</br>";
}
else
{
	echo"item not added</br>";
}


	


	
?>