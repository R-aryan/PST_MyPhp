<?php
$u=$_POST['uname'];
$p=$_POST['pd'];
$con=mysqli_connect("localhost","root","","pst");
$q="insert into login values('$u','$p')";
$res=mysqli_query($con,$q);
if($res)
{
	echo"Signup Successful";
	echo"<a href='signin.html'>GO TO SIGNIN</a>";
	
}
else
{
	echo"signup not successful";
}
	

	


	
?>