<?php

$u=$_POST['n'];
$p=$_POST['id'];
session_start();
$_SESSION['name']=$u;
$_SESSION['sap']=$p;

?>

<html>
<body>
<center>
<table border="2"><tr><td>
<center>REGISTER</center>
<form action="professional.php" method="post">
<table border="0">
<tr><td>MOB.NO</td><td><input type="text" name="m"></td>
<tr><td>EMAIL.ID</td><td><input type="text" name="e"></td>
<tr><td></td><td></td><td><input type="submit" Value="NEXT>>"><br></td>
</table>
</form>
</td></tr></table>
</Center>
</body>
</html>