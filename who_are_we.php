<?php 
    require_once('admin/_dbconnection.php');
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

    $sql_page1 = "SELECT * FROM _page1 WHERE pageid='1'";
    $result_page1 = mysqli_query($conn, $sql_page1);  
    $row_page = mysqli_fetch_assoc($result_page1);

    if(!empty($row_page)){
        $pageid = $row_page['pageid'];
        $cont1_title1 = $row_page['cont1_title1'];
        $cont2_text1 = $row_page['cont2_text1'];
        $cont3_img = $row_page['cont3_img'];
        $cont3_img2 = $row_page['cont3_img2'];
        $cont4_text2 = $row_page['cont4_text2'];
        $cont5_title2 = $row_page['cont5_title2'];
        $cont6_text3 = $row_page['cont6_text3'];
        $cont7_title3 = $row_page['cont7_title3'];
        $cont8_pt1 = $row_page['cont8_pt1'];
        $cont9_pt2 = $row_page['cont9_pt2'];
        $cont10_pt3 = $row_page['cont10_pt3'];
        $cont11_pt4 = $row_page['cont11_pt4'];
        $cont12_pp1 = $row_page['cont12_pp1'];
        $cont13_pp2 = $row_page['cont13_pp2'];
        $cont14_pp3 = $row_page['cont14_pp3'];
        $cont15_pp4 = $row_page['cont15_pp4'];
    }else{
        $pageid       = "";
        $cont1_title1 = "";
        $cont2_text1  = "";
        $cont3_img    = "";
        $cont3_img2    = "";
        $cont4_text2  = "";
        $cont5_title2 = "";
        $cont6_text3  = "";
        $cont7_title3 = "";
        $cont8_pt1    = "";
        $cont9_pt2    = "";
        $cont10_pt3   = "";
        $cont11_pt4   = "";
        $cont12_pp1   = "";
        $cont13_pp2   = "";
        $cont14_pp3   = "";
        $cont15_pp4   = "";
    }

    $sql_page_contact = "SELECT * FROM _contactinfo WHERE pageid='6'";
    $result_page_contact = mysqli_query($conn, $sql_page_contact);  
    $contact_info = mysqli_fetch_assoc($result_page_contact);

    $social_sql = "SELECT * FROM _contactinfo WHERE pageid='6'";
    $social_sites = mysqli_query($conn, $social_sql);  
    $row_social = mysqli_fetch_assoc($social_sites);
                
    
   
?>

<!DOCTYPE HTML>
<html lang="en">
    

<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Who Are We | KohanIt</title>
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
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">

    <link href="assets/css/all.min.css" rel="stylesheet">

    <link href="assets/css/fontawesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="assets/css/lightbox.min.css">

    <link rel="stylesheet" href="assets/css/nice-select.css">

    <link rel="stylesheet" href="assets/css/jQuery-plugin-progressbar.css">

    <link rel="stylesheet" href="assets/css/barfiller.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/coustom.css">
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
                <a href="index.php" class="logo-holder ajax"><img src="images/<?php echo $menulogo ?>" alt=""></a>
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
                <div class="content-holder" data-pagetitle="Team Single">
                    <!-- nav-holder-->
                    <div class="nav-holder but-hol">
                        <div class="nav-scroll-bar-wrap fl-wrap">
                            <a href="index.php" class="ajax logo_menu"><img src="images/logomain.png" alt=""></a>
                            <div class="nav-container fl-wrap" >
                                <!-- nav -->
                                <nav class="nav-inner" id="menu">
                                    <ul>
                                        <li>
                                            <a href="index.php" >Home</a>
                                       
                                        </li>
                                        <li>
                                            <a href="who_are_we.php"class="act-link">Who are We</a>
                                            <!--level 2 -->
                                            
                                        </li>
                                        <li><a href="security_camera.php" class="custom-scroll-link">Security Camera</a></li>
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
                    <!-- nav-holder end --> 
                    <!-- content-->
                    <div class="content">
                    
                    <body class="dark">

           

       

