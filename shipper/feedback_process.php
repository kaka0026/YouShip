<?php 
	require 'dbconnect.php';

	$sid=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];
	$msgtype=2; //msg type 1 is for contact & 2 for feedback
	$isactive=1;
	$doi=date("d-m-y H:i:s");

	$qry="INSERT INTO shipper_feedback(sid,msg,msg_type,isactive,doi) values('".$sid."','".$msg."',$msgtype,$isactive,$doi)";
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