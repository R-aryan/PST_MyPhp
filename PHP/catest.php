<?php
$na=$_POST['fname'];
$sa=$_POST['id'];

$pm=$_POST['sub'];
$ps=$_POST['sub1'];

$pim =$_POST['im'];
$pms =$_POST['ms'];
$pem =$_POST['em'];


$mim =$_POST['im1'];
$mms =$_POST['ms1'];
$mem =$_POST['em1'];

$tp= $pim+$pms+$pem;
$tm= $mim+$mms+$mem;

$con=mysqli_connect("localhost","root","","pst");
$q="insert into test values('$na','$sa','$tp','$tm')";
$res=mysqli_query($con,$q);

if($res){
echo"sucessfully entered</br>";}

$q1="select * from test";
$res1=mysqli_query($con,$q1);
echo"<center>*******AWARD SHEET ********";
echo"<table border='1'><tr><td>NAME</td><td>SAP.ID</td><td>PHP</td><td>MYSQL</td></tr>";
while($row=mysqli_fetch_array($res1))
{
	echo"<tr><td>".$row['name']."</td><td>".$row['sap_id']."</td><td>".$row['php']."</td><td>".$row['my_sql']."</td></tr>";
}
echo"</table></center>";

	
		
	

	


	
?>