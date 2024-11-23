<?php 
	require 'dbconnect.php';
		

	$company=$_POST['cn'];
        $email=$_POST['email'];
        $contact=$_POST['tel'];
        $address=$_POST['address'];
        $pswd=$_POST['pswd'];
        $isactive=1;
        $utype=3;
        $doi=date("d-m-y");

        $qry="INSERT INTO shipper(company_name,email,contact,address,password,isactive,utype,doi) values('".$company."','".$email."','".$contact."','".$address."','".$pswd."',$isactive,$utype,'".$doi."')";
        // echo $qry;
        $rs=mysqli_query($conn,$qry);
        if ($rs)
        {
        	// header("location:viewshipper.php");
                echo "hi";
        }
        else
        {
        	echo "Insert Error";
        }
 ?>