<?php
$u=$_POST['uname'];
$p=$_POST['pd'];
$con=mysqli_connect("localhost","root","","pst");
$q="insert into login values('$u','$p')";
$res=mysqli_query($con,$q);
$q= "select * from login";
$res=mysqli_query($con,$q);
$f=0;
while($row=mysqli_fetch_array($res))
{
if($row['username']==$u && $row['password']==$p)
{
	$f=1;
}
}
if($f==1)
{
	echo"login successful </br>";
}
else
{
	echo"invalid username or password </br>";
	
}


?>