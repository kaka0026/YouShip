<?php 
	require 'dbconnect.php';
	// var_dump($_GET);
	$id=$_GET['id'];
	$fn=$_POST['firstname'];
	$ln=$_POST['lastname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$pswd=$_POST['password'];
	$ia=$_POST['isactive'];
	$qry="SELECT * FROM user WHERE id=$id";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);
	$ia=$row['isactive'];
	if ($ia==1)
	{
		$qry="UPDATE user SET isactive=0 WHERE id=$id";
	}
	else
	{
		$qry="UPDATE user SET isactive=1 WHERE id=$id";
	}
	$rs=mysqli_query($conn,$qry);
	if ($rs)
	{
		header("location:viewuser.php");
	}
	else
	{
		echo "fail";
	}
 ?>