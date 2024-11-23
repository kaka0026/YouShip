<?php 
require 'dbconnect.php';

$id=$_POST['id'];
$title=$_POST['title'];
$des=$_POST['des'];
$price=$_POST['price'];
$ia=$_POST['isactive'];
$qry="UPDATE package SET title='$title' , description='$des' , price='$price' , isactive='$ia' WHERE id=$id";
echo "$qry";
$rs=mysqli_query($conn,$qry);
if ($rs)
{
	header("location:viewpackage.php");
	exit();
}
else
{
	echo "update error";
}
 ?>