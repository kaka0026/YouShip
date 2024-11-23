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
    <?php require 'nav.php';?>
    <!--End Main Header -->
    
    
    <!--Page Title-->
    <!-- <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1>Edit Post</h1>
        </div>
    </section> -->
    
    <!--Breadcrumb-->
	    <div class="breadcrumb-outer">
	    	<div class="auto-container">
	        	<div class="bread-crumb text-center">
	                <a href="index.php">Home</a><span class="fa fa-angle-right"></span>
	                <a href="package.php">View Packages</a><span class="fa fa-angle-right"></span>
                    <a href="viewpostbid.php" class="current">Select Package</a>
	            </div>
	        </div>
	    </div>
    
    
    <!--Services Section / Style Three-->
    <!-- <section class="services-section style-three">
    	<div class="auto-container">
            
            <div class="row clearfix">

                <!--Default Service Block-->
                <!--<?php 
                	$id=$_GET['id'];
                    $qry="SELECT * FROM user_req WHERE id=$id";
                    $rs=mysqli_query($conn,$qry);
                ?>
                <h1 align="center">Your Post <span class="flaticon-arrows-16"></span></h1><br>
                <table class="table table-striped">
                    <tr>
                        <thead>
                            <td>ID</td>
                            <td>Description</td>
                            <td>Departure Location</td>
                            <td>Deliver Location</td>
                            <td>Date (yyyy-mm-dd)</td>
                        </thead>
                    </tr>
                    <?php 
                        if (mysqli_num_rows($rs)>0)
                        {
                            while ($row=mysqli_fetch_assoc($rs))
                            {
                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['description'];?></td>
                                        <td><?php echo $row['from_add'] ?></td>
                                        <td><?php echo $row['to_add'] ?></td>
                                        <td><?php echo $row['date'] ?></td>
                                    </tr>
                                </tbody>
                                <?php
                            }
                        }
                        else
                        {
                            echo "0 row found";
                        }
                                ?>
                </table>
                <br><br><br><h1 align="center">BID <span class="flaticon-arrows-16"></span></h1><br>

                <?php 
                    $query="SELECT * From bid where postid=$id"; // $id is user id in session
                    $result=mysqli_query($conn,$query);
                
                ?>
                <table class="table table-striped">
                    <tr>
                        <thead>
                            <td>ID</td>
                            <td>Description</td>
                            <td>Departure Location</td>
                            <td>Deliver Location</td>
                            <td>Date (yyyy-mm-dd)</td>
                            <td>Company Name</td>
                            <td>Bid Price</td>
                        </thead>
                    </tr>
                    <?php 
                        if (mysqli_num_rows($result)>0)
                        {
                            while ($rows=mysqli_fetch_assoc($result))
                            {
                                $shipperid=$rows['shipperid'];
                                $pid=$rows['postid'];
                                // echo "userid".$id;
                                $qry1="SELECT * FROM shipper where id=$shipperid";
                                $rs1=mysqli_query($conn,$qry1);
                                $row1=mysqli_fetch_assoc($rs1);

                                $qry2="SELECT * from user_req WHERE id=$pid";
                                // echo $qry2."<br>";
                                $rs2=mysqli_query($conn,$qry2);
                                $row2=mysqli_fetch_assoc($rs2);
                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row2['id'] ?></td>
                                        <td><?php echo $row2['description'];?></td>
                                        <td><?php echo $row2['from_add'] ?></td>
                                        <td><?php echo $row2['to_add'] ?></td>
                                        <td><?php echo $row2['date'] ?></td>
                                        <td><?php echo $row1['company_name'] ?></td>
                                        <td><?php echo "Rs ".$rows['price'];?></td>
                                    </tr>
                                </tbody>
                                <?php
                            }
                        }
                        else
                        {
                            echo "0 row found";
                        }
                                ?>
                </table>
            </div>
            
        </div>
    </section> -->
    <section class="request-quote" style="padding-top: 20px !important;">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Form Column-->
                <div class="form-column col-md-9 col-sm-12 col-xs-12 pull-left" style="margin: 0 150px;">
                    <!-- <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"> -->
                        <!-- <div class="get-quote default-form style-two"> -->
                            <form action="selectpackagedata.php" method="post" style="padding-bottom: 50px !important;">
                                <div class="row clearfix">
                                    <?php 
                                        $added=$_POST['id'];
                                        $uid=$_SESSION['id'];
                                        $qry="SELECT * from shipper where id=$added";
                                        $rs=mysqli_query($conn,$qry);
                                        $row=mysqli_fetch_assoc($rs);

                                        $qry1="SELECT * from package where added_by=$added";
                                        $rs1=mysqli_query($conn,$qry1);
                                        $row1=mysqli_fetch_assoc($rs1);
                                     ?>

                                    <style type="text/css">
                                        .b
                                        {
                                            border: 1px solid #f7f7f7;
                                            background-color: #f7f7f7;
                                            height: 54px !important;
                                            width: 100% !important;
                                            padding: 10px 20px;
                                            cursor: default;
                                        }
                                        .title
                                        {
                                            /*border: 1px solid #f7f7f7;*/
                                            height: 54px !important;
                                            /*background-color: #f7f7f7;*/
                                            width: 100% !important;
                                            padding: 7px 0px 7px 0px;
                                            text-align: right;
                                            font-weight: 600;
                                            cursor: default;
                                        }
                                        .t
                                        {
                                            border: 1px solid #f7f7f7;
                                            background-color: #f7f7f7;
                                            /*height: 54px !important;*/
                                            width: 100% !important;
                                            padding: 10px 20px;
                                        }
                                    </style>

                                    <h1 align="center"><i>Package Detail</h1><br>
                                    <input type="hidden" name="sid" value="<?php echo $row['id'] ?>">
                                    <input type="hidden" name="uid" value="<?php echo $uid ?>">


                                    
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <h3><div class="title">Title:</div></h3>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <div class="b"><h3><?php echo $row1['title'] ?></h3></div>
                                    </div>


                                    
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <h3><div class="title">Shipper Name:</div></h3>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <div class="b"><h4><?php echo $row['company_name'] ?></h4></div>
                                    </div>


                                    
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <h3><div class="title">Description:</div></h3>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <h4><input class="b" name="des" value="<?php echo $row1['description'] ?>"></h4>
                                    </div>

                                    
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <h3><div class="title">Price:</div></h3>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <div class="b"><h4><?php echo $row1['price'] ?></h4></div>
                                    </div>

                                    
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <h3><div class="title">Message:</div></h3>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <textarea class="t" name="msg" rows="5" placeholder="Enter Your Message here..."></textarea>
                                    </div>

                                </div>    
                                <input type="submit" name="submit" class="theme-btn btn-style-two" style="margin-left: 621px;" value="submit">                            
                            </form>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
                
                <!--Image Column-->
                <!-- <div class="image-column col-md-4 col-sm-12 col-xs-12 pull-left">
                    <figure class="image-box wow slideInLeft" data-wow-duration="1500ms"><img class="img-responsive" src="images/resource/advisor-image-2.jpg" alt=""></figure>
                </div> -->
                
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
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="570">0</span></div>
                        <h4 class="counter-title">Tropies</h4>
                    </div>
                </div>
                
                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="48">0</span></div>
                        <h4 class="counter-title">Country</h4>
                    </div>
                </div>
                
                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-truck-2"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="2310">0</span></div>
                        <h4 class="counter-title">Transport</h4>
                    </div>
                </div>
                
                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-avatar"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="32">0</span>k</div>
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
                            <h2>Helping and providing best service to our client business over 20 years </h2>
                        </div>
                        <div class="text">
                        	<p>Lorem ipsum dolor sit amet, et ullum epicuri quo. Usu  pertinax antiopam amet moderatius, denique mediocrem voluptatum duo eu, eius lorem ut eos. No singulis postulant his, per decore elaboraret sadipscing te. Ei ius clita officiis </p>
                            <p>voluptatum, cu labitur graecis qui, aliquam saperet intellegam nec eu. Id nam wisi accusamus dolro amet.</p>
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
                                        <p>Lorem ipsum dolor sit amet, et ullum epicuri quo. Usu no pertinax antiopam moderatius denique mediocrem voluptatum duo eu, eius lorem ut eos. No singulis postulant his per decore elaboraret sadipscing te.</p>
                                    </div>
                                </div>
                            </li>
                            
                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> Awsome feature with Great Service</div>
                                <div class="acc-content">
                                    <div class="content clearfix">
                                        <figure class="image"><img src="images/resource/featured-thumb-1.jpg" alt=""></figure>
                                        <p>Lorem ipsum dolor sit amet, et ullum epicuri quo. Usu no pertinax antiopam moderatius denique mediocrem voluptatum duo eu, eius lorem ut eos. No singulis postulant his per decore elaboraret sadipscing te.</p>
                                    </div>
                                </div>
                            </li>
                            
                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> Big Transport service in history</div>
                                <div class="acc-content">
                                    <div class="content clearfix">
                                        <figure class="image"><img src="images/resource/featured-thumb-1.jpg" alt=""></figure>
                                        <p>Lorem ipsum dolor sit amet, et ullum epicuri quo. Usu no pertinax antiopam moderatius denique mediocrem voluptatum duo eu, eius lorem ut eos. No singulis postulant his per decore elaboraret sadipscing te.</p>
                                    </div>
                                </div>
                            </li>
                            
                        </ul><!--End Accordion Box-->
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    
    <!--Video Section-->
    <section class="video-section" style="background-image:url(images/background/image-4.jpg);">
    	<a class="lightbox-image play-link" href="http://www.youtube.com/watch?v=opj24KnzrWo">
            <div class="text">Watch the video and take some idea about our company</div>
            <div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms"><span class="flaticon-play-button"></span></div>
        </a>
    </section>
    
    <!--Sponsors Section-->
    <section class="sponsors-section">
    	<div class="auto-container">
        	<!--Sponsors SLider-->
            <ul class="sponsors-slider">
            	<li><a href="#"><img src="images/clients/1.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/2.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/3.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/4.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/1.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/2.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/3.png" alt=""></a></li>
                <li><a href="#"><img src="images/clients/4.png" alt=""></a></li>
            </ul>
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
                                <p>Lorem ipsum dolor sit amet, natum latine copiosa at quo, suas labore saperet ei has. Ad natum lore splendide consectetuer duo it need be check duo there.</p>
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