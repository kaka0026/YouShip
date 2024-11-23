<?php 
	require 'dbconnect.php';

	$id=$_GET['id'];
	$is=$_GET['isactive'];

	$qry="SELECT * FROM user_req WHERE id=$id";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);
	$ia=$row['isactive'];

	if ($ia==1 || $ia==0)
	{
		$qry="UPDATE user_req SET isactive=2 WHERE id=$id";
	}

	$rs=mysqli_query($conn,$qry);
	if ($rs) 
	{
		header("location:viewpost.php");
	}
	else
	{
		echo "Deletion Error";
	}
 ?>