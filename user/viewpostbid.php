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
	                <a href="viewpost.php">View Post</a><span class="fa fa-angle-right"></span>
                    <a href="viewpostbid.php" class="current">View Post Bid</a>
	            </div>
	        </div>
	    </div>
    
    
    <!--Services Section / Style Three-->
    <section class="services-section style-three">
    	<div class="auto-container">
            
            <div class="row clearfix">

                <!--Default Service Block-->
                <?php 
                	$id=$_GET['id'];
                    $qry="SELECT * FROM req_quote WHERE id=$id and isactive=1";
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
                            <td></td>
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

                                $qry2="SELECT * from req_quote WHERE id=$pid and isactive=1";
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
                                        <td><a href="selectbid.php?id=<?php echo $rows['id'];?>">SELECT</a></td>
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