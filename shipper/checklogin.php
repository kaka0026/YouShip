<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/authentication.css">
	<link rel="stylesheet" href="assets/css/all-themes.css" />
</head>
<body>
	<?php 
	require 'dbconnect.php';
	session_start();
	// var_dump($_POST);
	if (!isset($_POST["submit"]))
	{
		header("location:login.php");
		exit();
	}

	$us=$_POST['u_name'];
	$ps=$_POST['pswd'];
	$qry="SELECT * FROM shipper WHERE email='".$us."' AND password='".$ps."'  AND isactive=1;";

	// echo "$qry";
	$result= mysqli_query($conn,$qry);
	if (mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_assoc($result);
		if($row['utype'] == 3)
		{
			$id=$row['id'];
			$cn=$row['company_name'];
			$_SESSION['id']=$id;
			$_SESSION['cn']=$cn;
			$_SESSION['user']=1;
			$_SESSION['utype']=3;
			if (isset($_POST['rememberme']))
			{
				setcookie("user", $us, time() + (86400*30), "/");
				setcookie("pass", $ps, time() + (86400*30), "/");
			}
			header("location:index.php");
			exit();	
		}
		else
		{
			echo "Login with Valid ID & PASSWORD";
			exit();
		}
	}
	else
	{
		echo "<br>","Login with Valid ID & PASSWORD";
	?>
		<br><a href="login.php" class="btn btn-raised waves-effect bg-red">Go to Login Page</a>
	<?php
		exit();
	}
	?>
</body>
</html>