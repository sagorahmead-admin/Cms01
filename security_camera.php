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

    $sql_page = "SELECT * FROM _page2 WHERE pageid='2'";
    $result_page = mysqli_query($conn, $sql_page);  
    $row_page = mysqli_fetch_assoc($result_page);
    $pageid = $row_page['pageid'];             

    if(!empty($row_page)){
        $pageid = $row_page['pageid'];
        $cont1_title1 = $row_page['cont1_title1'];
        $cont2_title2 = $row_page['cont2_title2'];
        $cont3_text1 = $row_page['cont3_text1'];
        $cont3_img = $row_page['cont3_img'];
        $cont4_img = $row_page['cont4_img'];
        $cont5_text2 = $row_page['cont5_text2'];
        $cont6_text3 = $row_page['cont6_text3'];
        $cont7_img = $row_page['cont7_img'];
        $cont7_title3 = $row_page['cont7_title3'];
        $cont7_text = $row_page['cont7_text'];
        $cont8_slider1 = $row_page['cont8_slider1'];
        $cont9_title4 = $row_page['cont9_title4'];
        $cont10_text4 = $row_page['cont10_text4'];
        $cont11_slider2 = $row_page['cont11_slider2'];
        $cont12_img = $row_page['cont12_img'];
        $cont12_title = $row_page['cont12_title'];
        $cont12_text = $row_page['cont12_text'];
        $cont13_img = $row_page['cont13_img'];
        $cont13_title = $row_page['cont13_title'];
        $cont13_text = $row_page['cont13_text'];
        $cont14_img = $row_page['cont14_img'];
        $cont14_title = $row_page['cont14_title'];
        $cont14_text = $row_page['cont14_text'];

    }else{
        $pageid         = "";
        $cont1_title1   = "";
        $cont2_title2   = "";
        $cont3_text1    = "";
        $cont3_img    = "";
        $cont4_img      = "";
        $cont5_text2    = "";
        $cont6_text3    = "";
        $cont7_img   = "";
        $cont7_title3   = "";
        $cont7_text   = "";
        $cont8_slider1  = "";
        $cont9_title4   = "";
        $cont10_text4   = "";
        $cont11_slider2 = "";
        $cont12_img   = "";
        $cont12_title   = "";
        $cont12_text   = "";
        $cont13_img   = "";
        $cont13_title   = "";
        $cont13_text   = "";
        $cont14_img = "";
        $cont14_title = "";
        $cont14_text = "";
    }

    ?>



<!DOCTYPE HTML>
<html lang="en">
    

