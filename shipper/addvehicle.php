<?php 
    require 'dbconnect.php';
    session_start();
    $id=$_SESSION['id']
 ?>
 <!DOCTYPE html>
<html>

<!-- Mirrored from world5.commonsupport.com/html/transpo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2019 06:29:28 GMT -->
<head>
<meta charset="utf-8">
<title>YouShip - Transport and Logistics</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <?php require 'header.php';?>
    <!--End Main Header -->
    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1>Add Vehicle</h1>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<div class="bread-crumb text-center">
                <a href="index.php">Home</a><span class="fa fa-angle-right"></span>
                <a href="#" class="current" style="color: inherit; cursor: default;">Manage Vehicle</a><span class="fa fa-angle-right"></span>
                <a href="#" class="current">Add Vehicle</a></div>
        </div>
    </div>
    
    
    <!--Map Section / Style Two-->
    <!-- <section class="map-section style-two"> -->
        <!--Map Container-->
        <!-- <div class="auto-container"> -->
            <!--Map Canvas-->
    <!--         <div class="map-canvas"
                data-zoom="10"
                data-lat="23.820208"
                data-lng="90.413266"			  
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Dhaka"
                data-content="Dhaka 1206, Bangladesh<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
            
        </div>
    </section> -->
    
    
    <!--Contact Section-->
    <section class="contact-section no-padd-top">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Form Column-->
                <div class="column form-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <style type="text/css">
                        .contact-section .form-column
                        {
                            margin-left: 20px !important;
                        }
                    </style>
                    <h2 align="center">Vehicle Details</h2>
                    <!--Default Form-->
                    <div class="default-form style-two">
                        <form method="post" action="vehicle_process.php" id="contact-form" enctype="multipart/form-data">
                            
                            <div class="row clearfix">
                                <input type="hidden" name="id" value="<?php echo "$id" ?>">


                                <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <h3>Vehicle Image:</h3><input type="file" name="v_img" placeholder="Vehicle Image" required="">
                                </div>
                                <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <input type="text" name="v_name" placeholder="Vehicle Name">
                                </div>
                                <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <textarea name="v_des" placeholder="Vehicle Description"></textarea>
                                </div>
                                 <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <style type="text/css">
                                        .default-form.style-two input[type="number"]
                                        {
                                            border:1px solid #f7f7f7;
                                            background-color: #f7f7f7;
                                            height: 54px;
                                            width: 100%;
                                            padding: 14px 15px;
                                        }
                                        input::-webkit-inner-spin-button
                                        {
                                            -webkit-appearance: none;
                                        }
                                    </style>
                                    <input type="number" name="v_price" placeholder="Vehicle Price">
                                </div>
                            </div>
                            
                            <div><input type="submit" name="submit" class="theme-btn btn-style-one"></div>
                            
                        </form>
                    </div>
                </div>
                
                <!--Info Column-->
                <!-- <div class="column info-column col-lg-5 col-md-5 col-sm-6 col-xs-12">
                	<h2>Our Address</h2>
                    <div class="info-box">
                    	<div class="desc-text">Lorem ipsum dolor sit amet, placerat corrumpit eum ei. Qui id illum nullam volutpatvix te posse malis virisci.</div>
                        <ul class="contact-info">
                            <li><div class="icon"><span class="flaticon-location"></span></div><strong>Address</strong>Ahmedabad</li>
                            <li><div class="icon"><span class="flaticon-envelope-1"></span></div><strong>Email</strong>info@youship.com</li>
                            <li><div class="icon"><span class="flaticon-technology-2"></span></div><strong>Phone</strong>+91-123456789</li>
                        </ul>
                    </div>
                </div> -->
                
            </div>
        </div>
    </section>
    
    
    <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(images/background/image-5.jpg);">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                
                	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column">
                        <div class="footer-widget about-widget">
                            <h2>About Us</h2>
                            <div class="text">
                            	<p>You are really in tension about completing all your work regarding shifting, then you must stop taking tension at this point only because you have the fastest and the simplest solution for the shifting that is YouShip. who help people regarding the whole shifting scenario and they manage all the things for you.</p>
                            </div>
                            
                            <div class="newsletter-form">
                                <form method="post" action="http://world5.commonsupport.com/html/transpo/contact.php">
                                    <div class="form-group">
                                        <input type="email" name="useremail" value="" placeholder="Your Email" required>
                                        <button type="submit" class="theme-btn"><span class="flaticon-send-symbol"></span></button>
                                    </div>
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 column">
                        <div class="footer-widget latest-news">
                        	<!-- <h2>Recent News</h2> -->
                            <!--News Item-->
                            <!-- <div class="news-item"> -->
                                <!-- <h4><a href="#" class="news-title">Why you needto choose transpo service</a></h4> -->
                                <!-- <div class="update-time">24 Sep, 2016</div> -->
                            <!-- </div> -->
                            <!--News Item-->
                            <!-- <div class="news-item"> -->
                                <!-- <h4><a href="#" class="news-title">Why you needto choose transpo service</a></h4> -->
                                <!-- <div class="update-time">24 Sep, 2016</div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                    	<div class="footer-widget links-widget">
                        <h2>Quick Links</h2>
                            <!-- <ul> -->
                                <li><a href="../user/reg.php">Register an account</a></li>
                                <li><a href="../user/login.php">Login with account</a></li>
                                <li><a href="reg.php">Register an shipper account</a></li>
                                <li><a href="login.php">Login with shipper account</a></li>
                                <li><a href="faq.php">FAQ &amp; Help Center</a></li>
                                <!-- <li><a href="#">Careers</a></li> -->

                            <!-- </ul> -->

                        </div>
                    </div>
                    
                    <!--Footer Column-->
                    <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 column">
                    	<div class="footer-widget gallery-widget">
                            <h2>Gallery</h2>	
                            <div class="clearfix">
                                <figure class="image"><a href="images/resource/footer-gallery-1.jpg" class="lightbox-image" title="Caption Here"><img src="images/resource/footer-gallery-1-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/footer-gallery-2.jpg" class="lightbox-image" title="Caption Here"><img src="images/resource/footer-gallery-2-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/footer-gallery-3.jpg" class="lightbox-image" title="Caption Here"><img src="images/resource/footer-gallery-3-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/footer-gallery-4.jpg" class="lightbox-image" title="Caption Here"><img src="images/resource/footer-gallery-4-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/footer-gallery-1.jpg" class="lightbox-image" title="Caption Here"><img src="images/resource/footer-gallery-5-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/footer-gallery-2.jpg" class="lightbox-image" title="Caption Here"><img src="images/resource/footer-gallery-6-1.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div> -->
                    
                    
                </div>
                
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <!--Copyright-->
                	<!-- <div class="pull-left">
                    	<div class="copyright">&copy; Copyrights 2016 <a href="http://themeforest.net/user/template_path/portfolio" target="_blank">Template_path</a>. All rights reserved</div>
                    </div> -->
                    <!--Social Links-->
                    <div class="pull-right">
                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-airplane-1"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>

<!-- Mirrored from world5.commonsupport.com/html/transpo/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2019 06:36:08 GMT -->
</html>