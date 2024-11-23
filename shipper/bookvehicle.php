<?php
require 'dbconnect.php';
session_start();
$vid=$_POST['id'];
$sid=$_POST['sid'];
$date=date('y-m-d');
$qry="INSERT INTO bookvehicle(v_id,u_id,s_id,bookdate) values($vid,'".$_SESSION['id']."',$sid,'".$date."')";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "inserted";
}
else
{
	echo "error";
}
?>