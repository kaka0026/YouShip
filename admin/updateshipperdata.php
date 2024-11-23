<?php 
require 'dbconnect.php';

$id=$_POST['id'];
$cn=$_POST['cn'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$pswd=$_POST['pswd'];
$ia=$_POST['isactive'];

$qry="UPDATE shipper SET company_name='$cn' , email='$email' , contact='$contact' , address='$address' , password='$pswd' , isactive='$ia' WHERE id=$id";
// echo "$qry";
$rs=mysqli_query($conn,$qry);
if ($rs)
{
	header("location:viewshipper.php");
	exit();
}
else
{
	echo "update error";
}
 ?>