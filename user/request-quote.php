<?php 
    require 'dbconnect.php';
    session_start();
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
    
    <?php require 'nav.php';?>    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1>Request Quote</h1>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<div class="bread-crumb text-center">
                <a href="index.php">Home</a><span class="fa fa-angle-right"></span>
                <a href="request-quote.php" class="current">Request Quote</a>
            </div>
        </div>
    </div>
    
    
    <!--Request Quote Section-->
    <section class="request-quote" style="padding-top: 20px !important;">
    	<div class="auto-container">
            <div class="row clearfix">
                <?php 
                    if (!isset($_SESSION['user']))
                    {
                ?>
                        <!--Form Column-->
                        <div class="form-column col-md-8 col-sm-12 col-xs-12 pull-left">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="get-quote default-form style-two">
                                    <h1><i>Request Quote:</h1><br>
                                    <form action="quote-process.php" method="post" style="padding-bottom: 50px !important;">
                                        <div class="row clearfix">
                                            
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <input class="b" type="text" name="uname" placeholder="Name">
                                            </div>

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <input class="b" type="email" name="email" placeholder="E-mail">
                                            </div>
                                            
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <style type="text/css">
                                                    .b
                                                    {
                                                        border: 1px solid #f7f7f7;
                                                        background-color: #f7f7f7;
                                                        height: 54px !important;
                                                        width: 80% !important;
                                                        padding: 14px 15px;
                                                    }
                                                </style>
                                                <!-- <textarea class="b" name="des" placeholder="Requirement Description"></textarea> -->
                                                <input class="b" type="text" name="des" value="" placeholder="Description">
                                            </div>

                                            <div class="form-group col-md-5 col-sm-12 col-xs-12">
                                                <input type="text" name="dep" value="" placeholder="Depature Location" required>
                                            </div>
                                            
                                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                <input type="text" name="del" value="" placeholder="Deliver Location" style="width: 76.5% !important;" required>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <style type="text/css">
                                                    .date
                                                    {
                                                        width: 80% !important;
                                                        border: 1px solid #f7f7f7 !important;
                                                        background-color: #f7f7f7 !important;
                                                        width: 80% !important;
                                                        padding: 14px 15px !important;
                                                    } 
                                                    .date::-webkit-inner-spin-button,.date::-webkit-clear-button
                                                    {
                                                        display: none;
                                                        -webkit-appearance: none;
                                                    }
                                                </style>
                                                <input class="date" type="date" name="date" value="" placeholder="Date" required>
                                            </div>
                                            
                                            <input style="margin-left: 8px;" type="submit" name="submit" class="theme-btn btn-style-two" value="Submit Request">
                                        </div>                                
                                    </form>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                    else
                    {
                ?>
                        <!--Form Column-->
                        <div class="form-column col-md-8 col-sm-12 col-xs-12 pull-left">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="get-quote default-form style-two">
                                    <h1><i>Request Quote:</h1><br>
                                    <form action="quote-process.php" method="post" style="padding-bottom: 50px !important;">
                                        <div class="row clearfix">
                                            <?php 
                                                $id=$_SESSION['id'];
                                                $query="SELECT * from user WHERE id=$id";
                                                $result=mysqli_query($conn,$query);
                                                $row1=mysqli_fetch_assoc($result);
                                             ?>

                                            <style type="text/css">
                                                .b
                                                {
                                                    border: 1px solid #f7f7f7;
                                                    background-color: #f7f7f7;
                                                    height: 54px !important;
                                                    width: 80% !important;
                                                    padding: 14px 15px;
                                                }
                                            </style>
                                            
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <input class="b" type="text" name="name" placeholder="Name" value="<?php echo $row1['firstname']," ",$row1['lastname'] ?>">
                                            </div>

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <input class="b" type="email" name="email" placeholder="E-mail" value="<?php echo $row1['email'] ?>">
                                            </div>
                                            
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <!-- <textarea class="b" name="des" placeholder="Requirement Description"></textarea> -->
                                                <input class="b" type="text" name="des" placeholder="Description">
                                            </div>

                                            <div class="form-group col-md-5 col-sm-12 col-xs-12">
                                                <input type="text" name="dep" value="" placeholder="Depature Location" required>
                                            </div>
                                            
                                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                <input type="text" name="del" value="" placeholder="Deliver Location" style="width: 76.5% !important;" required>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <style type="text/css">
                                                    .date
                                                    {
                                                        width: 80% !important;
                                                        border: 1px solid #f7f7f7 !important;
                                                        background-color: #f7f7f7 !important;
                                                        width: 80% !important;
                                                        padding: 14px 15px !important;
                                                    } 
                                                    .date::-webkit-inner-spin-button,.date::-webkit-clear-button
                                                    {
                                                        display: none;
                                                        -webkit-appearance: none;
                                                    }
                                                </style>
                                                <input class="date" type="date" name="date" value="" placeholder="Date" required>
                                            </div>
                                            
                                            <input style="margin-left: 8px;" type="submit" name="submit" class="theme-btn btn-style-two" value="Submit Request">
                                        </div>                                
                                    </form>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                 ?>
                
                <!--Image Column-->
                <div class="image-column col-md-4 col-sm-12 col-xs-12 pull-left">
                    <figure class="image-box wow slideInLeft" data-wow-duration="1500ms"><img class="img-responsive" src="images/resource/advisor-image-2.jpg" alt=""></figure>
                </div>
                
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
                                <!-- <li><a href="reg.php">Register an shipper account</a></li>
                                <li><a href="login.php">Login with shipper account</a></li> -->
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