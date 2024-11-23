<?php 
	require 'dbconnect.php';
		

		$first=$_POST['fn'];
        $last=$_POST['ln'];
        $email=$_POST['email'];
        $contact=$_POST['tel'];
        $address=$_POST['address'];
        $pswd=$_POST['pswd'];
        $isactive=1;
        $doi=date("d-m-y");

        $qry="INSERT INTO user(firstname,lastname,email,contact,address,password,isactive,doi) values('".$first."','".$last."','".$email."','".$contact."','".$address."','".$pswd."',$isactive,'".$doi."')";
        // echo $qry;
        $rs=mysqli_query($conn,$qry);
        if ($rs)
        {
        	header("location:viewuser.php");
        }
        else
        {
        	echo "Insert Error";
        }
 ?>