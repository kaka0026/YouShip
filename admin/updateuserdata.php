<?php 
require 'dbconnect.php';

$id=$_POST['id'];
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$pswd=$_POST['pswd'];
$ia=$_POST['isactive'];

$qry="UPDATE user SET firstname='$fn' , lastname='$ln' , email='$email' , contact='$contact' , address='$address' , password='$pswd' , isactive='$ia' WHERE id=$id";
// echo "$qry";
$rs=mysqli_query($conn,$qry);
if ($rs)
{
	header("location:viewuser.php");
	exit();
}
else
{
	echo "update error";
}
 ?>