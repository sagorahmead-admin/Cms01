<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location: index.php');
    exit;
}
?>
<?php
$pagetitle = "Who are WE :: All Pages Settings";
$currentpage = "allpage";
?>
<?php
require('_dbconnection.php');
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
$row_page1 = mysqli_fetch_assoc($result_page1);
$pageid = $row_page1['pageid'];
//banner-img-work here
// $banner_img=" SELECT * FROM who-banner-img where id='1'";
// $result_logo = mysqli_query($conn, $banner_img); 



?>
<?php
require_once('_header.php');
require_once('_sidebar.php');
require_once('_bodyheader.php');
?>
<!-- // body Html code start from here  -->

<!-- Body: Body -->
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card border-0 mb-4 no-bg">
                    <div class="card-header py-3 px-0 d-flex align-items-center  justify-content-between border-bottom">
                        <h3 class=" fw-bold flex-fill mb-0">Update who are we page</h3>

                    </div>
                </div>
            </div>
        </div>

        <!-- collapse tab  -->
        <div class="container">
            <div class="profile-head">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab"
                            aria-controls="home" aria-selected="true">Banner Section </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
                            aria-selected="false">2nd Section</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4"
                            aria-selected="false">3rd Section</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- collapse tab panel -->
        <div class="container">
            <div class="tab-content profile-tab" id="myTabContent">
                <!-- 1st tab start here -->
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                    <!-- data table with action -->
                    <div class="container mt-3">
                        <div class="fl-wrap d-flex justify-content-between">
                            <!-- big banner img-->
                            <div class="w-30">
                                <img src="../images/<?php echo $row_page1['cont3_img']; ?>" class="w-100" alt=""
                                    srcset="">
                            </div>
                            <div class="w-70">
                                <form action="who_are_we_page_server.php" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="cont3_img">Click to Choose File</label>
                                        <input type="text" hidden name="pageid" id="pageid"
                                            value="<?php echo $pageid; ?>">
                                        <input type="file" class="form-control" name="cont3_img" id="cont3_img">
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </form>
                            </div>
                            <!-- small top banner img-->
                            <div class="w-30">
                                <img src="../images/<?php echo $row_page1['cont3_img2']; ?>" class="w-100" alt=""
                                    srcset="">
                            </div>
                            <div class="w-70">
                                <form action="who_are_we_page_server.php" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="cont3_img2">Click to Choose File</label>
                                        <input type="text" hidden name="pageid" id="pageid"
                                            value="<?php echo $pageid; ?>">
                                        <input type="file" class="form-control" name="cont3_img2" id="cont3_img2">
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="section-title fl-wrap">
                            <h2>
                                <?php echo $row_page1['cont1_title1']; ?>
                            </h2>
                            <form action="who_are_we_page_server.php" method="POST">
                                <div class="input-group mb-3">
                                    <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                    <input name="cont1_title1" type="text" class="form-control" placeholder="Title"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                            <button type="submit" class="btn btn-dark ms-1 "><i
                                                    class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p>
                                <?php echo $row_page1['cont2_text1']; ?>
                            </p>
                            <form action="who_are_we_page_server.php" method="POST">
                                <div class="input-group">
                                    <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                    <textarea name="cont2_text1" placeholder="Text about 350 character."
                                        style="white-space: pre-line" class="form-control"
                                        aria-label="With textarea"></textarea>
                                    <div class="input-group-prepend">
                                        <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                            <button type="submit" class="btn btn-dark ms-1 "><i
                                                    class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="sec-title_dec"></div>
                        </div>
                        <!-- 1st tab content end here -->
                    </div>
                </div>
                <!-- 1st End here -->

                <!-- 2nd start here -->
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                    <!-- data table with action -->
                    <div class="container mt-3">
                        <!-- 2nd tab content wirte here -->
                        <div class="fl-wrap d-flex justify-content-between">
                            <div class="w-30">
                                <img src="../images/<?php echo $row_page1['cont5_title2']; ?>" class="w-100" alt=""
                                    srcset="">
                            </div>
                            <div class="w-70">
                                <form action="who_are_we_page_server.php" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="cont4_text2_lebel">Click to Chose File</label>
                                        <input type="text" hidden name="pageid" id="pageid"
                                            value="<?php echo $pageid; ?>">
                                        <input type="file" class="form-control" name="cont5_title2" id="cont4_text2_lebel">
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <p>
                            <?php echo $row_page1['cont4_text2']; ?>
                        </p>
                        <form action="who_are_we_page_server.php" method="POST">
                            <div class="input-group">
                                <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                <textarea name="cont4_text2" placeholder="Text about 350 character."
                                    style="white-space: pre-line" class="form-control"
                                    aria-label="With textarea"></textarea>
                                <div class="input-group-prepend">
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-1 "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- 2nd tab content end here -->
                    </div>
                </div>
                <!-- 2nd tab End here -->
