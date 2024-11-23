<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/revolution-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>

	<?php 
		require 'dbconnect.php';
		session_start();
		if (isset($_SESSION['user'])) 
		{
			$uid=$_POST['id'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$msg=$_POST['msg'];
			$msgtype=1; //msg type 1 is for contact & 2 for feedback
			$isactive=1;
			$doi=date("d-m-y H:i:s");

			$qry="INSERT INTO user_feedback(uid,email,msg,msg_type,isactive,doi) values('".$uid."','".$email."','".$msg."','".$msgtype."','".$isactive."','".$doi."')";
			$rs=mysqli_query($conn,$qry);
			echo $qry;

			if ($rs)
			{
				header("location:contact.php");
			}
			else
			{
				echo "Insertion Error";
	?>
			<br>&nbsp&nbsp&nbsp&nbsp<a href="contact.php" class="theme-btn btn-style-one" style="height: 30px; width: 80px; padding: 0 0 20px 18px;">Back</a>

		<?php
			}	
		}
		else
		{
			$uid=0;
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$msg=$_POST['msg'];
			$msgtype=1; //msg type 1 is for contact & 2 for feedback
			$isactive=1;
			$doi=date("d-m-y H:i:s");

			$qry="INSERT INTO user_feedback(uid,email,msg,msg_type,isactive,doi) values('".$uid."','".$email."','".$msg."','".$msgtype."','".$isactive."','".$doi."')";
			$rs=mysqli_query($conn,$qry);
			// echo $qry;

			if ($rs)
			{
				header("location:contact.php");
			}
			else
			{
				echo "Insertion Error";
		?>
				<br>&nbsp&nbsp&nbsp&nbsp<a href="contact.php" class="theme-btn btn-style-one" style="height: 30px; width: 80px; padding: 0 0 20px 18px;">Back</a>

		<?php
			}
		}

		?>	

</body>
</html>