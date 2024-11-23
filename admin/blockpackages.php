<?php 
require 'dbconnect.php';

$id=$_GET['id'];
$ia=$_GET['isactive'];
$qry="SELECT * FROM package WHERE id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$ia=$row['isactive'];
if ($ia==1)
{
	$qry="UPDATE package SET isactive=0 WHERE id=$id";
}
else
{
	$qry="UPDATE package SET isactive=1 WHERE id=$id";	
}
$rs=mysqli_query($conn,$qry);
if ($rs)
{
	header("location:viewpackages.php");
	exit();
}
else
{
	echo "Delete error";
}
 ?>