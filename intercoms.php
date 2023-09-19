<?php 
    require('admin/_dbconnection.php');
    $sql_logo = "SELECT * FROM _logo WHERE id='1'";
    $result_logo = mysqli_query($conn, $sql_logo);  
    $row_logo = mysqli_fetch_assoc($result_logo);
    $menuid = $row_logo['id'];             
    $menulogo = $row_logo['file'];

    $sql_footer = "SELECT * FROM _logo WHERE id='2'";
    $result_footer = mysqli_query($conn, $sql_footer);  
    $row_footer = mysqli_fetch_assoc($result_footer);
    $footerid = $row_footer['id'];             
    $footerlogo = $row_footer['file'];

    $sql_page = "SELECT * FROM _page4 WHERE pageid='4'";
    $result_page = mysqli_query($conn, $sql_page);  
    $row_page = mysqli_fetch_assoc($result_page);
               

 
    ?>



<!DOCTYPE HTML>
<html lang="en">


<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Intercoms Installation | KohanIt</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/color.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="assets/assets4/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/assets4/css/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/assets4/css/owl.theme.default.min.css" rel="stylesheet">
        <link href="assets/assets4/css/magnific-popup.css" rel="stylesheet">
        <link href="assets/assets4/css/scrollcue.css" rel="stylesheet">
        <link href="assets/assets4/css/odometer.min.css" rel="stylesheet">
        <link href="assets/assets4/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/assets4/css/flaticon.css" rel="stylesheet">
        <link href="assets/assets4/css/meanmenu.min.css" rel="stylesheet">
        <link href="assets/assets4/css/customize4.css" rel="stylesheet">
        <link href="assets/assets4/css/responsive.css" rel="stylesheet">
     
</head>

