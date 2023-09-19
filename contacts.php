<?php 
require_once('admin/_dbconnection.php');
$message = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $cid = "";
    $cname = "";
    $cnumber = "";
    $cemail = "";
    $csubject = "";
    $ctext = "";
    $cstatus = "";


    if(empty($cid) || $cid == ""){
        $cname = mysqli_real_escape_string($conn, $_POST['cname']);
        $cemail = mysqli_real_escape_string($conn, $_POST['cemail']);
        $cnumber = mysqli_real_escape_string($conn, $_POST['cnumber']);
        $csubject = mysqli_real_escape_string($conn, $_POST['csubject']);
        $ctext = mysqli_real_escape_string($conn, $_POST['ctext']);
        $cstatus = mysqli_real_escape_string($conn, $_POST['cstatus']);
     
         $sql = "INSERT INTO `_contactpage`(`cname`, `cemail`, `cnumber`, `csubject`, `ctext`, `cstatus`) VALUES ('$cname','$cemail','$cnumber','$csubject','$ctext','$cstatus')";
         $query = mysqli_query($conn, $sql);
         if($query){
            $message = 'Successfully submited';
           header('location: contacts.php');

         }
         else{
            $message = 'Submiting fail. plz try again';
         }
    }
}



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

$sql_page = "SELECT * FROM _contactinfo WHERE pageid='6'";
$result_page = mysqli_query($conn, $sql_page);  
$row_page = mysqli_fetch_assoc($result_page);
$pageid = $row_page['pageid'];             

?>

