<?php
$con=mysqli_connect("localhost","root","","pst");
$q="select * from item";
$res=mysqli_query($con,$q);
echo"<center><table border='1'><tr><td>ITEM CODE</td><td>ITEM NAME</td><td>ITEM PRICE</td><td>QUANTITY</td></tr>";
while($row=mysqli_fetch_array($res))
{
	echo"<tr><td>".$row['item_code']."</td><td>".$row['item_name']."</td><td>".$row['item_price']."</td><td>".$row['quantity']."</td></tr>";
}
echo"</table></center>";

	


	
?>