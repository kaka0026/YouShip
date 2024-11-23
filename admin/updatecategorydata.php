<?php 
require 'dbconnect.php';

$id=$_POST['id'];
$iname=$_POST['iname'];
$qty=$_POST['qty'];
$des=$_POST['des'];
$wt=$_POST['wt'];
$ia=$_POST['isactive'];

$qry="UPDATE category SET itemname='$iname' , quantity='$qty' , description='$des' , weight='$wt' , isactive='$ia' WHERE id='$id'";

echo "$qry";
$rs=mysqli_query($conn,$qry);
if ($rs)
{
	header("location:viewcategory.php");
	exit();
}
else
{
	echo "update error";
}
 ?>