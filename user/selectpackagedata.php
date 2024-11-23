<?php 
	require 'dbconnect.php';
	$sid=$_POST['sid'];
	$uid=$_POST['uid'];
	$des=$_POST['des'];
	$msg=$_POST['msg'];
	$isactive=1;
	$doi=date("d-m-y H:i:s");

	$qry="INSERT into selectpackage(sid,uid,description,msg,isactive,doi) values('".$sid."','".$uid."','".$des."','".$msg."','".$isactive."','".$doi."')";
	$rs=mysqli_query($conn,$qry);
	// echo $qry;

	if ($rs)
	{
		// echo "Insert package data successfully";
		header("location:package.php");
	}
	else
	{
		echo "FAIL";
	}
 ?>