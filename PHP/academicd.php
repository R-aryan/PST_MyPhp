<?php

$br=$_POST['b'];
$sem=$_POST['s'];
session_start();
$_SESSION['branch']=$br;
$_SESSION['semester']=$sem;
echo"<center>***********ACADMEIC DETAILS********";
echo"<table border = '2'><tr><td>YOUR NAME IS </td><td>".$_SESSION['name']."</td></tr>";
echo"<tr><td>YOUR SAP.ID IS </td><td>".$_SESSION['sap']."</td></tr>";
echo"<tr><td colspan='2'>******YOUR PERSONAL DETAILS********</td><td></td></tr>";
echo"<tr><td>YOUR MOBILE.NO IS </td><td>".$_SESSION['mobile']."</td></tr>";
echo"<tr><td>YOUR email.id IS </td><td>".$_SESSION['email']."</td></tr>";
echo"<tr><td colspan='2'>*******YOUR profssional DETAILS********</td><td></td></tr>";
echo"<tr><td>YOUR branch IS </td><td>".$_SESSION['branch']."</td></tr>";
echo"<tr><td>YOUR semester IS </td><td>".$_SESSION['semester']."</td></tr></table></center>";



?>