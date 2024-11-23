<?php 
require 'dbconnect.php';
session_start();
$id=$_SESSION["id"];
$qry="SELECT * FROM user WHERE id='$id'";
$rs=mysqli_query($conn,$qry);
$fetch=mysqli_fetch_assoc($rs);
$pswd=$fetch['password'];


if (isset($_POST['submit']))
{
    $current=$_POST['opswd'];
    $new=$_POST['npswd'];
    $confirm=$_POST['cpswd'];

    if ($current==$pswd)
    {
        if ($new==$confirm)
        {
            $query="UPDATE user set password='$new' WHERE id='$id'";
            $result=mysqli_query($conn,$query);
            if ($query)
            {
                header("location:index.php");
                // echo "Your Password Changed Successfully";
?>
                <!-- <input type="submit" name="submit"  value="Go to Login Page"> -->
                <!-- <button><a href="index.php" class="btn btn-raised waves-effect bg-red">Go To Login Page</a></button> -->
<?php
            }
        }
        else
        {
            echo "Your password don't match";
        }
    }
    else
    {
        echo "Old Password Isn't Correct";
    }
}
 ?>

<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/admincc/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:17:02 GMT -->
<head>
<title>Change Password</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/authentication.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />
<link rel="stylesheet" href="css/flaticon.css" />
</head>

<body class="theme-red">
<div class="authentication">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-5 col-md-12 col-sm-12">
				<div class="card">
				    <h4 class="l-login">Change Password</h4>
                    <form  class="" id="sign_in"  method="POST">
                       <!--  <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" class="form-control" name="email">
                                <label class="form-label">Email address</label>
                            </div>
                        </div> -->
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="opswd"   >
                                <label class="form-label">Old Password</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="npswd">
                                <label class="form-label">New Password</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="cpswd">
                                <label class="form-label">Confirm Password</label>
                            </div>
                        </div>
                        <button class="btn btn-raised waves-effect bg-red flaticon-arrows-2">
                            <span><a href="login.php" style="color:white">Go To Home Page</a></span>
                        </button>
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<!-- for space -->
                        <input type="submit" name="submit" class="btn btn-raised waves-effect bg-red" value="Change Password">
                        
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
</body>

<!-- Mirrored from thememakker.com/templates/admincc/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:17:03 GMT -->
</html>
