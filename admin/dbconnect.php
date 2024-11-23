<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="youship";

	// Create Connection
	$conn= mysqli_connect($servername,$username,$password);
	
	// Check Connection
	if (!$conn)
	{
		die("connection_failed".mysqli_connect_error());
	}
	else
	{
	// echo "Server Conected Sucessfully"."<br>";
	}

	$dbase=mysqli_select_db($conn,$dbname);
	// if ($dbase)
	// {
	// 	echo "database selected"."<br>";
	// }
	// else
	// {
	// 	echo "database error"."<br>";
	// }
	if (!$dbase)
	{
		echo "database error"."<br>";
	}
 ?>