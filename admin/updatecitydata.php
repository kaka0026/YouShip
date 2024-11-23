<?php 
require 'dbconnect.php';

$id=$_POST['id'];
$sname=$_POST['cname'];
$ia=$_POST['isactive'];
$qry="UPDATE city SET city_name='$sname' , isactive='$ia' WHERE id=$id";
echo "$qry";
$rs=mysqli_query($conn,$qry);
if ($rs)
{
	header("location:viewcity.php");
	exit();
}
else
{
	echo "update error";
}
 ?>