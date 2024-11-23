<?php 
	require 'dbconnect.php';
	// var_dump($_POST);
	$first=$_POST['fn'];
	$last=$_POST['ln'];
	$email=$_POST['email'];
	$address=$_POST['add'];
	$tel=$_POST['tel'];
	$pswd=$_POST['pswd'];
	$cpswd=$_POST['cpswd'];
	$isactive=1;
	$utype=1;
	$doi=date("d-m-y H:i:s");

	if ($pswd!=$cpswd)
	{
		echo "pswd & cpswd not same..."."<br>";
		exit();
	}

	$query="INSERT into user(firstname,lastname,email,contact,address,password,isactive,utype,doi) VALUES('".$first."','".$last."','".$email."','".$address."','".$tel."','".$pswd."','".$isactive."','".$utype."','".$doi."')";
	// echo $query."<br>"."<br>";

	$result=mysqli_query($conn,$query);
	// if ($result)
	// {
	// 	echo "Insert Sucess..."."<br>";
	// }
	// else
	// {
	// 	echo "Insert error..."."<br>";
	// }
	if (!$result)
	{
		echo "Insert  error";
	}
	else
	{
		header("location:viewuser.php");
		exit();
	}
 ?>