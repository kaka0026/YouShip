<?php 
require 'dbconnect.php';

$sid=$_POST['id'];
// $img=$_POST['v_img'];
$name=$_POST['title'];
$des=$_POST['des'];
$price=$_POST['price'];
// $ia=$_POST['isactive'];
$qry="UPDATE vehicle SET v_name='$name' , v_des='$des' , v_price='$price'  WHERE id=$sid";
echo "$qry";
$rs=mysqli_query($conn,$qry);
if ($rs)
{
	header("location:viewvehicle.php");
	exit();
}
else
{
	echo "update error";
}
 ?>