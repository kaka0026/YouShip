<?php 
	require 'dbconnect.php';
	session_start();

	$sid=$_SESSION['id'];

	$tid=$_GET['tid']; // view post table id

	$qry="SELECT * FROM req_quote WHERE id=$tid";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);
	$pid=$row['id'];

	$uid=$row['user_id'];
	$qry1="SELECT * from user where id=$uid";
	$rs1=mysqli_query($conn,$qry1);
	$row1=mysqli_fetch_assoc($rs1);

	$des=$row['description'];
	$price=$_GET['price'];
	$isactive=1;
	$doi=date("d-m-y H:i:s");

	$query="INSERT into bid(postid,shipperid,userid,description,price,isactive,doi) values('".$pid."','".$sid."','".$uid."','".$des."','".$price."','".$isactive."','".$doi."')";
	$result=mysqli_query($conn,$query);
	// echo $query;
	// exit();
	if ($result)
	{
		header("location:view_post.php");
	}
	else
	{
		echo "Insert Error";
	}

 ?>