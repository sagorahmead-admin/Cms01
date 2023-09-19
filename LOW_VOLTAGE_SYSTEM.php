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

    $sql_page = "SELECT * FROM _page5 WHERE pageid='5'";
    $result_page = mysqli_query($conn, $sql_page);  
    $row_page = mysqli_fetch_assoc($result_page);
?>

<!DOCTYPE HTML>
<html lang="en">
    

<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Low_Volteg | Kohan it</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
   
  
    <link rel="stylesheet" href="assets/assets3/css/all.css">

    <link rel="stylesheet" href="assets/assets3/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/assets3/css/bootstrap-icons.css">

    <link rel="stylesheet" href="assets/assets3/css/boxicons.min.css">

    <link rel="stylesheet" href="assets/assets3/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/assets3/css/swiper-bundle.css">

    <link rel="stylesheet" href="assets/assets3/css/nice-select.css">

    <link rel="stylesheet" href="assets/assets3/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/assets3/css/odometer.css">

    <link rel="stylesheet" href="assets/assets3/css/animate.css">

    <link rel="stylesheet" href="assets/assets3/css/coustomize3.css">
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
                <a href="index.php" class="logo-holder ajax"><img src="images/<?php echo $menulogo; ?>" alt=""></a>
                <!-- nav-button-wrap-->
                <div class="nav-button but-hol">
                    <span  class="nos"></span>
                    <span class="ncs"></span>
                    <span class="nbs"></span>
                    <div class="menu-button-text">Menu</div>
                </div>
                <!-- nav-button-wrap end-->	 			
                <div class="progress-bar-wrap">
                    <div class="progress-bar color-bg"></div>
                </div>
                <div class="header_social ">
                    <ul >
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
               
                <a href="contacts.php" class="single-page-fixed-row-link "><i class="fal fa-envelope"></i> <span>Get In Touch</span></a>			
            </div>
            <!-- top-header  end-->		
            <!-- wrapper  -->	
            <div id="wrapper">
                <!-- content-holder  -->	
                <div class="content-holder" data-pagetitle="Services Interior">
                    <!-- nav-holder-->
                    <div class="nav-holder but-hol">
                        <div class="nav-scroll-bar-wrap fl-wrap">
                            <a href="index.php" class="ajax logo_menu"><img src="images/<?php echo $menulogo; ?>" alt=""></a>
                            <div class="nav-container fl-wrap" >
                                <!-- nav -->
                                <nav class="nav-inner" id="menu">
                                    <ul>
                                        <li>
                                            <a href="index.php" >Home</a>
                                       
                                        </li>
                                        <li>
                                            <a href="who_are_we.php">Who are We</a>
                                            <!--level 2 -->
                                            
                                        </li>
                                        <li><a href="security_camera.php" class="custom-scroll-link">Security Camera</a></li>
                                        <li><a href="structured_cabling.php"class="custom-scroll-link ">Structured Cabling</a></li>
                                        <li>
                                            <a href="intercoms.php">Intercoms</a>
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
                    <!DOCTYPE html>
 

 

 



    

    <div class="scroll-btn">
        <i class="bx bxs-up-arrow-circle"></i>
    </div>

   


    <div class="banner-section position-relative">
        <div class="swiper banner1">
            <div class="swiper-wrapper">
                <div class="swiper-slide position-relative">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                           
                            <div class="col-lg-7 col-md-5 col-12">
                                <div class="banner-content mobile-bg1">
                                    
                           
                                    <h1><?php echo $row_page['content1']; ?></h1>
                                    <p> <?php echo $row_page['content2']; ?> </p>
                                    <a href="contacts.php" class="eg-btn banner-btn hover-btn"><span>Contact Now
                                            <img src="assets/assets3/images/icon/btn-arrow.svg" alt></span></a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-7 d-md-block d-none py-2">
                                <div class="banner-img">
                                    <img src="assets/assets4/images/<?php echo $row_page['content3']; ?>" class="banner-img-left" alt>
                                    <img class="top-right-dot" src="assets/assets3/images/banner/top-right-dot.svg" alt>
                                    <img class="bottom-left-dot" src="assets/assets3/images/banner/bottom-left-dot.svg" alt>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

   
 

    <div class="about-section" style="padding-top: 70px">
        <div class="container position-relative">
            <img src="assets/assets3/images/icon/dotted.svg" class="dotted-circle" alt>
            <img src="assets/assets3/images/icon/line-frame.svg" class="line-frame" alt>
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-8 order-1">
                    <div class="about-img wow animate fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
                       
                        <img src="assets/assets4/images/<?php echo $row_page['content4']; ?>" alt>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8 order-2">
                    <div class="about-card wow animate fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="about-content">
                           
                            <h3><?php echo $row_page['content5']; ?></h3>
                            <p>   
                                
                            <?php echo $row_page['content6']; ?>

                            <br>
                            1. Site Survey and Project Analysis <br>
                            2. Low Voltage Structured Cable Design and Engineering Services <br>
                            3. Low Voltage Copper, Fiber Optic and Coaxial Cabling Installation <br>
                            4. Wireless (Wifi) Network, and Point-to-Point/Point-to-Multipoint Wireless Systems <br>
                            5. Routine Maintenance and Service 



                            </p>
                          
                            <a href="contacts.php" class="eg-btn about-btn hover-btn"><span>Contact Now<img
                                        src="assets/assets3/images/icon/btn-arrow.svg" alt></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8 order-md-3 order-4">
                    <div class="about-card wow animate fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="about-content">
                      
                            <h3> <?php echo $row_page['content7']; ?></h3>
                            <p>   <?php echo $row_page['content8']; ?>
                            </p>
                            <a href="contacts.php" class="eg-btn about-btn hover-btn"><span>Contact Now<img
                                        src="assets/assets3/images/icon/btn-arrow.svg" alt></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8 col-sm-8 order-md-4 order-3">
                    <div class="about-img wow animate fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <img src="assets/assets4/images/<?php echo $row_page['content9']; ?>" alt>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="about-section" style="padding-top: 70px">
        <div class="container position-relative">
            <img src="assets/assets3/images/icon/dotted.svg" class="dotted-circle" alt>
            <img src="assets/assets3/images/icon/line-frame.svg" class="line-frame" alt>
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-8 order-1">
                    <div class="about-img wow animate fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
                       
                        <img src="assets/assets4/images/<?php echo $row_page['content10']; ?>"  alt>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8 order-2">
                    <div class="about-card wow animate fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="about-content">
                           
                            <h3><?php echo $row_page['content11']; ?></h3>
                            <p> <?php echo $row_page['content12']; ?>
                                
                                </p>
                          
                            <a href="contacts.php" class="eg-btn about-btn hover-btn"><span>Contact Now<img
                                        src="assets/assets3/images/icon/btn-arrow.svg" alt></span></a>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <div class="achievment-section pt-120">
        <div class="container position-relative">
            <img src="assets/assets3/images/icon/dotted.svg" class="dotted-circle" alt>
            <div class="achievment-section-wrapper bg--primary">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <div class="achivment-box-wrap">
                            <div class="achievment-box gap-4">
                                <div class="single-counter">
                                    <div class="counter-icon">
                                        <img src="assets/assets3/images/icon/ach3.svg" alt>
                                    </div>
                                    <div class="counter-text counter-item">
                                        <h3 class="odometer" data-odometer-final="40">&nbsp;</h3>
                                        <p>Expert People</p>
                                    </div>
                                </div>
                                <div class="single-counter">
                                    <div class="counter-icon">
                                        <img src="assets/assets3/images/icon/ach2.svg" alt>
                                    </div>
                                    <div class="counter-text counter-item">
                                        <h3 class="odometer" data-odometer-final="150">&nbsp;</h3>
                                        <p>Satisfied Client</p>
                                    </div>
                                </div>
                                <div class="single-counter">
                                    <div class="counter-icon">
                                        <img src="assets/assets3/images/icon/ach1.svg" alt>
                                    </div>
                                    <div class="counter-text counter-item">
                                        <h3 class="odometer" data-odometer-final="520">&nbsp;</h3>
                                        <p>Downloaded</p>
                                    </div>
                                </div>
                                <div class="single-counter">
                                    <div class="counter-icon">
                                        <img src="assets/assets3/images/icon/ach4.svg" alt>
                                    </div>
                                    <div class="counter-text counter-item">
                                        <h3 class="odometer" data-odometer-final="40">&nbsp;</h3>
                                        <p>Unique Product</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-8">
                        <div class="video-area">
                            <div class="video-play">
                                <a href="<?php echo $row_page['content14']; ?>" class="video-open video-icon"><i
                                        class="bx bx-play"></i></a>
                            </div>
                            <img src="assets/assets4/images/<?php echo $row_page['content13']; ?>" alt>
                        </div>
                        <div class="video-text">
                            <p><?php echo $row_page['content15']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 
   

    <div class="join-us-section pt-120">
        <div class="container">
            <div class="join-us-area wow animate fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
                <div class="join-us-content flex-md-nowrap flex-wrap">
                    <h2><?php echo $row_page['content16']; ?></h2>
                    <h5><?php echo $row_page['content17']; ?></h5>
                </div>
                <div class="eg-btn join-btn hover-btn">
                    <span><a href="contacts.php">Contact Now<img src="assets/assets3/images/icon/arrow-dark.svg" alt></a></span>
                </div>
            </div>
        </div>
    </div>

  

    <footer class="footer-section">
        <div class="container">
           
            <div class="footer-bottom-area">
                <div class="row">
                    <div class="col-lg-5 text-lg-start text-center">
                        <div class="footer-bottom-left">
                            <a href="#">
                                <h6 class="mb-0">Copyright 2023 Allright Reserved </h6>
                            </a>
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
    </footer>

    
  
 
                  
                        <!--column-wrap end-->					
                        <div class="limit-box fl-wrap"></div>
                    </div>
                    <!-- content end  -->
                    <!-- footer -->
                    <div class="height-emulator fl-wrap"></div>
                     
                    <!-- footer end -->
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
        <script src="assets/assets3/js/jquery-3.6.0.min.js"></script>
    <script src="assets/assets3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/assets3/js/fontawesome.min.js"></script>
    <script src="assets/assets3/js/swiper-bundle.js"></script>
    <script src="assets/assets3/js/jquery.nice-select.js"></script>
    <script src="assets/assets3/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/assets3/js/odometer.min.js"></script>
    <script src="assets/assets3/js/viewport.jquery.js"></script>
    <script src="assets/assets3/js/wow.js"></script>
    <script src="assets/assets3/js/main.js"></script>

        <script   src="js/jquery.min.js"></script>
        <script   src="js/plugins.js"></script>
        <script   src="js/scripts.js"></script>
    </body>

</html>