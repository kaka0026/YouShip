<?php 
	require 'dbconnect.php';
	// var_dump($_GET);
	$id=$_GET['id'];
	$des=$_POST['description'];
	$dep=$_POST['from_add'];
	$del=$_POST['to_add'];
	$date=$_POST['date'];
	$ia=$_POST['isactive'];
	

	$qry="SELECT * FROM user_req WHERE id=$id";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);
	$ia=$row['isactive'];
	if ($ia==1)
	{
		$qry="UPDATE user_req SET isactive=0 WHERE id=$id";
	}
	else
	{
		$qry="UPDATE user_req SET isactive=1 WHERE id=$id";
	}
	$rs=mysqli_query($conn,$qry);
	if ($rs)
	{
		header("location:viewpost.php");
	}
	else
	{
		echo "fail";
	}
 ?>