<!-- 
                 3rd tab start here
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-3">
                     data table with action 
                    <div class="container mt-3">

                        3rd tab content wirte here 
                        <div class="section-title fl-wrap">
                            <h2>
                                <?php // echo $row_page1['cont5_title2']; ?>
                            </h2>
                            <form action="who_are_we_page_server.php" method="POST">
                                <div class="input-group mb-3">
                                    <input type="text" hidden name="pageid" value="<?php //echo $pageid; ?>">
                                    <input type="text" name="cont5_title2" class="form-control" placeholder="Title"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                            <button type="submit" class="btn btn-dark ms-1 "><i
                                                    class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p>
                                <?php //echo $row_page1['cont6_text3']; ?>
                            </p>
                            <form action="who_are_we_page_server.php" method="POST">
                                <div class="input-group">
                                    <input type="text" hidden name="pageid" value="<?php // echo $pageid ?>">
                                    <textarea name="cont6_text3" placeholder="Text about 500 character."
                                        style="white-space: pre-line" class="form-control"
                                        aria-label="With textarea"></textarea>
                                    <div class="input-group-prepend">
                                        <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                            <button type="submit" class="btn btn-dark ms-1 "><i
                                                    class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="sec-title_dec"></div>
                        </div>
                         3rd tab content end here 
                    </div>
                </div>
                 3rd tab End here 

                 -->
                <!-- 4th tab start here -->
                <div class="tab-pane fade show" id="tab4" role="tabpanel" aria-labelledby="tab-4">
                    <!-- data table with action -->
                    <div class="container mt-3">

                        <!-- 4th tab content wirte here -->
                        <div class="section-title fl-wrap">
                            <h2>
                                <?php echo $row_page1['cont7_title3']; ?>
                            </h2>
                            <form action="who_are_we_page_server.php" method="POST">
                                <div class="input-group mb-3">
                                    <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                    <input type="text" name="cont7_title3" class="form-control" placeholder="Title"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                            <button type="submit" class="btn btn-dark ms-1 "><i
                                                    class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form action="who_are_we_page_server.php" method="POST">
                                <div class="container">
                                    <div class="form-group row">
                                        <input hidden type="number" name="pageid" id="" value="<?php echo $pageid; ?>">
                                        <label for="title1" class="col-sm-2 col-form-label">Progress Title:</label>
                                        <div class="col-sm-10">
                                            <input name="cont8_pt1" type="text" class="form-control-plaintext"
                                                id="title1" value="<?php echo $row_page1['cont8_pt1']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="percent1" class="col-sm-2 col-form-label">Progress Percent:</label>
                                        <div class="col-sm-10">
                                            <input name="cont12_pp1" type="number"
                                                value="<?php echo $row_page1['cont12_pp1']; ?>" class="form-control"
                                                id="percent1" placeholder="Write percentage without '%">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-group row">
                                        <label for="title2" class="col-sm-2 col-form-label">Progress Title:</label>
                                        <div class="col-sm-10">
                                            <input name="cont9_pt2" type="text" class="form-control-plaintext"
                                                id="title2" value="<?php echo $row_page1['cont9_pt2']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="percent2" class="col-sm-2 col-form-label">Progress Percent:</label>
                                        <div class="col-sm-10">
                                            <input name="cont13_pp2" value="<?php echo $row_page1['cont13_pp2']; ?>"
                                                type="number" class="form-control" id="percent2"
                                                placeholder="Write percentage without '%">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-group row">
                                        <label for="title3" class="col-sm-2 col-form-label">Progress Title:</label>
                                        <div class="col-sm-10">
                                            <input name="cont10_pt3" type="text" class="form-control-plaintext"
                                                id="title3" value="<?php echo $row_page1['cont10_pt3']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="percent3" class="col-sm-2 col-form-label">Progress Percent:</label>
                                        <div class="col-sm-10">
                                            <input name="cont14_pp3" value="<?php echo $row_page1['cont14_pp3']; ?>"
                                                type="number" class="form-control" id="percent3"
                                                placeholder="Write percentage without '%">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-group row">
                                        <label for="title4" class="col-sm-2 col-form-label">Progress Title:</label>
                                        <div class="col-sm-10">
                                            <input name="cont11_pt4" type="text" class="form-control-plaintext"
                                                id="title4" value="<?php echo $row_page1['cont11_pt4']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="percent4" class="col-sm-2 col-form-label">Progress Percent:</label>
                                        <div class="col-sm-10">
                                            <input name="cont15_pp4" value="<?php echo $row_page1['cont15_pp4']; ?>"
                                                type="number" class="form-control" id="percent4"
                                                placeholder="Write percentage without '%'">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                    <button type="submit" class="btn btn-dark ms-auto "><i
                                            class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                </div>

                            </form>
                            <div class="sec-title_dec"></div>
                        </div>
                        <!-- 4th tab content end here -->
                    </div>
                </div>
                <!-- 4th tab start here -->

            </div>

        </div>

    </div>
</div>





<!-- // body Html code Ended here  -->
<?php
require_once('_footer.php');



?>