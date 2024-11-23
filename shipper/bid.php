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
<link href="css/flaticon.css" rel="stylesheet">
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
        	<h1>BIDDING PAGE</h1>
        </div>
    </section>
    
    <!--Services Section / Style Three-->
    <section class="services-section style-three">
    	<div class="auto-container">
            
            <div class="row clearfix">

            	<?php
					$sid=$_SESSION['id'];
					$tid=$_GET['id']; //   <---view post table id 

					   

					$query="SELECT * FROM req_quote WHERE id=$tid";
					$rs1=mysqli_query($conn,$query);
					$row1=mysqli_fetch_assoc($rs1);

					$uid=$row1['user_id'];
					$qry="SELECT * FROM user WHERE id=$uid";
					$rs=mysqli_query($conn,$qry);
					$row=mysqli_fetch_assoc($rs);
				?>
				<h1 align="Center">Enter Your Bid Here &nbsp<span class="flaticon-arrows-16"></span></h1>
            	<form action="bid_process.php" method="get">
	            	<div class="default-service-block col-md-11 col-sm-6 col-xs-12">
		                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
		                    <!-- <div class="icon-box"><input type="radio" style="height: 22px; width: 22px;"></div> -->
	                        <style type="text/css">
	                        	.default-service-block
	                        	{
                        				margin-left: 300px !important;
                        				height: auto !important;
	                        	}
	                            .default-service-block .inner-box
	                            {
                            		width: 50%;
	                                padding: 20px 20px 55px 35px;
	                                margin-top: 22px;
	                                margin-left: 20px;
	                            }
	                            .style-three .default-service-block .inner-box:hover
	                            {
	                            	background-color: #f7f7f7;
	                            	border: 0px; 
	                            }
	                        </style>
	                        <input style="color: black"; type="hidden" name="tid" value="<?php echo $tid ?>">
	                        <h3><?php echo "Name:" ?>&nbsp&nbsp<?php echo $row['firstname']?>&nbsp<?php echo $row['lastname'] ?></h3>
	                        <h3><?php echo "Description:"?>&nbsp&nbsp<?php echo $row1['description']?></h3>
	                        <h3><?php echo "Depature Location:"?>&nbsp&nbsp<?php echo $row1['from_add']; ?></h3>
	                        <h3><?php echo "Deliver Location:"?>&nbsp&nbsp<?php echo $row1['to_add']; ?></h3>
	                        <h3><?php echo "Date:"?>&nbsp&nbsp<?php echo $row1['date']; ?></h3>
	                        <h3>Price:&nbsp&nbsp<input type="tel" name="price" placeholder="Enter Your Price" style="width: 40%;" required=""></h3>
	                        <br><input name="submit" type="submit" value="BID" class="theme-btn btn-style-two pull-left" style="margin-left: 150px; padding: 8px 18px 9px; line-height: 15px; width: 120px;">	                    
		            	</div><br>
		            <a href="view_post.php" class="btn btn-raised btn-primary waves-effect" style="margin-left: 20px;"><span class="flaticon-arrows-3"> </span>Go To View Posts</a>
			        </div>
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
                            <h2>Helping and providing best service to our client business over 1 years </h2>
                        </div>
                        <div class="text">
                        	<p> Our vision is to make of shipping orders something so natural as text messaging. </p>
                            <p>we also providing a bidding system for users to save his time and money.</p>
                        </div>
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
                                <p>YOUSHIP is a delivery platform that connects users and drivers nearby. Our mission is connects users and transporters making delivery a better deal for everyone.</p>
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