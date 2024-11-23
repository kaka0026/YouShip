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
			$msgtype=2; //msg type 1 is for contact & 2 for feedback
			$isactive=1;
			$doi=date(dd-mm-yyyy);

			$qry="INSERT INTO user_feedback(uid,email,msg,msg_type,isactive,doi) values('".$uid."','".$email."','".$msg."',$msgtype,$isactive,$doi)";
			$rs=mysqli_query($conn,$qry);
			echo $qry;

			if ($rs)
			{
				header("location:feedback.php");
			}
			else
			{
				echo "Insert Error";
	?>
			<br>&nbsp&nbsp&nbsp&nbsp<a href="feedback.php" class="theme-btn btn-style-one" style="height: 30px; width: 80px; padding: 0 0 20px 18px;">Back</a>

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
			$msgtype=2; //msg type 1 is for contact & 2 for feedback
			$isactive=1;
			$doi=date(dd-mm-yyyy);

			$qry="INSERT INTO user_feedback(uid,email,msg,msg_type,isactive,doi) values('".$uid."','".$email."','".$msg."',$msgtype,$isactive,$doi)";
			$rs=mysqli_query($conn,$qry);
			echo $qry;

			if ($rs)
			{
				header("location:feedback.php");
			}
			else
			{
				echo "Insert Error";
		?>
			<br>&nbsp&nbsp&nbsp&nbsp<a href="feedback.php" class="theme-btn btn-style-one" style="height: 30px; width: 80px; padding: 0 0 20px 18px;">Back</a>

		<?php
			}

		?>	

</body>
</html>
<?php 
	require 'dbconnect.php';

	
	}

 ?>