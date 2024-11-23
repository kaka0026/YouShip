<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<!-- Custom Css -->
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/authentication.css">
	<link rel="stylesheet" href="assets/css/all-themes.css" />
</head>
<body>
<?php 
	require 'dbconnect.php';
	session_start();
	// var_dump($_POST);
	

	if (!isset($_POST['submit']))
    {
        header("location:login.php");
        exit();
    }
    else
    {
        $us=$_POST['u_name'];
        $ps=$_POST['pswd'];
        $qry="SELECT * FROM user WHERE email='".$us."' AND password='".$ps."'  AND isactive=1;";

        // echo "$qry";
        $result= mysqli_query($conn,$qry);

        if (mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_assoc($result);
            if($row['utype'] == 1)
            {
                $id=$row['id'];
                $fn=$row['firstname'];
                $_SESSION['id']=$id;
                $_SESSION['fn']=$fn;
                $_SESSION['user']=1;
                $_SESSION['utype']=1;
                if (isset($_POST['rememberme']))
                {
                    setcookie("user", $us, time() + (86400*30), "/");
                    setcookie("pass", $ps, time() + (86400*30), "/");
                    
                }
                require 'PHPMailer/PHPMailerAutoload.php';
                // header("location:index.php");
                exit(); 
            }
        }
        else
        {
            echo "<br>&nbsp&nbsp&nbsp Login with Valid ID & PASSWORD";
?>
			<br>&nbsp&nbsp&nbsp<a href="login.php" class="btn btn-raised waves-effect bg-red">Go TO Login Page</a>
<?php
			exit();
        }
    }
?>
</body>
</html>