<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from pelzari.kwst.net/site/contacts.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Apr 2023 16:04:59 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Contact | KohanIt</title>
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
                <div class="page-subtitle">
                    <span></span>
                </div>
                <a href="contacts.php" class="single-page-fixed-row-link "><i class="fal fa-envelope"></i> <span>Get In Touch</span></a>			
            </div>
            <!-- top-header  end-->		
            <!-- wrapper  -->	
            <div id="wrapper">
                <!-- content-holder  -->	
                <div class="content-holder" data-pagetitle="Our Contacts">
                    <!-- nav-holder-->
                    <div class="nav-holder but-hol">
                        <div class="nav-scroll-bar-wrap fl-wrap">
                            <a href="index.php" class=" logo_menu"><img src="images/<?php echo $menulogo; ?>" alt=""></a>
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
                                        <li><a href="structured_cabling.php"class="custom-scroll-link">Structured Cabling</a></li>
                                        <li>
                                            <a href="intercoms.php" >Intercoms</a>
                                            <!--level 2 -->
                                            
                                        </li>
                                        <li>
                                            <a href="LOW_VOLTAGE_SYSTEM.php">
                                                Low voltage Access Control</a>
                                            <!--level 2 -->
                                            
                                        </li>
                                        <li>
                                            <a href="contacts.php" class="act-link">
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
                    <div class="content full-height cfh_nomob">
                        <!-- map-view-wrap --> 
                        <div class="map-view-wrap white-bg">
                            <div class="map-view-wrap_item fl-wrap">
                                <div class="contact-details">
                                    <h4>Contact Details</h4>
                                    <ul>
                                        <li><span>01. Write  :</span><a href="mailto:<?php echo $row_page
                        ['email']; ?>"><?php echo $row_page
                        ['email']; ?></a></li>
                                        <li><span>02. Find us : </span><a href="#"><?php echo $row_page
                        ['address']; ?></a> </li>
                                        <li><span>03. Call:</span><a href="tel:<?php echo $row_page
                        ['phone1']; ?>"><?php echo $row_page
                        ['phone1']; ?></a> , <a href="tel:<?php echo $row_page
                        ['phone2']; ?>"><?php echo $row_page
                        ['phone2']; ?></a></li>
                                    </ul>
                                </div>
                                <div class="btn float-btn act-cf">Get in Touch</div>
                            </div>
                        </div>
                        <!--map-view-wrap end -->						
                        <!--fixed-column-wrap-->
                        <div class="fixed-column-wrap fcw_fw">
                            <!--fixed-column-wrap-content-->
                            <div class="fixed-column-wrap-content">
                                <div class="fixed-column-wrap_bg">
                                    <div class="map-container">
                                        <div id="map-single" class="map" data-latlog="[40.714 , -74.005]" data-popuptext="Our Location in New York ."></div>
                                    </div>
                                    <div class="hero-scroll-down-notifer  ">
                                        <div class="scroll-down-wrap ">
                                            <div class="mousey">
                                                <div class="scroller"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fixed-column-dec"></div>
                                </div>
                                <div class="fwc-dec fwc-dec_top"></div>
                                <div class="fwc-dec fwc-dec_right"></div>
                                <div class="fixed-column-wrap_dec"></div>
                            </div>
                            <!--fixed-column-wrap-content end-->
                        </div>
                        <!--fixed-column-wrap end-->
                        <div class="limit-box fl-wrap"></div>
                        <!-- contact form wrap -->
                        <div class="contact-form-wrap">
                            <div class="contact-form-overlay"></div>
                            <div class="contact-form-container">
                                <div class="contact-form-content fl-wrap white-bg">
                                    <div class="contact-form-header fl-wrap">
                                        <h4>Get In Touch</h4>
                                        <span class="close-cf close-contact-form"><i class="fal fa-times"></i></span>
                                    </div>
                                    <div id="contact-form" class="fl-wrap">
                                        <div id="message"><?php echo $message; ?></div>
                                        <form  class="custom-form" method="POST" action="contacts.php" name="contactform" >
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" hidden name="cstatus" value="Pending"/>
                                                        <input type="text" name="cname" i placeholder="Your Name *"  value="" required/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" type="email"  name="cemail"  placeholder="Email Address *"  value="" required/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="cnumber"  placeholder="Your Phone *" value="" required/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="fl-wrap select-holder">
                                                            <select id="subject" name="csubject" required>
                                                                <option value="" disabled selected>Subject</option>
                                                                <option value="Support">Support</option>
                                                                <option value="New Project">New Project</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="question">
                                                    <textarea name="ctext"  cols="40" rows="3" placeholder="Your Message:" required></textarea>
                                                </div>
                                                <button class="btn fl-btn" id="submit"><span>Send Message</span> </button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--contact form wrap end --> 
                    </div>
                    <!-- content end  -->
                    <!-- footer -->
                    <div class="height-emulator fl-wrap"></div>
                    <footer class="main-footer">
                        <div class="container">
                            <div class="footer-decor">
                                <canvas id="bg-animation"></canvas>
                            </div>
                            <!-- footer-inner -->
                            <div class="footer-inner fl-wrap">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="footer-logo">
                                            <img src="images/<?php echo $footerlogo; ?>" alt="">
                                        </div>
                                        <div class="footer_text  footer-box fl-wrap">
                                            <p>All of us know that security should be built on quality, not on compromise. That single belief is at the heart of everything we do. Peace of mind comes from knowing that your security system will work flawlessly. Every time. Find out how Bhavitra Techsolutions can help you with your security needs today!</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="footer-header fl-wrap"><span>01.</span> Contacts</div>
                                        <!-- footer-contacts-->
                                        <div class="footer-contacts footer-box fl-wrap">
                                            <ul>
                                                <li><span>Call:</span><a href="tel:<?php echo $row_page['phone1'] ; ?>"><?php echo $row_page['phone1'] ; ?></a></li>
                                                <li><span>Write  :</span><a href="mailto:<?php echo $row_page['email'] ; ?>">yourmail@domain.com</a></li>
                                                <li><span>Find us : </span><a href="#"><?php echo $row_page['address'] ; ?></a></li>
                                            </ul>
                                        </div>
                                        <!-- footer contacts end -->
                                        <a href="contacts.php" class="ajax fc_button btn float-btn">Get In Touch</a>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="footer-header fl-wrap"><span>02.</span> Subscribe</div>
                                        <div class="footer-box fl-wrap">
                                            <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                            <div class="subcribe-form fl-wrap">
                                                <form id="subscribe" class="fl-wrap">
                                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                    <button type="submit" id="subscribe-button" class="subscribe-button">Send</button>
                                                    <label for="subscribe-email" class="subscribe-message"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer-inner end -->
                            <!-- subbfooter -->
                            <div class="subbfooter fl-wrap">
                                <div class="policy-box">
                                    <span>  2023  All rights reserved. </span>
                                </div>
                                <div class="footer-solcial">
                                    <ul>
                                        <li><a href="#" target="_blank">Fb</a></li>
                                        <li><a href="#" target="_blank">Tw</a></li>
                                        <li><a href="#" target="_blank">In</a></li>
                                        <li><a href="#" target="_blank">Be</a></li>
                                    </ul>
                                </div>
                                <div class="to-top-btn to-top"><i class="fal fa-long-arrow-up"></i></div>
                            </div>
                            <!-- subbfooter end -->
                        </div>
                    </footer>
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
        <script   src="js/jquery.min.js"></script>
        <script   src="js/plugins.js"></script>
        <script   src="js/scripts.js"></script>
    </body>

<!-- Mirrored from pelzari.kwst.net/site/contacts.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Apr 2023 16:04:59 GMT -->
</html>