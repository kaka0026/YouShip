<?php 
	require 'dbconnect.php';
	// var_dump($_POST);
	$company=$_POST['cn'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$address=$_POST['add'];
	$pswd=$_POST['pswd'];
	$cpswd=$_POST['cpswd'];
	$isactive=1;
	$utype=3;
	$doi=date("d-m-y H:i:s");
	$dou=date("d-m-y H:i:s");

	if ($pswd!=$cpswd)
	{
		echo "pswd & cpswd not same..."."<br>";
		exit();
	}

	$query="INSERT into shipper(company_name,email,contact,address,password,isactive,utype,doi,dou) VALUES('".$company."','".$email."','".$tel."','".$address."','".$pswd."','".$isactive."','".$utype."','".$doi."','".$dou."')";
	echo $query."<br>"."<br>";

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
		header("location:login.php");
		exit();
	}
 ?>