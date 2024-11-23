<?php 
	require 'dbconnect.php';

	$sid=$_POST['id'];
	// $img=$_POST['v_img'];
	$name=$_POST['v_name'];
	$des=$_POST['v_des'];
	$price=$_POST['v_price'];
	$isactive=1;
	$doi=date("d-m-y");
	if($_FILES['v_img']['name']==" ")
	{

	}
	else
	{
		require 'imageupload.php';
		$image=$target_file;
	}

	$qry="INSERT INTO vehicle(sid,v_img,v_name,v_des,v_price,isactive,doi) values('".$sid."','".$image."','".$name."','".$des."','".$price."',$isactive,$doi)";
	$rs=mysqli_query($conn,$qry);
	echo $qry;

	if ($rs)
	{
		header("location:viewvehicle.php");
	}
	else
	{
		echo "Insert Error";
	}

 ?>