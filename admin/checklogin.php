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
		$qry="SELECT * FROM user WHERE email='".$us."' AND password='".$ps."'  AND isactive=1;";

		// echo "$qry";
		$result= mysqli_query($conn,$qry);
		if (mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_assoc($result);
			if($row['utype'] == 2)
			{
				$id=$row['id'];
				$fn=$row['firstname'];
				$_SESSION['aid']=$id;
				$_SESSION['fn']=$fn;
				$_SESSION['user']=1;
				$_SESSION['utype']=2;

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
				echo "Login with Admin ID & PASSWORD";
				exit();
			}
		}
		else
		{
?>&nbsp&nbsp&nbsp
		<?php	echo "Login with Admin ID & PASSWORD";
		?>
		<br>&nbsp&nbsp&nbsp&nbsp<a href="login.php" class="btn btn-raised waves-effect bg-red" style="color: white;">Go to Login Page</a>
	<?php
			exit();
		}
	 ?>
</body>
</html>