 <header class="main-header">
                <!-- Header Top -->
                
                
                <!--Header-Upper-->
                <div class="header-upper">
                    <div class="auto-container">
                        <div class="clearfix">
                            
                            <div class="pull-left logo-outer">
                                <div class="logo"><a href="index.php"><img src="images/logo.png" alt="YouShip" title="YouShip"></a></div>
                            </div>
                            
                            <div class="pull-right upper-right clearfix">
                                
                                <!--Info Box-->
                                <div class="upper-column info-box">
                                    <div class="icon-box"><span class="flaticon-technology-2"></span></div>
                                    <ul>
                                        <li><strong>+91-123456789</strong></li>
                                        <li><a href="#">info@youship.com</a></li>
                                    </ul>
                                </div>
                                
                                <!--Info Box-->
                                <div class="upper-column info-box">
                                    <div class="icon-box"><span class="flaticon-location"></span></div>
                                    <ul>
                                        <li><strong>Vadodara</strong></li>
                                        <li>390019</li>
                                    </ul>
                                </div>
                                
                                <!--Info Box-->
                                <div class="upper-column info-box">
                                    <div class="social-links-one">
                                        <a href="#"><span class="fa fa-facebook-f"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-google-plus"></span></a>
                                        <a href="#"><span class="fa fa-linkedin"></span></a>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <!--Header-Lower-->
                <div class="header-lower">
                    <!--Background Layer-->
                    <div class="bg-layer"></div>
                    
                    
                    <div class="auto-container" style="max-width: 1366px; padding: 0 5px;">
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix" style="margin-left: 90px !important;">
                                        <li class="current dropdown"><a href="index.php">Home</a>
                                            <!-- <ul>
                                                <li><a href="index.php">Homepage One</a></li>
                                                <li><a href="index-2.html">Homepage Two</a></li>
                                            </ul> -->
                                        </li>
                                        <li  class="dropdown"><a href="#">Manage Packages</a>
                                            <ul>
                                                <li><a href="addpackage.php">Add Package</a></li>
                                                <li><a href="viewpackage.php">View Packages</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="view_post.php">View Posts</a></li>
                                        <!-- <li><a href="faq.php">Faqs</a></li> -->
                                        <!-- <li><a href="request-quote.php">Request Quote</a></li> -->
                                        <li><a href="viewbid.php">View order</a></li>
                                        <li class="dropdown"><a href="#">Manage Vehicles</a>
                                            <ul>
                                                <li><a href="addvehicle.php">Add Vehicles</a></li>
                                                <li><a href="viewvehicle.php">View Vehicles</a></li>
                                                 <li><a href="addvehicle.php">View Vehicles Post</a></li>
                                                <li><a href="viewvehicle.php">View Booked Vehicles</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li class="dropdown"><a href="#">My Profile</a>
                                            <ul>
                                                <?php 
                                                    $sid=$_SESSION['id'];
                                                    $qry="SELECT * from shipper WHERE id=$sid";
                                                    $rs=mysqli_query($conn,$qry);
                                                    $row=mysqli_fetch_assoc($rs);
                                                 ?>
                                                <li><a href="#"><span class="flaticon-people"></span>&nbsp&nbsp&nbsp&nbsp<?php echo $row['company_name'] ?></a></li>
                                                <li><a href="changepassword.php">Change Password</a></li>
                                                <li><a href="feedback.php">Feedback</a></li>
                                                <li><a href="logout.php" class="theme-btn quote-btn">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->
                            <div class="bg-layer" style="margin-left: 1200px; width: 237px;"></div>
                        </div>
                    </div>
                </div>
                
                
                <!--Sticky Header-->
                <div class="sticky-header">
                    <div class="auto-container clearfix">
                        <!--Logo-->
                        <div class="logo pull-left">
                            <a href="index.php" class="img-responsive"><img src="images/logo-small.png" alt="Transpo" title="Transpo"></a>
                        </div>
                        
                        <!--Right Col-->
                        <div class="right-col pull-right">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.php">Home</a>
                                            <!-- <ul>
                                                <li><a href="index.php">Homepage One</a></li>
                                                <li><a href="index-2.html">Homepage Two</a></li>
                                            </ul> -->
                                        </li>
                                        <li  class="dropdown"><a href="#">Manage Packages</a>
                                            <ul>
                                                <li><a href="addpackage.php">Add Package</a></li>
                                                <li><a href="viewpackage.php">View Packages</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="view_post.php">View Posts</a></li>
                                        <li><a href="viewbid.php">View My Bids</a></li>
                                        <li class="dropdown"><a href="#">Manage Vehicles</a>
                                            <ul>
                                                <li><a href="addvehicle.php">Add Vehicles</a></li>
                                                <li><a href="viewvehicle.php">View Vehicles</a></li>
                                                 <li><a href="vehicle.php">View Vehicles Post</a></li>
                                                <li><a href="viewvehicle.php">View Booked Vehicles</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li class="dropdown"><a href="#">My Profile</a>
                                            <ul>
                                                <li><a href="#"><span class="flaticon-people"></span>&nbsp&nbsp&nbsp&nbsp<?php echo $row['company_name'] ?></a></li>
                                                <li><a href="changepassword.php">Change Password</a></li>
                                                <li><a href="feedback.php">Feedback</a></li>
                                                <li><a href="Logout.php">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->
                        </div>
                        
                    </div>
                </div><!--End Sticky Header-->
            
            </header>