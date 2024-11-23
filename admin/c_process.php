<?php 
	require 'dbconnect.php';
	// var_dump($_POST);
	$iname=$_POST['name'];
	$qty=$_POST['qty'];
	$des=$_POST['des'];
	$wt=$_POST['wt'];
	$isactive=1;
	$doi=date("d-m-y H:i:s");

	$query="INSERT into category(itemname,quantity,description,weight,isactive,doi) VALUES('".$iname."','".$qty."','".$des."','".$wt."','".$isactive."','".$doi."')";
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
		header("location:viewcategory.php");
		exit();
	}
 ?>