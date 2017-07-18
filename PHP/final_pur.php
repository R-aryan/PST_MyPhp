<?php
$i=$_POST['it1'];
$qu=$_POST['it4'];
$con=mysqli_connect("localhost","root","","pst");
$q="select * from item";
$res=mysqli_query($con,$q);
$f=0;
while($row=mysqli_fetch_array($res))
{
	if($row['item_code']==$i)
	{
		$f=1;
		if($row['quantity']>=$qu)
		{
			echo"Item Sold </br>";
			$q2="insert into purchase values('$i',$qu)";
			mysqli_query($con,$q2);
			$q1= "update item set quantity=(quantity- $qu) where item_code= '$i'";
			mysqli_query($con,$q1);
		}
		else
		{
			echo"Out of Stock </br>";
		}
	}
}
if($f==0)
{
	echo"Item is not available</br>";
}


	


	
?>