<section class="hero-area">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content-wrapper">
                                <div class="hero-content-wrap">
                            
 
                                    <div class="hero-content-img">
                                        <img src="assets/img/banner.jpg" alt>
                                    </div>
                                    <div class="hero-content">
                                        <h2>Who are we?</h2>
                                        <h1>Best solution for your <span>Security.</span></h1>
                                        <p>
The CCTV Company; a family business passionate about security services Established 20 years ago with over six decades of combined industry experience.</p>
                                        <a href="about.html" class="about-btn">About us</a>
                                        <a href="contact.php" class="work-btn">Contact Now</a>
                                        <div class="slider-num">
                                            <span>01</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             
             
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="social-media">
        <ul class="social-list">
        <?php
        require('admin/_dbconnection.php');
                        $social_links=mysqli_query($conn, "SELECT * FROM _social_links LIMIT 3");
                        $social_rows=mysqli_num_rows($social_links);
                        if($social_rows>0){
                        while($social_link=mysqli_fetch_assoc($social_links)){ 
                            ?> 
            <li><a href="<?php echo $social_link['social_link']; ?>"><?php echo $social_link['social_name']; ?></a></li>
            
            <?php }}?>
        </ul>
    </div>
</section>

<section class="service-area sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="title">
                    <span>what we do</span>
                    <h2>we work performed for client happy.</h2>
                    <div class="cmn-btn">
                        <a href="#">view all services</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-8">
                <div class="row g-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="single-service">
                            <span class="count">01</span>
                            <div class="service-icon">
                                <i><img src="assets/img/icons/service-icon-1.png" alt></i>
                            </div>
                            <div class="service-content">
                                <h4>Security Camera</h4>
                                <p>Keeping your surveillance equipment fully operational is the best way to ensure that your  project</p>
                                <a href="security_camera.php">read more<i><img
                                            src="assets/img/icons/arrow-circle.png" alt></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="single-service">
                            <span class="count">02</span>
                            <div class="service-icon">
                                <i><img src="assets/img/icons/service-icon-2.png" alt></i>
                            </div>
                            <div class="service-content">
                                <h4>Intercoms</h4>
                                <p>Keeping your surveillance equipment fully operational is the best way to ensure that your  project</p>
                                <a href="intercoms.php">read more<i><img
                                            src="assets/img/icons/arrow-circle.png" alt></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="single-service">
                            <span class="count">03</span>
                            <div class="service-icon">
                                <i><img src="assets/img/icons/service-icon-3.png" alt></i>
                            </div>
                            <div class="service-content">
                                <h4>Structured Cabling</h4>
                                <p>Keeping your surveillance equipment fully operational is the best way to ensure that your  project</p>
                                <a href="structured_cabling.php">read more<i><img
                                            src="assets/img/icons/arrow-circle.png" alt></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="single-service">
                            <span class="count">04</span>
                            <div class="service-icon">
                                <i><img src="assets/img/icons/service-icon-4.png" alt></i>
                            </div>
                            <div class="service-content">
                                <h4>Low voltage System</h4>
                                <p>Keeping your surveillance equipment fully operational is the best way to ensure that your  project
                                    </p>
                                <a href="LOW_VOLTAGE_SYSTEM.php">read more<i><img
                                            src="assets/img/icons/arrow-circle.png" alt></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-area sec-mar" style="background:#18191d">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="about-left dark">
                    <div class="title">
                        <span>About us</span>
                        <h2 class="mb-15"><?php echo $cont1_title1; ?></h2>
                    </div>
                    <p><?php echo $cont2_text1; ?></p>
                   
                    <div class="cmn-btn">
                        <a href="about.html">About more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="about-right">
                    <div class="group-images">
                        <img src="images/<?php echo $cont3_img; ?>" alt>
                        <div class="about-top">
                            <img src="images/<?php echo $cont3_img2; ?>" alt>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="features-count">
            <div class="row">
                <!-- Brand Counter loop start -->
            <?php
            require_once('admin/_dbconnection.php');
            $sql_counter = mysqli_query($conn, "SELECT * FROM _counter");
            $numcounter = mysqli_num_rows($sql_counter);
            if ($numcounter > 0) {
                while ($c_row = mysqli_fetch_assoc($sql_counter)) {

                    ?>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="single-count">
                        <i><img src="assets/img/icons/<?php echo $c_row['counter_icon'];?>" alt></i>
                        <div class="counter">
                            <span class="odometer"><?php echo $c_row['count'];?></span><sup>+</sup>
                        </div>
                        <p><?php echo $c_row['counter_name'];?></p>
                    </div>
                </div>
                <?php }}  ?>
                    <!-- Brand Counter loop End -->
              
            </div>
        </div>
    </div>
