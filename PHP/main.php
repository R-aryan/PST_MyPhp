<?php
session_start();
if(isset($_SESSION['name']))
{
	echo"WELCOME:".$_SESSION['name'];
}
echo"  ";
?>


<html>
<body>
<center>
<table border="2"><tr><td>
<center>SELECT OPTIONS</center>
<table border="0">
<tr><td><form action= "purchase.php"><input type="submit" value="PURCHASE"></form></td>
<td><form action= "add item.html"><input type="submit" Value="ADD ITEM"></form></td></tr>
<tr><td><form action= "member_register.html"><input type="submit" value="REGISTER"></form></td>
<td><form action="list.php"><input type="submit" Value="LIST ITEM"></form></td></tr>
<tr><td><form action= "signin.html"><input type="submit" value="LOGIN"></form></td>
<td><form action="mlogout.php"><input type="submit" Value="Logout"></form></td></tr>
</table>
</form>
</td></tr></table>
</Center>
</body>
</html>

