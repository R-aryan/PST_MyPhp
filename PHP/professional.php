<?php

$mo=$_POST['m'];
$ma=$_POST['e'];
session_start();
$_SESSION['mobile']=$mo;
$_SESSION['email']=$ma;

?>

<html>
<body>
<center>
<table border="2"><tr><td>
<center>REGISTER</center>
<form action="academicd.php" method="post">
<table border="0">
<tr><td>BRANCH</td><td><input type="text" name="b"></td>
<tr><td>SEMESTER</td><td><input type="text" name="s"></td>
<tr><td></td><td></td><td><input type="submit" Value="GO"><br></td>
</table>
</form>
</td></tr></table>
</Center>
</body>
</html>