</section>

<section class="our-partner"style="background:#18191d">
    <div class="container-fluid g-0 overflow-hidden">
        <div class="row align-items-center g-0">
            <div class="col-12 col-xl-6">
                <div class="newsletter">
                    <div class="subscribes">
                        <span>Get In Touch</span>
                        <h1>Subscribe Our</h1>
                        <h2>Newsletter</h2>
                        <div class="subscribe-form">
                            <form action="#" method="post">
                                <input type="email" name="email" placeholder="Type Your Email">
                                <input type="submit" value="Connect">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="our-clients">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-4 col-xl-6">
                            <div class="title">
                                <span>Our Clients</span>
                                <h2>Our Clients</h2>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-1.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-2.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-3.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-4.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-5.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-6.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-7.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-8.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-9.png" alt>
                                <div class="client-hover">
                                    <span>www.example.org</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-10.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="portfolio-area sec-mar-top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-5">
                <div class="title">
                    <span>Project</span>
                    <h2>Our Recent Project Portfolio.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper portfolio-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="single-portfolio">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/image-6.png" alt></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>Home Work</span>
                        <h4>Home security Project</h4>
                        <div class="portfolio-hover">
                            <a href="project-details.html" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/portfolio-1.jpg"><i
                                    class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
            <div class="single-portfolio">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/image-6.png" alt></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>Home Work</span>
                        <h4>Home security Project</h4>
                        <div class="portfolio-hover">
                            <a href="project-details.html" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/portfolio-1.jpg"><i
                                    class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
            <div class="single-portfolio">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/image-6.png" alt></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>Home Work</span>
                        <h4>Home security Project</h4>
                        <div class="portfolio-hover">
                            <a href="project-details.html" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/portfolio-1.jpg"><i
                                    class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
            <div class="single-portfolio">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/image-6.png" alt></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>Home Work</span>
                        <h4>Road security Project</h4>
                        <div class="portfolio-hover">
                            <a href="project-details.html" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/portfolio-1.jpg"><i
                                    class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
            <div class="single-portfolio">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/image-6.png" alt></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>Home Work</span>
                        <h4>Shop security Project</h4>
                        <div class="portfolio-hover">
                            <a href="project-details.html" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/portfolio-1.jpg"><i
                                    class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
            <div class="single-portfolio">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/image-6.png" alt></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>Home Work</span>
                        <h4>Office security Project</h4>
                        <div class="portfolio-hover">
                            <a href="project-details.html" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/portfolio-1.jpg"><i
                                    class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<section class="why-choose-us sec-mar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="title">
                    <span>Why Choose Kohanit</span>
                    <h2>Watch Our video</h2>
                </div>
                <div class="video-demo">
                    <img src="assets/img/play-video.jpg" alt>
                    <div class="play-btn">
                        <a class="popup-video" href="<?php echo $cont4_text2; ?>"><i
                                 class="fas fa-play"></i> Play now</a> <!-- https://www.youtube.com/watch?v=0O2aH4XLbto -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="valuable-skills dark">
                    <img src="assets/img/<?php echo $cont5_title2; ?>" alt>
                    <div class="signle-bar">
                        <h6><?php echo $cont8_pt1; ?></h6>
                        <div id="bar1" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="<?php echo $cont12_pp1; ?>"></span>
                        </div>
                    </div>
                    <div class="signle-bar">
                        <h6><?php echo $cont9_pt2; ?></h6>
                        <div id="bar2" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="<?php echo $cont13_pp2; ?>"></span>
                        </div>
                    </div>
                    <div class="signle-bar">
                        <h6><?php echo $cont10_pt3; ?></h6>
                        <div id="bar3" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="<?php echo $cont14_pp3; ?>"></span>
                        </div>
                    </div>
                    <div class="signle-bar">
                        <h6><?php echo $cont11_pt4; ?></h6>
                        <div id="bar4" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="<?php echo $cont15_pp4; ?>"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-pic">
                                        <img src="assets/img/client.jpg" alt>
                                    </div>
                                    <div class="client-details">
                                        <h4>Savannah Nguyen</h4>
                                        <span>Executive CEO</span>
                                    </div>
                                </div>
                                <p><i class="fas fa-quote-left"></i> Curabitur magna nisi, egestas quis est in,
                                    finibus pulvinar ipsum. Nunc sit amet odio interdum, maximus dolor quis,
                                    ullamcorper lectus. Mauris vitae faucibus libero. Curabitur eu convallis
                                    purus. Nunc accumsan diam in arcu pellentesque sagittis. Curabitur dolor
                                    odio, aliquam vitae noday backowner condimentum this fire ongon then only on
                                    <i class="fas fa-quote-right"></i></p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-pic">
                                        <img src="assets/img/client-2.jpg" alt>
                                    </div>
                                    <div class="client-details">
                                        <h4>Nailong Jeso</h4>
                                        <span>CTO Founder</span>
                                    </div>
                                </div>
                                <p><i class="fas fa-quote-left"></i> Curabitur magna nisi, egestas quis est in,
                                    finibus pulvinar ipsum. Nunc sit amet odio interdum, maximus dolor quis,
                                    ullamcorper lectus. Mauris vitae faucibus libero. Curabitur eu convallis
                                    purus. Nunc accumsan diam in arcu pellentesque sagittis. Curabitur dolor
                                    odio, aliquam vitae noday backowner condimentum this fire ongon then only on
                                    <i class="fas fa-quote-right"></i></p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-pic">
                                        <img src="assets/img/client-3.jpg" alt>
                                    </div>
                                    <div class="client-details">
                                        <h4>Gautam Yamni</h4>
                                        <span>Designer Head</span>
                                    </div>
                                </div>
                                <p><i class="fas fa-quote-left"></i> Curabitur magna nisi, egestas quis est in,
                                    finibus pulvinar ipsum. Nunc sit amet odio interdum, maximus dolor quis,
                                    ullamcorper lectus. Mauris vitae faucibus libero. Curabitur eu convallis
                                    purus. Nunc accumsan diam in arcu pellentesque sagittis. Curabitur dolor
                                    odio, aliquam vitae noday backowner condimentum this fire ongon then only on
                                    <i class="fas fa-quote-right"></i></p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-news sec-mar">
    <div class="container">
        <div class="row gx-4">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="signle-news dark">
                    <div class="tag">
                        <a href="#">Company</a>
                    </div>
                    <div class="post-img">
                        <a href="blog_details.html"><img src="assets/img/post/post-1.jpg" alt></a>
                    </div>
                    <div class="news-content">
                        <div class="author">
                            <div class="author-pic">
                                <img src="assets/img/author/author-1.jpg" alt>
                            </div>
                            <div class="author-info">
                                <h5>Posted by, Alen Jodge</h5>
                                <span>05 January, 2022</span>
                            </div>
                        </div>
                        <h3><a href="blog_details.html">Donec a porttitor phari sod tellus Nunc quis erosn.</a>
                        </h3>
                        <p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor
                            ti venenatis consectetur eu quis ex.</p>
                        <div class="view-btn">
                            <a href="blog_details.html">View details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="signle-news dark">
                    <div class="tag">
                        <a href="#"> Company Software</a>
                    </div>
                    <div class="post-img">
                        <a href="blog_details.html"><img src="assets/img/post/post-2.jpg" alt></a>
                    </div>
                    <div class="news-content">
                        <div class="author">
                            <div class="author-pic">
                                <img src="assets/img/author/author-2.jpg" alt>
                            </div>
                            <div class="author-info">
                                <h5>Posted by, Kim karden</h5>
                                <span>05 January, 2022</span>
                            </div>
                        </div>
                        <h3><a href="blog_details.html">Mekusa a porttitor phari sod tellus algo quis ksro.</a>
                        </h3>
                        <p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor
                            ti venenatis consectetur eu quis ex.</p>
                        <div class="view-btn">
                            <a href="blog_details.html">View details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="title">
                    <span>Blog</span>
                    <h2>Latest news And Article modern design.</h2>
                    <div class="cmn-btn">
                        <a href="blog.html">View All Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lets-talk sec-pad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
                <div class="title special">
                    <span>Let’s Talk</span>
                    <h2>About Your Next <br><b>Security</b> Project  </h2>
                </div>
            </div>
            <div class="col-md-3 col-lg-4 col-xl-5 text-end">
                <div class="getin-touch">
                    <div class="cmn-btn">
                        <a href="contacts.php">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="footer-widget">
                    
                    <address>
                        <h4>Office</h4>
                        <p><?php echo $contact_info['address']; ?></p>
                    </address>
                    <ul class="social-media-icons">

                    <?php
        require('admin/_dbconnection.php');
                        $social_links=mysqli_query($conn, "SELECT * FROM _social_links ");
                        $social_rows=mysqli_num_rows($social_links);
                        if($social_rows>0){
                        while($social_link=mysqli_fetch_assoc($social_links)){ 
                            ?> 
            <li><a href="<?php echo $social_link['social_link']; ?>"><i class="<?php echo $social_link['social_icon']; ?>"></i></a></li>
            
            <?php }}?>
                        
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="footer-widget">
                    <h4>Our Services</h4>
                    <ul class="footer-menu">
                        <li><a href="security_camera.php">Security Camera</a></li>
                        <li><a href="structured_cabling.php">Cabling</a></li>
                        <li><a href="intercoms.php">Intercoms</a></li>
                        <li><a href="LOW_VOLTAGE_SYSTEM.php">Low voltage System</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="footer-widget">
                    <h4>Company</h4>
                    <ul class="footer-menu">
                        <li><a href="who_are_we.php">About Us</a></li>
                        <li><a href="structured_cabling.php">Services</a></li>
                        <li><a href="structured_cabling.php">Project</a></li>
                        <li><a href="who_are_we.php">Blog</a></li>
                        
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="footer-widget">
                    <h4>Contacts</h4>
                    <div class="number">
                        <div class="num-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="phone">
                            <a href="tel:<?php echo $contact_info['phone1']; ?>"><?php echo $contact_info['phone1']; ?></a>
                            <a href="tel:<?php echo $contact_info['phone2']; ?>"><?php echo $contact_info['phone1']; ?></a>
                        </div>
                    </div>
                    <div class="office-mail">
                        <div class="mail-icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="email">
                            <a href="tell:Kohanit@gmail.com"><span class="__cf_email__"
                                    data-cfemail="741d1a121b34110c15190418115a171b19"><?php echo $contact_info['email']; ?></span></a>
                            <a href="tell:Kohanit@gmail.com"><span class="__cf_email__"
                                    data-cfemail="e0898e868fa0939590908f9294ce838f8d">join@kohanit.com</span></a>
                        </div>
                    </div>
                    <div class="address">
                        <div class="address-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <p><?php echo $contact_info['address']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 col-lg-4 col-xl-5">
                    <div class="copy-txt">
                        <span>Copyright 2023 <b>Kohanit</b>  </span>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-8 col-xl-7">
                    <ul class="footer-bottom-menu">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Support Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="scroll-top">
    <span>Top<i class="bi bi-arrow-up"></i></span>
</div>

</div>
</div>
     
 
 
 
             
                    
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
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/swiper-bundle.min.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/jQuery-plugin-progressbar.js"></script>

    <script src="assets/js/jquery.barfiller.js"></script>

    <script src="assets/js/waypoints.min.js"></script>

    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/js/lightbox.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/isotope.pkgd.min.js"></script>

    <script src="assets/js/masonry.pkgd.min.js"></script>

    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <script src="assets/js/custom.js"></script>
        <!--=============== scripts  ===============-->
        <script   src="js/jquery.min.js"></script>
        <script   src="js/plugins.js"></script>
        <script   src="js/scripts.js"></script>
    </body>


</html>