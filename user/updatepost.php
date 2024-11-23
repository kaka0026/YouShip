<?php 
	require 'dbconnect.php';
	session_start();

	$id=$_POST['id'];
	$des=$_POST['des'];
	$dep=$_POST['dep'];
	$del=$_POST['del'];
	$date=$_POST['date'];

	$qry="UPDATE user_req SET description='$des', from_add='$dep', to_add='$del', date='$date' WHERE id=$id";
	$rs=mysqli_query($conn,$qry);
	// echo "$qry";
	if ($rs)
	{
		header("location:viewpost.php");
	}
	else
	{
		echo "Update Error";
	}
 ?>