<body>
    <!--loader-->
    <div class="loader-wrap">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--loader end-->
    <!-- main start  -->
    <div id="main">
        <!-- main-header-->
        <header class="main-header">
            <a href="index.php" class="logo-holder"><img src="images/<?php echo $menulogo; ?>" alt=""></a>
            <!-- nav-button-wrap-->
            <div class="nav-button but-hol">
                <span class="nos"></span>
                <span class="ncs"></span>
                <span class="nbs"></span>
                <div class="menu-button-text">Menu</div>
            </div>
            <!-- nav-button-wrap end-->
            <div class="progress-bar-wrap">
                <div class="progress-bar color-bg"></div>
            </div>
            <div class="header_social ">
                <ul>
                <?php
                    require('admin/_dbconnection.php');
                        $social_links=mysqli_query($conn, "SELECT * FROM _social_links ");
                        $social_rows=mysqli_num_rows($social_links);
                        if($social_rows>0){
                        while($social_link=mysqli_fetch_assoc($social_links)){ 
                            ?> 
     
            <li><a href="<?php echo $social_link['social_link']; ?>" target="_blank"><?php echo $social_link['short_form']; ?></a></li>
            <?php }}?>
                </ul>
            </div>
            <!-- share-button -->
            <div class="folio-btn showshare">
                <div class="folio-btn-item"></div>
                <span class="folio-btn-tooltip ">Share</span>
            </div>
            <!-- share-button end -->
        </header>
        <!-- main-header  end-->
        <!-- top-header-->
        <div class="top-header top-header-half">

            <a href="contacts.php" class="single-page-fixed-row-link "><i class="fal fa-envelope"></i> <span>Get In
                    Touch</span></a>
        </div>
        <!-- top-header  end-->
        <!-- wrapper  -->
        <div id="wrapper">
            <!-- content-holder  -->
            <div class="content-holder" data-pagetitle="Services Interior">
                <!-- nav-holder-->
                <div class="nav-holder but-hol">
                    <div class="nav-scroll-bar-wrap fl-wrap">
                        <a href="index.php" class=" logo_menu"><img src="images/<?php echo $menulogo; ?>" alt=""></a>
                        <div class="nav-container fl-wrap">
                            <!-- nav -->
                            <nav class="nav-inner" id="menu">
                                <ul>
                                    <li>
                                        <a href="index.php">Home</a>

                                    </li>
                                    <li>
                                        <a href="who_are_we.php">Who are We</a>
                                        <!--level 2 -->

                                    </li>
                                    <li><a href="security_camera.php" class="custom-scroll-link">Security Camera</a>
                                    </li>
                                    <li><a href="structured_cabling.php" class="custom-scroll-link">Structured
                                            Cabling</a></li>
                                    <li>
                                        <a href="intercoms.php" class="act-link">Intercoms</a>
                                        <!--level 2 -->

                                    </li>
                                    <li>
                                        <a href="LOW_VOLTAGE_SYSTEM.php">
                                            Low voltage Access Control</a>
                                        <!--level 2 -->

                                    </li>
                                    <li>
                                        <a href="contacts.php">
                                            Contact Us</a>
                                        <!--level 2 -->

                                    </li>
                                </ul>
                            </nav>
                            <!-- nav end-->
                        </div>
                    </div>
                    <!-- nav-title-->
                    <div class="nav-holder-line"></div>
                    <div class="nav-title"><span>Menu</span></div>
                    <!-- nav-title end-->
                </div>
                <div class="nav-holder-dec"></div>
                <div class="nav-overlay"></div>
                <!-- nav-holder end -->
                <!-- content-->
                <div class="content">
                    
                     <!-- Start Banner Area -->
        <div class="home-area bg-color-100f0f">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="home-content">
                            <span>AUDIO/VIDEO INTERCOM SYSTEMS</span>
                            <h1><?php echo $row_page['content1']; ?></h1>
                            <p><?php echo $row_page['content2']; ?></p>
                            <div class="button-group gap-4">
                                <a class="banner-btn" href="contacts.php" style="background:linear-gradient(90deg,#D90A2C 1.05%,#730000 100%);">Contact Now</a>
                                <a class="banner-btn-2" href="who_are_we.php">About Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="home-img">
                            <img class="banner-img-2" src="assets/assets4/images/<?php echo $row_page['content3']; ?>" alt="banner-img">
                        </div>
                    </div>
                </div>
            </div>

            <!-- shape images -->
            <img class="home-shape-1" src="assets/assets4/images/shape/home-shape-1.png" alt="home-shape">
            <img class="home-shape-2" src="assets/assets4/images/shape/home-shape-2.png" alt="home-shape">
            <img class="home-shape-3 rotate" src="assets/assets4/images/shape/home-shape-3.png" alt="home-shape">
            <img class="home-shape-4 rotate" src="assets/assets4/images/shape/home-shape-4.png" alt="home-shape">
        </div>
        <!-- Ens Banner Area -->
          <!-- Start Our Best Services Area -->
          <div class="service-area pt-100 pb-70 bg-color-0b0909">
            <div class="container">
                <div class="section-heading">
                    <div class="row align-items-end">
                        <div class="col-lg-6 col-sm-7">
                            <span class="sub-title">Our Awesome Services</span>
                            <h2>Our Best Service</h2>
                        </div>
                         
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6" src="001.html" data-cue="flipInY">
                        <div class="service-card">
                            <div class="icon">
                                <i class="flaticon-software"></i>
                            </div>
                            <h4>
                                <a href="service-details.html">INTERCOM UPGRADE</a>
                            </h4>
                            <p>There are many variations of passages Lorem Ipsum available, but the marity have suffered alteration in some form,</p>
                            <i class="flaticon-software software"></i>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" src="001.html" data-cue="flipInY">
                        <div class="service-card">
                            <div class="icon">
                                <i class="flaticon-layer"></i>
                            </div>
                            <h4>
                                <a href="service-details.html">INTERCOM REPAIR</a>
                            </h4>
                            <p>There are many variations of passages Lorem Ipsum available, but the marity have suffered alteration in some form,</p>
                            <i class="flaticon-layer software"></i>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" src="001.html" data-cue="flipInY">
                        <div class="service-card">
                            <div class="icon">
                                <i class="flaticon-customer-service"></i>
                            </div>
                            <h4>
                                <a href="service-details.html">INTERCOM REPLACEMENT</a>
                            </h4>
                            <p>There are many variations of passages Lorem Ipsum available, but the marity have suffered alteration in some form,</p>
                            <i class="flaticon-customer-service software"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Best Services Area -->

           <!-- Start About Area -->
           <div class="about-area ptb-100 bg-color-100f0f">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image">
                       

                            <img class="about-3" src="assets/assets4/images/<?php echo $row_page['content4']; ?>" alt="about-img">
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-heading">
                             
                             
                                <p><?php echo $row_page['content5']; ?></p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="check-card d-flex position-relative align-items-center">
                                        <i class="flaticon-tick"></i>
                                        <div class="info">
                                            <h4>Audio/Video Intercom Systems</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="check-card d-flex position-relative align-items-center">
                                        <i class="flaticon-tick"></i>
                                        <div class="info">
                                            <h4>Wireless (IP Based) or Wired Intercom Systems</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="check-card d-flex position-relative align-items-center">
                                        <i class="flaticon-tick"></i>
                                        <div class="info">
                                            <h4>Telephone Entry Systems</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="check-card d-flex position-relative align-items-center">
                                        <i class="flaticon-tick"></i>
                                        <div class="info">
                                            <h4>Doorbell Buzzer Systems</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->
             <!-- Start About Area -->
             <div class="about-area ptb-100 bg-color-100f0f">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-heading">
                             
                             <h2><?php echo $row_page['content6']; ?></h2>
                                <p><?php echo $row_page['content7']; ?></p>
                            </div>

                        

                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image">
                       

                            <img class="about-3" src="assets/assets4/images/<?php echo $row_page['content8']; ?>" alt="about-img">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->
              <!-- Start Get Started Instantly Area -->
              <div class="newsletter-area ptb-100 bg-color-0b0808">
            <div class="container">
                <form class="newsletter-form">
                    <div class="section-heading">
                        <span class="sub-title">Get Started Instantly</span>
                        <h2>Get The Only New Update From This Newsletter</h2>
                    </div>
                    <div class="form-group newsletter-form">
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required autocomplete="off">

                        <button type="submit" class="newsletter-btn" style="background:linear-gradient(90deg,#D90A2C 1.05%,#730000 100%);">Subscribe</button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </div>
                </form>
            </div>

            <img class="news-shape-1" src="assets/assets4/images/shape/news-shape-1.png" alt="news-shape">
            <img class="news-shape-2 rotate" src="assets/assets4/images/shape/news-shape-2.png" alt="news-shape">
            <img class="news-shape-3 rotate" src="assets/assets4/images/shape/news-shape-3.png" alt="news-shape">
            <img class="news-shape-4" src="assets/assets4/images/shape/news-shape-4.png" alt="news-shape">
        </div>
        <!-- End Get Started Instantly Area -->
         <!-- Start Feature Area -->
         <div class="feature-area ptb-100 bg-color-100f0f">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="feature-info">
                            <div class="section-heading">
                              
                                <h2>System Features</h2>
                                <p> 

                                Integrating your intercom system with other access control and CCTV solutions provides a powerful, multi-layered security combination to keep you safe. ClearView’s video and audio intercom entry systems offer;

                                <br><br>
                                1. Multiple audio, reporting and control functions, from a single graphical user interface <br>
                                2. Communication over analogue or IP networks <br>
                                3. In-cell multi-functional communication and facilities provision (music, telecom. link) <br>
                                4. Full integration with CCTV and access control <br>
                                5. Alarm handling and display, including lift emergency calls and status indications <br>
                                6. Operation of two-way-radio, pagers, PA systems and evacuation <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-features">
                            <div class="check-card d-flex position-relative align-items-center">
                                <div class="warp">
                                    <i class="flaticon-diagram"></i>
                                </div>
                                <div class="info">
                                    <h4>On-Site Assessment</h4>
                                </div>
                            </div>
                        </div>

                        <div class="single-features two">
                            <div class="check-card d-flex position-relative align-items-center">
                                <div class="warp">
                                    <i class="flaticon-problem-solving"></i>
                                </div>
                                <div class="info">
                                    <h4>NYC INTERCOM SERVICES</h4>
                                </div>
                            </div>
                        </div>

                        <div class="single-features three">
                            <div class="check-card d-flex position-relative align-items-center">
                                <div class="warp">
                                    <i class="flaticon-browser"></i>
                                </div>
                                <div class="info">
                                    <h4>Intercom Systems Custom Design</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <img class="feater-shape rotate" src="assets/assets4/images/shape/feater-shape.png" alt="feater-shape">
        </div>
        <!-- End Feature Area -->
        
        
                <!-- Start How It Works Area -->
                <div class="works-area ptb-100 bg-color-100f0f">
            <div class="container">
                
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="works-categories">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single-works">
                                        <div class="d-flex position-relative align-items-center">
                                            <div class="works">
                                                <div class="check-card d-flex position-relative align-items-center">
                                                     
                                                    <div class="works-info">
                                                        <h4>Quality Intercom System Installation</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="single-works">
                                        <div class="d-flex position-relative align-items-center">
                                            <div class="works">
                                                <div class="check-card d-flex position-relative align-items-center">
                                                   
                                                    <div class="works-info">
                                                        <h4>Intercom System Maintenance And Repair</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="single-works">
                                        <div class="d-flex position-relative align-items-center">
                                            <div class="works">
                                                <div class="check-card d-flex position-relative align-items-center">
                                                     
                                                    <div class="works-info">
                                                        <h4>WIRED VS WIRELESS INTERCOM SYSTEMS</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="works-image">
                     
                            <img class="works-img-4" src="assets/assets4/images/<?php echo $row_page['content9']; ?>" alt="image">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End How It Works Area -->
            <!-- Start Workflow Integration Area -->
            <div class="workflow-integration-area workflow-integration-area-2 ptb-100 bg-color-100f0f">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="task-img" data-cues="zoomOut" data-group="images">
                            <img class="and-img" src="assets/assets4/images/<?php echo $row_page['content10']; ?>" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="history">
                            <div class="section-heading">
                             
                                <h2><?php echo $row_page['content11']; ?></h2>
                                <p><?php echo $row_page['content12']; ?></p>
                            </div>

                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Workflow Integration Area -->
        
        <!-- Start Copy Area -->
        <div class="copy-area copy-area-2 bg-color-0b0808">
            <div class="container">
                <div class="copy">
                    <p>Copyright  2023 Allright Reserved</p>
                </div>
            </div>
        </div>
        <!-- End Copy Area -->

                 
                    <!--column-wrap end-->
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!-- content end  -->
                <!-- footer -->
                <div class="height-emulator fl-wrap"></div>
               
            </div>
            <!-- content-holder end -->
            <!-- share-wrapper-->
            <div class="share-wrapper">
                <div class="close-share-btn"><i class="fal fa-times"></i></div>
                <div class="share-container fl-wrap  isShare"></div>
            </div>
            <!-- share-wrapper  end -->
        </div>
        <!-- wrapper end -->
        <!-- cursor-->
        <div class="element">
            <div class="element-item"></div>
        </div>
        <!-- cursor end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>
    <script src="assets/assets4/js/bootstrap.bundle.min.js"></script>
        <script src="assets/assets4/js/owl.carousel.min.js"></script>
        <script src="assets/assets4/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/assets4/js/scrollcue.js"></script>
        <script src="assets/assets4/js/appear.min.js"></script>
        <script src="assets/assets4/js/odometer.min.js"></script>
        <script src="assets/assets4/js/form-validator.min.js"></script>
        <script src="assets/assets4/js/contact-form-script.js"></script>
        <script src="assets/assets4/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/assets4/js/meanmenu.min.js"></script>
        <script src="assets/assets4/js/main.js"></script>
    
</body>



</html>