<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Security camera | KohanIt</title>
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

        <link rel="stylesheet" href="assets/assets2/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/assets2/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="assets/assets2/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/assets2/css/flaticon.css">
		<link rel="stylesheet" href="assets/assets2/css/remixicon.css">
		<link rel="stylesheet" href="assets/assets2/css/meanmenu.min.css">
		<link rel="stylesheet" href="assets/assets2/css/odometer.min.css">
		<link rel="stylesheet" href="assets/assets2/css/magnific-popup.min.css">
		<link rel="stylesheet" href="assets/assets2/css/coustomize.css">
		<link rel="stylesheet" href="assets/assets2/css/responsive.css">
    </head>
    <body>
        
        <!-- main start  -->
        <div id="main">
            <!-- main-header-->
            <header class="main-header">
                <a href="index.php" class="logo-holder ajax"><img src="images/<?php echo $menulogo ?>" alt=""></a>
                <!-- nav-button-wrap-->
                <div class="nav-button but-hol">
                    <span  class="nos"></span>
                    <span class="ncs"></span>
                    <span class="nbs"></span>
                    <div class="menu-button-text"> <a href="index.php" >Menu</a></div>
                </div>
                <!-- nav-button-wrap end-->	 			
                <div class="progress-bar-wrap">
                    <div class="progress-bar color-bg"></div>
                </div>
                
                
           
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
                                        <li><a href="security_camera.php" class="custom-scroll-link act-link">Security Camera</a></li>
                                        <li><a href="structured_cabling.php"class="custom-scroll-link">Structured Cabling</a></li>
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
               
                    <div class="content">
                    

 

        <!-- Start Banner Area -->
        <div class="banner-area ">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <span ><?php echo $cont1_title1; ?></span>
                            <h1><?php echo $cont2_title2; ?></h1>
                            
                            <p style="color:#c1c4c7;"><?php echo $cont3_text1; ?></p>

                            
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-img" data-speed="0.12" data-revert="true">
                            <img src="assets/assets2/images/<?php echo $cont3_img; ?>" alt="Image">
                        </div>
                    </div>
                </div>

                <div class="featured-area">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-featured" style="background:linear-gradient(90deg,#D90A2C 1.05%,#730000 100%);">
                                <span>01.</span>
                                <h3>Business CCTV</h3>
                                <p style="color:white;">Integrate Local And Cloud Resources, User Traffic And Endpoints.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-featured"style="background:linear-gradient(90deg,#D90A2C 1.05%,#730000 100%);">
                                <span>02.</span>
                                <h3>Wireless CCTV Systems</h3>
                                <p style="color:white;">Integrate Local And Cloud Resources, User Traffic And Endpoints.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-featured"style="background:linear-gradient(90deg,#D90A2C 1.05%,#730000 100%);">
                                <span>03.</span>
                                <h3>Wired CCTV Cameras</h3>
                                <p style="color:white;">Integrate Local And Cloud Resources, User Traffic And Endpoints.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-featured"style="background:linear-gradient(90deg,#D90A2C 1.05%,#730000 100%);">
                                <span>04.</span>
                                <h3>CCTV Maintenance</h3>
                                <p style="color:white;">Integrate Local And Cloud Resources, User Traffic And Endpoints.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="only-shape banner-shape-1" data-speed="0.04" data-revert="true">
                <img src="assets/assets2/images/banner/banner-shape-1.png" alt="Image">
            </div>
            <div class="only-shape banner-shape-2" data-speed="0.06" data-revert="true">
                <img src="assets/assets2/images/banner/banner-shape-2.png" alt="Image">
            </div>
            <div class="only-shape banner-shape-3" data-speed="0.08" data-revert="true">
                <img src="assets/assets2/images/banner/banner-shape-3.png" alt="Image">
            </div>
            <div class="only-shape banner-shape-4" data-speed="0.08" data-revert="true">
                <img src="assets/assets2/images/banner/banner-shape-4.png" alt="Image">
            </div>
        </div>
        <!-- End Banner Area -->

       

        <!-- Start About Us Area -->
        <div class="about-area main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img mr-36">
                            <img src="assets/assets2/images/<?php echo $cont4_img; ?>" width="860px" height="1200px" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-content ml-36">
                         
                            <h2><?php echo $cont5_text2; ?></h2>
                            <p><?php echo $cont6_text3; ?>.</p>

                             

                            <a href="contacts.php" class="default-btn"style="
    background: linear-gradient(90deg,#D90A2C 1.05%,#730000 100%);border:none;
">
                               Conatct Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us Area -->

        <!-- Start Counter Area -->
        <div class="counter-area style-three pb-100">
            <div class="container">
                <div class="counter-bg">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter-item style-one">
                                <div class="d-flex align-items-center">
                                    <h2>
                                        <span class="odometer" data-count="26">00</span> 
                                    </h2>
                                    <h4>YEARS’ EXPERIENCE WORKING</h4>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter-item style-two">
                                <div class="d-flex align-items-center">
                                    <h2>
                                        <span class="odometer" data-count="251">00</span> 
                                    </h2>
                                    <h4>CYBER SECURITY EXPERTS</h4>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter-item style-icon style-three">
                                <div class="d-flex align-items-center">
                                    <h2>
                                        <span class="odometer" data-count="85">00</span> 
                                        <span class="target">%</span>
                                    </h2>
                                    <h4>CUSTOMER SATISFACTION RATE</h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter-item style-icon style-four">
                                <div class="d-flex align-items-center">
                                    <h2>
                                        <span class="odometer" data-count="2.7">00</span> 
                                        <span class="targets">K</span>
                                    </h2>
                                    <h4>CUSTOMER SERVED GLOBALLY</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counter Area -->


        <!-- Start Choose Us Area -->
        <div class="choose-us-area  ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-us-content mr-65">
                           
                            <h2><?php echo $cont7_title3; ?></h2>
                            <p style="color:#c1c4c7;"><?php echo $cont7_text; ?></p>

                       
                            
                            <a href="Contacts.php" class="default-btn"style="
    background: linear-gradient(90deg,#D90A2C 1.05%,#730000 100%);border:none;
">
                                Contact Now
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="choose-us-img ml-65">
                            <img src="assets/assets2/images/<?php echo $cont7_img; ?>" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Choose Us Area -->

        <!-- Start About Us Area -->
        <div class="about-area main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img mr-36">
                            <img src="assets/assets2/images/<?php echo $cont12_img; ?>"  alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-content ml-36">
                         
                            <h2><?php echo $cont12_title; ?></h2>
                          
                            <p style="color:white;"><?php echo $cont12_text; ?></p>

                             

                            <a href="contacts.php" class="default-btn"style="
    background: linear-gradient(90deg,#D90A2C 1.05%,#730000 100%);border:none;
">
                               Conatct Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us Area -->
     

        <!-- Start Choose Us Area -->
        <div class="choose-us-area  ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-us-content mr-65">
                           
                            <h2><?php echo $cont13_title; ?></h2>
                            <p style="color:white;"><?php echo $cont13_text; ?>
                            </p>

                       
                            
                            <a href="Contacts.php" class="default-btn"style="
    background: linear-gradient(90deg,#D90A2C 1.05%,#730000 100%);border:none;
">
                                Contact Now
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="choose-us-img ml-65">
                            <img src="assets/assets2/images/<?php echo $cont13_img; ?>" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Choose Us Area -->

        <!-- Start About Us Area -->
        <div class="about-area main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img mr-36">
                            <img src="assets/assets2/images/<?php echo $cont14_img; ?>"  alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-content ml-36">
                         
                            <h2><?php echo $cont14_title; ?></h2>
                          
                            <p style="color:white;"> <?php echo $cont14_text; ?></p>

                             

                            <a href="contacts.php" class="default-btn"style="
    background: linear-gradient(90deg,#D90A2C 1.05%,#730000 100%); border:none;
">
                               Conatct Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us Area -->
        <div class="services-area bg-color-linear pt-100 pb-50">
				<div class="container">
					<div class="section-title">
						 
						<h2 style="color:red;">What Commercial CCTV Services and systems do we offer?</h2>
						<p>Integrate local and cloud resources, protect user traffic and endpoints, and create custom, scalable network.</p>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-4 col-sm-6">
							<div class="single-services">
								<div class="icon">
									<img src="assets/assets2/images/icon/icon-3.svg" alt="Image">
								</div>
								<h3>
									<a href="contacts.php">C-Mount CCTV Cameras</a>
								</h3>
								<p> C-mount CCTV cameras have detachable lenses which means they can be configured to fit different applications. Standard CCTV camera lenses can typically only cover distances of between 35 and 40ft. However, a C-mount CCTV camera can cover distances greater than 40ft by installing special lenses.</p>
								<a href="contacts.php" class="read-more">
									Contact Now
									<i class="ri-arrow-right-line"></i>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="single-services">
								<div class="icon">
									<img src="assets/assets2/images/icon/icon-4.svg" alt="Image">
								</div>
								<h3>
									<a href="contacts.php">Network/IP CCTV Cameras</a>
								</h3>
								<p> Whether hardwired or wireless, these cameras transmit images over the internet, often compressing the bandwidth to reduce server network strain. Footage is often stored on network video recorders (NVRs) or accessed via secure software. IP cameras don’t require a separate cable to send images over longer distances so are easier to install.</p>
								<a href="contacts.php" class="read-more">
                                Contact Now
									<i class="ri-arrow-right-line"></i>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="single-services">
								<div class="icon">
									<img src="assets/assets2/images/icon/icon-5.svg" alt="Image">
								</div>
								<h3>
									<a href="contacts.php">Dome CCTV Cameras</a>
								</h3>
								<p>  
                                    
                                Dome CCTV cameras are one of the most common types of camera. Suitable for use both indoor and outdoor applications. Named because of the dome-shaped housing within which the camera is mounted, these are ideal for deterring crime as it is not easy for intruders to see which way the camera is facing and try to evade detection.


                                </p>
								<a href="contacts.php" class="read-more">
                                Contact Now
									<i class="ri-arrow-right-line"></i>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="single-services">
								<div class="icon">
									<img src="assets/assets2/images/icon/icon-6.svg" alt="Image">
								</div>
								<h3>
									<a href="contacts.php">Bullet CCTV Cameras</a>
								</h3>
								<p> Bullet CCTV cameras are called so because of their long, cylindrical shape. These are often used where long-distance viewing is required, or in fixed locations, as they don’t typically come with a pan/tilt/zoom option. They can be wall or ceiling mounted and are suitable for both indoor and outdoor use</p>
								<a href="contacts.php" class="read-more">
                                Contact Now
									<i class="ri-arrow-right-line"></i>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="single-services">
								<div class="icon">
									<img src="assets/assets2/images/icon/icon-7.svg" alt="Image">
								</div>
								<h3>
									<a href="contacts.php">Pan, Tilt & Zoom Cameras</a>
								</h3>
								<p>PTZ cameras allow the camera to have free range of pivotal movement, panning and tilting, with optical zoom. These cameras are used in situations where there is an operator sitting in a control room who is manually operating and monitoring on-site security systems from a remote location.</p>
								<a href="contacts.php" class="read-more">
								Contact Now
									<i class="ri-arrow-right-line"></i>
								</a>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6">
							<div class="single-services">
								<div class="icon">
									<img src="assets/assets2/images/icon/icon-8.svg" alt="Image">
								</div>
								<h3>
									<a href="contacts.php">Day/Night CCTV Cameras</a>
								</h3>
								<p>Day/night CCTV cameras are able to capture clear video images in varying light conditions and in the dark. The day/night camera is most suited to outdoor applications, and can function with glare, direct sunlight, reflections and strong backlight.</p>
								<a href="contacts.php" class="read-more">
                                Contact Now
									<i class="ri-arrow-right-line"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="only-shape shape-1" data-speed="0.04" data-revert="true">
					<img src="assets/assets2/images/services-shape-1.png" alt="Image">
				</div>
				<div class="only-shape shape-2" data-speed="0.06" data-revert="true">
					<img src="assets/assets2/images/services-shape-2.png" alt="Image">
				</div>
				<div class="only-shape shape-3" data-speed="0.06" data-revert="true">
					<img src="assets/assets2/images/pricing-shape-1.png" alt="Image">
				</div>
			</div>



        <!-- Start Consultations Area -->
        <div class="consultations-area bg-color-linear-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="consultations-content">
                            <h2>Ready To Get Free Consultations For Any Kind Of Solutions?</h2>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-3">
                        <div class="consultations-content-btn">
                            <a href="contacts.php" class="default-btn"style="
    background: linear-gradient(90deg,#D90A2C 1.05%,#730000 100%);border:none;
">
                                Get A Quote
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="only-shape shape-1" data-speed="0.06" data-revert="true">
                <img src="assets/assets2/images/consultations-shape-1.png" alt="Image">
            </div>
            <div class="only-shape shape-2" data-speed="0.08" data-revert="true">
                <img src="assets/assets2/images/consultations-shape-2.png" alt="Image">
            </div>
        </div>
        <!-- End Consultations Area -->

        

        <!-- Start Copyright Area -->
        <div class="copy-right-area">
            <div class="container">
                <p>© <span>KohanIt</span>Allright Reserved  </p>
            </div>
        </div>
        <!-- End Copyright Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="ri-arrow-up-s-fill"></i>
            <i class="ri-arrow-up-s-fill"></i>
        </div>
        <!-- End Go Top Area -->
    </div>
    <!-- End For overflow-hidden & tween-animation -->
                   
                    </div>
                    <!-- content end  -->
              
                
                </div>
                <!-- content-holder end -->
                
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
        <script   src="js/jquery.min.js"></script>
        <script   src="js/plugins.js"></script>
        <script   src="js/scripts.js"></script>
        <script src="assets/assets2/js/jquery.min.js"></script>
        <script src="assets/assets2/js/bootstrap.bundle.min.js"></script>
		<script src="assets/assets2/js/meanmenu.min.js"></script>
		<script src="assets/assets2/js/owl.carousel.min.js"></script>
		<script src="assets/assets2/js/tween-max.min.js"></script>
		<script src="assets/assets2/js/appear.min.js"></script>
		<script src="assets/assets2/js/odometer.min.js"></script>
		<script src="assets/assets2/js/smoothscroll.min.js"></script>
		<script src="assets/assets2/js/magnific-popup.min.js"></script>
		<script src="assets/assets2/js/form-validator.min.js"></script>
		<script src="assets/assets2/js/contact-form-script.js"></script>
		<script src="assets/assets2/js/ajaxchimp.min.js"></script>
		<script src="assets/assets2/js/custom.js"></script>
    </body>

</html>