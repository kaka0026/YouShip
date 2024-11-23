<?php 
require 'dbconnect.php';

$id=$_GET['id'];
$ia=$_GET['isactive'];
$qry="SELECT * FROM vehicle WHERE id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$ia=$row['isactive'];
if ($ia==1 || $ia==0)
{
	$qry="UPDATE vehicle SET isactive=2 WHERE id=$id";
}
$rs=mysqli_query($conn,$qry);
if ($rs)
{
	header("location:viewvehicle.php");
	exit();
}
else
{
	echo "Delete error";
}
 ?>