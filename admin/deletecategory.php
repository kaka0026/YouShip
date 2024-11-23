<?php 
	require 'dbconnect.php';
	// var_dump($_GET);
	$id=$_GET['id'];
	$ia=$_POST['isactive'];
	$qry="SELECT * FROM category WHERE id=$id";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);
	$ia=$row['isactive'];
	if ($ia==1 || $is==0)
	{
		$qry="UPDATE category SET isactive=2 WHERE id=$id";
	}
	
	$rs=mysqli_query($conn,$qry);
	if ($rs)
	{
		header("location:viewcategory.php");
	}
	else
	{
		echo "fail";
	}
 ?>