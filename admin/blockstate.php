<?php 
	require 'dbconnect.php';
	// var_dump($_GET);
	$id=$_GET['id'];
	$ia=$_POST['isactive'];
	$qry="SELECT * FROM state WHERE id=$id";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);
	$ia=$row['isactive'];
	if ($ia==1)
	{
		$qry="UPDATE state SET isactive=0 WHERE id=$id";
	}
	else
	{
		$qry="UPDATE state SET isactive=1 WHERE id=$id";
	}
	$rs=mysqli_query($conn,$qry);
	if ($rs)
	{
		header("location:viewstate.php");
	}
	else
	{
		echo "fail";
	}
 ?>