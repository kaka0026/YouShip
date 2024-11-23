<?php 
	require 'dbconnect.php';
	// var_dump($_GET);
	$id=$_GET['id'];
	$des=$_POST['description'];
	$price=$_POST['price'];
	$ia=$_POST['isactive'];


	$qry="SELECT * FROM bid WHERE id=$id";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);
	$ia=$row['isactive'];
	if ($ia==1 || $is==0)
	{
		$qry="UPDATE bid SET isactive=2 WHERE id=$id";
	}
	
	$rs=mysqli_query($conn,$qry);
	if ($rs)
	{
		header("location:viewbid.php");
	}
	else
	{
		echo "fail";
	}
 ?>