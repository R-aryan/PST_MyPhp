<?php
$a=$_POST['fname'];
$b=$_POST['id'];
$c=$_POST['pd'];
$d=$_POST['cn'];
$e=$_POST['gen'];
$con=mysqli_connect("localhost","root","","pst");
$q="insert into mreg values('$a','$b','$c','$d','$e')";
$res=mysqli_query($con,$q);
if($res)
{
	echo"Member Successfully Registered</br>";
}
else
{
	echo"Member not Registered</br>";
}


	


	
?>