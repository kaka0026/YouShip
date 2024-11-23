﻿<?php 

 ?>
<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/admincc/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:19:58 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Registration Form</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/authentication.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="theme-red">
<div class="authentication">
    <div class="container-fluid">
        <div class="row clearfix">
           
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <h4 class="l-login">Registration Form
                        <!-- <div class="msg">Register a new membership</div> -->
                    </h4>
                    <form action="process.php" class="" id="register" method="POST">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="fn">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="ln">
                                <label class="form-label">Last Name</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="Email" class="form-control" name="email">
                                <label class="form-label">Email Address</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="tel" class="form-control" name="tel">
                                <label class="form-label">Contact No</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="address" class="form-control" name="add">
                                <label class="form-label">Address</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="pswd">
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="cpswd">
                                <label class="form-label">Confirm Password</label>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                            <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                        </div> -->
                        <div >
                            <input type="submit" class="btn btn-raised waves-effect bg-red" name="submit" value="Sign UP">
                        </div>
                        <!-- <div class="m-t-10 m-b--5"> <a href="sign-in.html">You already have a membership?</a> </div> -->
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

<!-- Mirrored from thememakker.com/templates/admincc/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:19:58 GMT -->
</html>
