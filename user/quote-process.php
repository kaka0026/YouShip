<?php 
	require 'dbconnect.php';
	session_start();

	
	$qry="SELECT * FROM user WHERE isactive=1";
	$rs=mysqli_query($conn,$qry);
	// echo "$qry";

	if (isset($_POST['submit']))
	{
		$uid=$_SESSION['id'];
		$name=$_POST['uname'];
		$email=$_POST['email'];
		$des=$_POST['des'];
		$dep=$_POST['dep'];
		$del=$_POST['del'];
		$date=$_POST['date'];
		$isactive=1;
		$doi=date("d-m-y H:i:s");


		$query="INSERT into req_quote(user_id,name,email,description,from_add,to_add,date,isactive,doi) values('".$uid."','".$name."','".$email."','".$des."','".$dep."','".$del."','".$date."','".$isactive."','".$doi."')";
		
		$result=mysqli_query($conn,$query);
		echo $query;
		if (!$result)
		{
			echo "INSERT ERROR";
		}
		else
		{
			header("location:request-quote.php");
			exit();
		}
	}
	else
	{
		echo "ERROR";
	}
 ?>