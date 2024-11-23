<?php 
    session_start();
    if (isset($_SESSION['user']) && $_SESSION['utype']==2)
    {
        header("location:index.php");
        // exit();
    }
    elseif(isset($_SESSION['user']) && $_SESSION['utype']==1)
    {
        header("location:profile.php");
        exit();  
    }
    if (isset($_COOKIE['user']))
    {
        $un=$_COOKIE['user'];
        $pw=$_COOKIE['pass'];
    }
    else
    {
        $un="";
        $pw="";
    }
 ?>
<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/admincc/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:17:02 GMT -->
<head>
<title>Admin Login</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/authentication.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />
</head>

<body class="theme-red">
<div class="authentication">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="card">
				    <h4 class="l-login">Admin Login</h4>
                    <form action="checklogin.php" class="" id="sign_in"  method="POST">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="u_name" value="<?php echo "$un" ?>">
                                <label class="form-label">Username</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="pswd" value="<?php echo "$pw" ?>">
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        
                        <input type="submit" name="submit" class="btn btn-raised waves-effect bg-red" value="Login">
                        <!-- <a href="checklogin.php" class="btn btn-raised waves-effect bg-red">Login</a> -->
                        <a href="reg.php" class="btn btn-raised waves-effect">Register</a>
                       
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
