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
    
    <!-- Main Header-->
    <?php require 'header.php';?><!--End Main Header -->
    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1>View Posts</h1>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<div class="bread-crumb text-center">
                <a href="index.php">Home</a><span class="fa fa-angle-right"></span>
                <a href="view_post.php" class="current">View Posts</a>
            </div>
        </div>
    </div>
    
    
    <!--Services Section / Style Three-->
    <section class="services-section style-three">
    	<div class="auto-container">
            
            <div class="row clearfix">

            	
                <!--Default Service Block-->
                <?php 
                    $qry="SELECT * FROM req_quote WHERE isactive=1";
                    $rs=mysqli_query($conn,$qry);
                ?>
                <form method="post">
                <table class="table table-striped">
                    <tr>
                        <thead>
                            <style type="text/css">
                                thead td
                                {
                                    font-weight: 550 !important;
                                }
                            </style>
                            <td>ID</td>
                            <td>User Name</td>
                            <td>Description</td>
                            <td>Departure Location</td>
                            <td>Deliver Location</td>
                            <td>Date</td>
                            <td align="center">BID</td>
                        </thead>
                    </tr>

                    <?php 
                        if (mysqli_num_rows($rs)>0)
                        {
                            while ($row=mysqli_fetch_assoc($rs))
                            {
                                $uid=$row['user_id'];
                                // echo $uid;
                                $qry1="SELECT * FROM user WHERE id=$uid";
                                $rs1=mysqli_query($conn,$qry1);
                                $row1=mysqli_fetch_assoc($rs1);
                    ?>            
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row1['firstname']?>&nbsp&nbsp<?php echo $row1['lastname'] ?></td>
                                        <td><?php echo $row['description'] ?></td>
                                        <td><?php echo $row['from_add'] ?></td>
                                        <td><?php echo $row['to_add'] ?></td>
                                        <td><?php echo $row['date'] ?></td>
                                        <td align="center"><a href="bid.php?id=<?php echo $row['id'] ?>">BID</a></td>
                                    </tr>
                                </tbody>
                    <?php
                            }
                        }
                     ?>
                </table>
                </form>
            </div>
            
        </div>
    </section>
    
    
    <!--Fun Facts Section / Style Two-->
    <section class="fun-fact-section style-two">
        <div class="fact-counter">
            <div class="auto-container clearfix">
            
                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-trophy-1"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="0">0</span></div>
                        <h4 class="counter-title">Tropies</h4>
                    </div>
                </div>
                
                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="2">0</span></div>
                        <h4 class="counter-title">Country</h4>
                    </div>
                </div>
                
                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-truck-2"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="4">0</span></div>
                        <h4 class="counter-title">Transport</h4>
                    </div>
                </div>
                
                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-avatar"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="6">0</span></div>
                        <h4 class="counter-title">Worker</h4>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    
    
    <!--Default Section-->
    <section class="default-section">
    	<div class="auto-container">
            <div class="row clearfix">
            	
                <!--Text Column-->
                <div class="column text-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<div class="title-box">
                        	<h4>Why Choose us</h4>
                            <h2>Helping and providing best service to our client.</h2>
                        </div>
                        <div class="text">
                        	<p> Any of the condition you could take help from YouShip and then also if you have any issues and you face any of the problem in the whole process of shifting, then at that time also you have the help from YouShip they are present there to just let you shift and clear all your problems regarding shifting work.</p>
                            <p>So I think after you choose them as you shifting company you would not face any problem in the whole shifting process and everything would be completed just on time, so be relax and ask them to provide you all the details related to the shifting.</p>
                        <div class="link-box"><a href="#" class="theme-btn btn-style-one">Learn More</a></div>
                    </div>
                </div>
                
                <!--Accordions Column-->
                <div class="column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<!--Accordion Box-->
                        <ul class="accordion-box">
                            
                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> Best Company Ever</div>
                                <div class="acc-content current">
                                    <div class="content clearfix">
                                        <figure class="image"><img src="images/resource/featured-thumb-1.jpg" alt=""></figure>
                                        <p>People face many trouble to tranport items and findiing shipment company so we provide all services.</p>
                                    </div>
                                </div>
                            </li>
                            
                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> Awsome feature with Great Service</div>
                                <div class="acc-content">
                                    <div class="content clearfix">
                                        <figure class="image"><img src="images/resource/featured-thumb-1.jpg" alt=""></figure>
                                        <p>we provide lots of services like shipping, packing, internatinal shipping, bidding system.</p>
                                    </div>
                                </div>
                            </li>
                            
                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> Big Transport service in history</div>
                                <div class="acc-content">
                                    <div class="content clearfix">
                                        <figure class="image"><img src="images/resource/featured-thumb-1.jpg" alt=""></figure>
                                        <p>In 2020 YOU SHIP goes online with youship.com. A year later customers can use the website to track packages.</p>
                                    </div>
                                </div>
                            </li>
                            
                        </ul><!--End Accordion Box-->
                    </div>
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