<?php
$sno= array($_POST['sn1'],$_POST['sn2'],$_POST['sn3'],$_POST['sn4'],$_POST['sn5']);
$item=  array($_POST['it1'],$_POST['it2'],$_POST['it3'],$_POST['it4'],$_POST['it5']);
$cost= array($_POST['c1'],$_POST['c2'],$_POST['c3'],$_POST['c4'],$_POST['c5']);
$quant= array($_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5']);
$total;
$i;$sum=0;
echo"Your Bill IS </br>";
for($i=0;$i<5;$i++)
{
	$total= $quant[$i]*$cost[$i];
	echo"$item[$i]  $quant[$i]  $total</br>";
	$sum= $sum+$total;
}
echo"total amount is =$sum</br>";
	
		
	

	


	
?>