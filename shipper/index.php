<?php 
    require 'dbconnect.php';
    session_start();
    if (isset($_SESSION['cn']))
    {
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
            
            
            <!--Main Slider-->
            <section class="main-slider negative-margin">
                
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <ul>
                            
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                            <img src="images/main-slider/1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                            
                            <div class="tp-caption sfl sfb tp-resizeme"
                            data-x="left" data-hoffset="15"
                            data-y="center" data-voffset="-70"
                            data-speed="1500"
                            data-start="0"
                            data-easing="easeOutExpo"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.3"
                            data-endspeed="1200"
                            data-endeasing="Power4.easeIn"><div class="italic-text">Welcome to Transpo</div>
                            </div>
                            
                            <div class="tp-caption sfl sfb tp-resizeme"
                            data-x="left" data-hoffset="15"
                            data-y="center" data-voffset="10"
                            data-speed="1500"
                            data-start="500"
                            data-easing="easeOutExpo"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.3"
                            data-endspeed="1200"
                            data-endeasing="Power4.easeIn"><h2>We Provide <br>Business Solution</h2>
                            </div>
                            
                            <div class="tp-caption sfr sfb tp-resizeme"
                            data-x="left" data-hoffset="15"
                            data-y="center" data-voffset="110"
                            data-speed="1500"
                            data-start="1000"
                            data-easing="easeOutExpo"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.3"
                            data-endspeed="1200"
                            data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Read more about transpo <span class="fa fa-caret-right"></span></a>
                            </div>
                            
                            <div class="tp-caption sfr sfb tp-resizeme"
                            data-x="left" data-hoffset="290"
                            data-y="center" data-voffset="110"
                            data-speed="1500"
                            data-start="1500"
                            data-easing="easeOutExpo"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.3"
                            data-endspeed="1200"
                            data-endeasing="Power4.easeIn"><!-- <a href="#" class="theme-btn btn-style-two">Purchase Now</a> -->
                                
                            </div>
                            
                            
                            </li>
                            
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                            <img src="images/main-slider/2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                            
                            <div class="tp-caption sfl sfb tp-resizeme"
                            data-x="left" data-hoffset="15"
                            data-y="center" data-voffset="-70"
                            data-speed="1500"
                            data-start="0"
                            data-easing="easeOutExpo"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.3"
                            data-endspeed="1200"
                            data-endeasing="Power4.easeIn"><div class="italic-text">Welcome to Transpo</div>
                            </div>
                            
                            <div class="tp-caption sfl sfb tp-resizeme"
                            data-x="left" data-hoffset="15"
                            data-y="center" data-voffset="10"
                            data-speed="1500"
                            data-start="500"
                            data-easing="easeOutExpo"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.3"
                            data-endspeed="1200"
                            data-endeasing="Power4.easeIn"><h2>We Provide <br>Business Solution</h2>
                            </div>
                            
                            <div class="tp-caption sfr sfb tp-resizeme"
                            data-x="left" data-hoffset="15"
                            data-y="center" data-voffset="110"
                            data-speed="1500"
                            data-start="1000"
                            data-easing="easeOutExpo"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.3"
                            data-endspeed="1200"
                            data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Read more about transpo <span class="fa fa-caret-right"></span></a>
                            </div>
                            
                            <div class="tp-caption sfr sfb tp-resizeme"
                            data-x="left" data-hoffset="290"
                            data-y="center" data-voffset="110"
                            data-speed="1500"
                            data-start="1500"
                            data-easing="easeOutExpo"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.01"
                            data-endelementdelay="0.3"
                            data-endspeed="1200"
                            data-endeasing="Power4.easeIn"><!-- <a href="#" class="theme-btn btn-style-two">Purchase Now</a> -->
                            </div>
                            
                            
                            </li>
                             
                        </ul>
                        
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </section>
            
            
            <!--Featured Services-->
           <!--  <section class="featured-services">
                <div class="auto-container">
                    <div class="sec-title text-center">
                        <h2>Your trusted logistic partner in worldwide </h2>
                        <div class="text">Lorem ipsum dolor sit amet, <strong>usu no alienum adolescens</strong> an principes liberavisse eam, nam wisi malis recusabo at.</div>
                    </div>
                    
                    <div class="row clearfix"> -->
                        <!--Featured Service Column-->
                        <!-- <div class="featured-service-column col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <figure class="image-box"><img src="images/resource/featured-image-1.jpg" alt=""><a class="overlay" href="services-single.html"></a></figure>
                                <div class="lower-content">
                                    <h3><a href="services-single.html">Transport <br>Solution &amp; Distribution</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet offendit invidunt et per, mei congue dicant eu, recusabo urbanit vel cu. Quo tollit expetenda ea, cum eu sententiae theophrastus. Ea has movet copiosae, at.</div>
                                </div>
                            </div>
                        </div> -->
                        
                        <!--Featured Service Column-->
                        <!-- <div class="featured-service-column col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <figure class="image-box"><img src="images/resource/featured-image-2.jpg" alt=""><a class="overlay" href="services-single.html"></a></figure>
                                <div class="lower-content">
                                    <h3><a href="services-single.html">Integrated <br>Logistic Provider</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet offendit invidunt et per, mei congue dicant eu, recusabo urbanit vel cu. Quo tollit expetenda ea, cum eu sententiae theophrastus. Ea has movet copiosae, at.</div>
                                </div>
                            </div>
                        </div> -->
                        
                        <!--Featured Service Column-->
                        <!-- <div class="featured-service-column col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <figure class="image-box"><img src="images/resource/featured-image-3.jpg" alt=""><a class="overlay" href="services-single.html"></a></figure>
                                <div class="lower-content">
                                    <h3><a href="services-single.html">Warehousing <br>&amp; Chain Solution</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet offendit invidunt et per, mei congue dicant eu, recusabo urbanit vel cu. Quo tollit expetenda ea, cum eu sententiae theophrastus. Ea has movet copiosae, at.</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="text-center"><a href="#" class="theme-btn btn-style-one">More Details about us <span class="fa fa-caret-right"></span></a></div>
                    
                </div>
            </section> -->
            
            
            <!--Fun Facts Section-->
            <!-- <section class="fun-fact-section" style="background-image:url(images/background/image-1.jpg);">
                <div class="auto-container">
                    <div class="fact-counter">
                        <div class="clearfix"> -->
                        
                            <!--Column-->
                            <!-- <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                                <div class="inner">
                                    <div class="icon-box"><span class="flaticon-trophy-1"></span></div>
                                    <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="0">0</span></div>
                                    <h4 class="counter-title">Tropies</h4>
                                </div>
                            </div> -->
                            
                            <!--Column-->
                            <!-- <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                                <div class="inner">
                                    <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                                    <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="2">0</span></div>
                                    <h4 class="counter-title">Country</h4>
                                </div>
                            </div> -->
                            
                            <!--Column-->
                            <!-- <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                                <div class="inner">
                                    <div class="icon-box"><span class="flaticon-truck-2"></span></div>
                                    <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="4">0</span></div>
                                    <h4 class="counter-title">Transport</h4>
                                </div>
                            </div> -->
                            
                            <!--Column-->
                            <!-- <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                                <div class="inner">
                                    <div class="icon-box"><span class="flaticon-avatar"></span></div>
                                    <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="6">0</span></div>
                                    <h4 class="counter-title">Worker</h4>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </section> -->
            
            
            <!--Services Section-->
            <!-- <section class="services-section" style="background-image:url(images/background/image-2.jpg);">
                <div class="auto-container">
                    <div class="sec-title light text-center">
                        <h1>Our Service </h1>
                        <div class="text">Lorem ipsum dolor sit amet, <strong>usu no alienum adolescens</strong> an principes liberavisse eam, nam wisi malis recusabo at.</div>
                    </div>
                    
                    <div class="row clearfix"> -->
                        
                        <!--Default Service Block-->
                       <!--  <div class="default-service-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box"><span class="flaticon-ship"></span></div>
                                <h3>Ship Transport </h3>
                                <div class="text">Lorem ipsum dolor sit amet, ludus aliquip mei eu, quando commodo salutatus vis ins.</div>
                            </div>
                        </div>
                         -->
                        <!--Default Service Block-->
                        <!-- <div class="default-service-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box"><span class="flaticon-package"></span></div>
                                <h3>Packup &amp; Delivery </h3>
                                <div class="text">Lorem ipsum dolor sit amet, ludus aliquip mei eu, quando commodo salutatus vis ins.</div>
                            </div>
                        </div> -->
                        
                        <!--Default Service Block-->
                        <!-- <div class="default-service-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box"><span class="flaticon-passenger-train-front-view"></span></div>
                                <h3>Rail Transport  </h3>
                                <div class="text">Lorem ipsum dolor sit amet, ludus aliquip mei eu, quando commodo salutatus vis ins.</div>
                            </div>
                        </div> -->
                        
                        <!--Default Service Block-->
                        <!-- <div class="default-service-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box"><span class="flaticon-storage"></span></div>
                                <h3>Warehousing </h3>
                                <div class="text">Lorem ipsum dolor sit amet, ludus aliquip mei eu, quando commodo salutatus vis ins.</div>
                            </div>
                        </div> -->
                        
                        <!--Default Service Block-->
                        <!-- <div class="default-service-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box"><span class="flaticon-transport-1"></span></div>
                                <h3>Road Transport  </h3>
                                <div class="text">Lorem ipsum dolor sit amet, ludus aliquip mei eu, quando commodo salutatus vis ins.</div>
                            </div>
                        </div> -->
                        
                        <!--Default Service Block-->
                        <!-- <div class="default-service-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box"><span class="flaticon-airplane-shape"></span></div>
                                <h3>Air Frieght </h3>
                                <div class="text">Lorem ipsum dolor sit amet, ludus aliquip mei eu, quando commodo salutatus vis ins.</div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </section> -->
            
            
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
                                    <p>Any of the condition you could take help from YouShip and then also if you have any issues and you face any of the problem in the whole process of shifting, then at that time also you have the help from YouShip they are present there to just let you shift and clear all your problems regarding shifting work.</p>
                            <p>So I think after you choose them as you shifting company you would not face any problem in the whole shifting process and everything would be completed just on time, so be relax and ask them to provide you all the details related to the shifting.</p>
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
            
            
            <!--Two Column Fluid Section-->
            <section class="two-col-fluid" style="background-image:url(images/background/image-3.jpg);">
                <div class="outer-box clearfix">
                    <!--Testimonial Column-->
                    <div class="testimonial-column">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="title"><div class="icon"><span class="fa fa-quote-left"></span></div><h2>Client Feedback</h2></div>
                            
                            <div class="testimonial-light">
                                <div class="single-item-carousel testimonial-carousel">
                                    <!--Slide Item-->
                                    <div class="slide-item">
                                        <div class="content-box">I am very impress to get services of this company.</div>
                                        <div class="info-box">
                                            <figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure>
                                            <h4>robin</h4>
                                        </div>
                                    </div>  
                                    
                                    <!--Slide Item-->
                                    <div class="slide-item">
                                        <div class="content-box">I am very glad to use this website.</div>
                                        <div class="info-box">
                                            <figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-2.jpg" alt=""></figure>
                                            <h4>peterson</h4>
                                        </div>
                                    </div>  
                                    
                                    <!--Slide Item-->
                                    <div class="slide-item">
                                        <div class="content-box">It's such a nice sytem. Easy to use and i save lots of time and money because of this.</div>
                                        <div class="info-box">
                                            <figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-6.jpg" alt=""></figure>
                                            <h4>rashid khan</h4>
                                            <div class="designation">Managing Director of Sinp</div>
                                        </div>
                                    </div>  
                                        
                                </div>
                            </div>
                            
                        </div>
                    </div><!--End Testimonial Column-->
                    
                    <!--Form Column-->
                    <div class="form-column">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="title"><h2>Get a Quote</h2></div>
                            <div class="get-quote default-form">
                                <form method="post" action="http://world5.commonsupport.com/html/transpo/contact.php">
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="name" value="" placeholder="Name" required>
                                        </div>
                                        
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" name="email" value="" placeholder="Email" required>
                                        </div>
                                        
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <select name="category">
                                                <option>Categories</option>
                                                <option>Savings &amp; Investing</option>
                                                <option>Managing &amp; Accounts</option>
                                                <option>Finance &amp; Strategies</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="subject" value="" placeholder="Subject">
                                        </div>
                                        
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <textarea name="message" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="theme-btn btn-style-one">Submit Request</button>
                                    
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            
            
            <!--Team Section-->
            <section class="team-section">
                <div class="auto-container">
                    <div class="sec-title text-left">
                        <h2>Team Member</h2>
                   
                    </div>
                    
                    <div class="team-carousel four-column-carousel">
                        <!--Team Member-->
                        <div class="team-member">
                            <div class="inner-box">
                                <figure class="image-box" high="10m"><a href="mailto:email@mail.com"><img src="images/resource/team-image-1.JPG" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3>Keyur Kakadiya</h3>
                                </div>
                                <div class="hover-info">
                                    <h3>Keyur Kakadiya</h3>
                                    <div class="social-links">
                                        <a href="#"><span class="fa fa-facebook-f"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-google-plus"></span></a>
                                        <a href="#"><span class="fa fa-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Team Member-->
                        <div class="team-member">
                            <div class="inner-box">
                                <figure class="image-box"><a href="mailto:email@mail.com"><img src="images/resource/team-image-2.png" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3>Bhut Jimnesh</h3>
                                </div>
                                <div class="hover-info">
                                    <h3>Bhut Jimnesh</h3>
                                    <div class="social-links">
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
                                    <div class="text">You are really in tension about completing all your work regarding shifting, then you must stop taking tension at this point only because you have the fastest and the simplest solution for the shifting that is YouShip. who help people regarding the whole shifting scenario and they manage all the things for you.</p>
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
                                        <li><a href="reg.php">Register an account</a></li>
                                        <li><a href="login.php">Login with account</a></li>
                                        <!-- <li><a href="reg.php">Register an shipper account</a></li>
                                        <li><a href="login.php">Login with shipper account</a></li>
                                        <li><a href="faq.php">FAQ &amp; Help Center</a></li> -->
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
<?php
    }
    else
    {
        echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDirect URL Called !!!";
?>
        <!DOCTYPE html>
        <html>
        <head>
            <link rel="icon" href="favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/main.css">
            <link rel="stylesheet" href="assets/css/authentication.css">
            <link rel="stylesheet" href="assets/css/all-themes.css" />

        </head>
        <body>
                <br>&nbsp&nbsp&nbsp&nbsp&nbsp<a class="btn btn-raised waves-effect bg-red" href="login.php">Go to Login Page</a>
        </body>
        </html>
<?php
    }
?>
