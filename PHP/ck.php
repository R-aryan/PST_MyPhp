<?php

$u=$_POST['n'];
$p=$_POST['id'];
setcookie("name",$u,time()+60);// used for setting expiration time of data in cookies
setcookie("sap",$p);
echo"cookie saved";
echo time();
?>