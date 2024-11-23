<?php 
require 'dbconnect.php';

$id=$_POST['id'];
$sname=$_POST['sname'];
$ia=$_POST['isactive'];
$qry="UPDATE state SET state_name='$sname' , isactive='$ia' WHERE id=$id";
echo "$qry";
$rs=mysqli_query($conn,$qry);
if ($rs)
{
	header("location:viewstate.php");
	exit();
}
else
{
	echo "update error";
}
 ?>