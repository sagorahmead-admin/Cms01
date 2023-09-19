<?php
require('admin/_dbconnection.php');
$sql = "SELECT * FROM _logo WHERE id='1'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$manulogo = $row['file'];

?>

<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from pelzari.kwst.net/site/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Apr 2023 14:07:44 GMT -->

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Home | KohanIt</title>
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
    <style>
        @media only screen and (max-width:375px) {
            .nav-button {
                left: 321px;
            }

            .nav {
                display: hidden;
            }
        }

        @media only screen and (max-width:414px) {
            .nav-button {
                left: 321px;
            }

            .nav {
                display: hidden;
            }
        }

        @media only screen and (max-width:390px) {
            .nav-button {
                left: 321px;
            }

            .nav {
                display: hidden;
            }
        }

        @media only screen and (max-width:390px) {
            .nav-button {
                left: 821px;
            }

            .nav {
                display: hidden;
            }
        }

        @media only screen and (max-width:820px) {
            .nav-button {
                left: 321px;
            }

            .hidenav {
                display: none;
            }
        }
    </style>
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
            <a href="index.php" class="logo-holder "><img src="images/<?php echo $manulogo; ?>" alt=""></a>

            <div class="progress-bar-wrap">
                <div class="progress-bar color-bg"></div>
            </div>
            <!-- nav-button-wrap-->
            <div class="nav-button but-hol">
                <span class="nos"></span>
                <span class="ncs"></span>
                <span class="nbs"></span>
                <div class="menu-button-text">Menu</div>
            </div>
            <!-- nav-button-wrap end-->

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
            <div class="content-holder" data-pagetitle="Home Slider">
                <!-- nav-holder-->
                <div class="nav-holder but-hol">
                    <div class="nav-scroll-bar-wrap fl-wrap">
                        <a href="index.php" class="ajax logo_menu"><img src="images/logomain.png" alt=""></a>
                        <div class="nav-container fl-wrap">
                            <!-- nav -->
                            <nav class="nav-inner" id="menu">
                                <ul>
                                    <li>
                                        <a href="index.php" class="act-link">Home</a>

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
                <!-- hero-wrap  -->
                <div class="hero-wrap fl-wrap full-height scroll-con-sec" id="sec0">
                    <!--fs-slider-wrap -->
                    <div class="fs-slider-wrap fs-slider-det full-height fl-wrap">
                        <div class="fs-slider lightgallery full-height fl-wrap" data-mousecontrol2="false">
                            <div class="swiper-container  ">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide-->
                                    <?php require('admin/_dbconnection.php');
                                    $sql = "SELECT * FROM _slides ORDER BY id ASC ";
                                    $result = mysqli_query($conn, $sql);
                                    $numrows = mysqli_num_rows($result);
                                    if ($numrows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            ?>
                                            <!-- swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="fs-slider-item fl-wrap">
                                                    <div class="fs-slider_align_title">
                                                        <div class="hhw_header">
                                                            <?php echo $row['pagetitle'] ?>
                                                        </div>
                                                        <h2><a href="<?php echo $row['pagelink'] ?>"
                                                                class="custom-scroll-link"><?php echo $row['headline'] ?></span></a></h2>
                                                        <p>
                                                            <?php echo $row['short_text'] ?>
                                                        </p>
                                                        <div class="clearfix"></div>
                                                        <a href="<?php echo $row['pagelink'] ?>"
                                                            class="hero_btn custom-scroll-link">Read More About Us</a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                    <!-- swiper-slide-->

                                </div>
                            </div>
                        </div>
                        <!-- hero-slider-img-->
                        <div class="hero-slider-img hidden-item">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide-->
                                    <?php require('admin/_dbconnection.php');
                                    $sql = "SELECT * FROM _slides ORDER BY id ASC ";
                                    $result = mysqli_query($conn, $sql);
                                    $numrows = mysqli_num_rows($result);
                                    if ($numrows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            ?>
                                            <!-- swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="bg" data-bg="images/<?php echo $row['filename'] ?>"
                                                    data-swiper-parallax="20%"></div>
                                                <div class="overlay"></div>
                                            </div>
                                        <?php }
                                    } ?>
                                    <!-- swiper-slide end-->

                                </div>
                            </div>
                        </div>
                        <!-- hero-slider-img  end-->
                    </div>

                    <div class="hero-slider_details_wrap">
                        <div class="nav" style="display: flex; align-items: center;">
                            <div class="hidenav" style="padding-right: 22px; color: white; font-size: 20px;">
                                <a href="index.php" style="color: white;">Home</a>
                            </div>

                            <div class="hidenav" style="padding-right: 22px; color: white; font-size: 20px;">
                                <a href="who_are_we.php" style="color: white;">Who are We</a>
                            </div>

                            <div class="hidenav" style="padding-right: 22px; color: white; font-size: 20px;">
                                <a href="security_camera.php" style="color: white;">Security Camera</a>
                            </div>
                            <div class="hidenav" style="padding-right: 22px; color: white; font-size: 20px;">
                                <a href="structured_cabling.php" style="color: white;">Structured Cabling</a>
                            </div>
                            <div class="hidenav" style="padding-right: 22px; color: white; font-size: 20px;">
                                <a href="intercoms.php" style="color: white;">Intercoms</a>
                            </div>
                            <div class="hidenav" style="padding-right: 22px; color: white; font-size: 20px;">
                                <a href="LOW_VOLTAGE_SYSTEM.php" style="color: white;">Low voltage

                                    Access Control</a>
                            </div>
                            <div class="hidenav" style="padding-right: 22px; color: white; font-size: 20px;">
                                <a href="contacts.php" style="color: white;">Contact Us</a>
                            </div>




                        </div>

                    </div>
                    <!-- hero-wrap  end-->

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
        <script src="js/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
</body>


</html>