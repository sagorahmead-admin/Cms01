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

$sql_page = "SELECT * FROM _page2 WHERE pageid='2'";
$result_page = mysqli_query($conn, $sql_page);
$row_page = mysqli_fetch_assoc($result_page);
$pageid = $row_page['pageid'];



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
                        <h3 class=" fw-bold flex-fill mb-0">Update security Camera Installation page</h3>

                    </div>
                </div>
            </div>
        </div>

        <!-- collapse tab  -->
        <div class="container">
            <div class="profile-head">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">1st Section</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">2nd Section</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#images" role="tab"
                            aria-controls="profile" aria-selected="false">3rd Section</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#skills" role="tab"
                            aria-controls="profile" aria-selected="false">4th Section</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab5" role="tab"
                            aria-controls="profile" aria-selected="false">5th Section</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab6" role="tab"
                            aria-controls="profile" aria-selected="false">6th Section</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- collapse tab panel -->
        <div class="container">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <!-- data table with action -->
                    <div class="container mt-3">

                        <!-- 1st tab content wirte here -->
                        <div class="section-title fl-wrap">
                            <h2>
                                <?php echo $row_page['cont1_title1']; ?>
                            </h2>
                            <form action="security_camera_page_server.php" method="POST">
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
                            <h2>
                                <?php echo $row_page['cont2_title2']; ?>
                            </h2>
                            <form action="security_camera_page_server.php" method="POST">
                                <div class="input-group mb-3">
                                    <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                    <input name="cont2_title2" type="text" class="form-control" placeholder="Title"
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
                                <?php echo $row_page['cont3_text1']; ?>
                            </p>
                            <form action="security_camera_page_server.php" method="POST">
                                <div class="input-group">
                                    <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                    <textarea name="cont3_text1" placeholder="Text about 350 character."
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
                            <div class="fl-wrap d-flex justify-content-between">
                                <div class="w-30">
                                    <img src="../assets/assets2/images/<?php echo $row_page['cont3_img']; ?>"
                                        class="w-100" alt="" srcset="">
                                </div>
                                <div class="w-70">
                                    <form action="security_camera_page_server.php" method="POST"
                                        enctype="multipart/form-data">
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
                            </div>
                            <div class="sec-title_dec"></div>
                        </div>
                        <!-- 1st tab content end here -->
                    </div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- data table with action -->
                    <div class="container mt-3">
                        <!-- 2nd tab content wirte here -->
                        <div class="fl-wrap d-flex justify-content-between">
                            <div class="w-30">
                                <img src="../assets/assets2/images/<?php echo $row_page['cont4_img']; ?>" class="w-100"
                                    alt="" srcset="">
                            </div>
                            <div class="w-70">
                                <form action="security_camera_page_server.php" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="cont4_img">Click to Choose File</label>
                                        <input type="text" hidden name="pageid" id="pageid"
                                            value="<?php echo $pageid; ?>">
                                        <input type="file" class="form-control" name="cont4_img" id="cont4_img">
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <p>
                            <?php echo $row_page['cont5_text2']; ?>
                        </p>
                        <form action="security_camera_page_server.php" method="POST">
                            <div class="input-group">
                                <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                <input name="cont5_text2" placeholder="Text about 350 character."
                                    style="white-space: pre-line" class="form-control" aria-label="With textarea" />
                                <div class="input-group-prepend">
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-1 "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <p>
                            <?php echo $row_page['cont6_text3']; ?>
                        </p>
                        <form action="security_camera_page_server.php" method="POST">
                            <div class="input-group">
                                <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                <textarea name="cont6_text3" placeholder="Text about 350 character."
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
                <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- data table with action -->
                    <div class="container mt-3">

                        <!-- 3rd tab content wirte here -->
                        <div class="fl-wrap d-flex justify-content-between">
                            <div class="w-30">
                                <img src="../assets/assets2/images/<?php echo $row_page['cont7_img']; ?>" class="w-100"
                                    alt="" srcset="">
                            </div>
                            <div class="w-70">
                                <form action="security_camera_page_server.php" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="cont7_img">Click to Choose File</label>
                                        <input type="text" hidden name="pageid" id="pageid"
                                            value="<?php echo $pageid; ?>">
                                        <input type="file" class="form-control" name="cont7_img" id="cont7_img">
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <p>
                            <?php echo $row_page['cont7_title3']; ?>
                        </p>
                        <form action="security_camera_page_server.php" method="POST">
                            <div class="input-group">
                                <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                <input name="cont7_title3" placeholder="" style="white-space: pre-line"
                                    class="form-control" aria-label="With textarea" />
                                <div class="input-group-prepend">
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-1 "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <p>
                            <?php echo $row_page['cont7_text']; ?>
                        </p>
                        <form action="security_camera_page_server.php" method="POST">
                            <div class="input-group">
                                <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                <textarea name="cont7_text" placeholder="Text about 350 character."
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
                        <!-- 3rd tab content end here -->
                    </div>
                </div>

                
                <div class="tab-pane fade show" id="skills" role="tabpanel" aria-labelledby="home-tab">
                    <!-- data table with action -->
                    <div class="container mt-3">

                        <!-- 4th tab content wirte here -->

                        <div class="fl-wrap d-flex justify-content-between">
                            <div class="w-30">
                                <img src="../assets/assets2/images/<?php echo $row_page['cont12_img']; ?>" class="w-100"
                                    alt="" srcset="">
                            </div>
                            <div class="w-70">
                                <form action="security_camera_page_server.php" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="cont12_img">Click to Choose File</label>
                                        <input type="text" hidden name="pageid" id="pageid"
                                            value="<?php echo $pageid; ?>">
                                        <input type="file" class="form-control" name="cont12_img" id="cont12_img">
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <p>
                            <?php echo $row_page['cont12_title']; ?>
                        </p>
                        <form action="security_camera_page_server.php" method="POST">
                            <div class="input-group">
                                <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                <input name="cont12_title" placeholder="" style="white-space: pre-line"
                                    class="form-control" aria-label="With textarea" />
                                <div class="input-group-prepend">
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-1 "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <p>
                            <?php echo $row_page['cont12_text']; ?>
                        </p>
                        <form action="security_camera_page_server.php" method="POST">
                            <div class="input-group">
                                <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                <textarea name="cont12_text" placeholder="Text about 350 character."
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
                    <!-- 4th tab content end here -->
                </div>

                <div class="tab-pane fade show" id="tab5" role="tabpanel" aria-labelledby="home-tab">
                    <!-- data table with action -->
                    <div class="container mt-3">

                        <!-- 5th tab content wirte here -->

                        <div class="fl-wrap d-flex justify-content-between">
                            <div class="w-30">
                                <img src="../assets/assets2/images/<?php echo $row_page['cont13_img']; ?>" class="w-100"
                                    alt="" srcset="">
                            </div>
                            <div class="w-70">
                                <form action="security_camera_page_server.php" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="cont13_img">Click to Choose File</label>
                                        <input type="text" hidden name="pageid" id="pageid"
                                            value="<?php echo $pageid; ?>">
                                        <input type="file" class="form-control" name="cont13_img" id="cont13_img">
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <p>
                            <?php echo $row_page['cont13_title']; ?>
                        </p>
                        <form action="security_camera_page_server.php" method="POST">
                            <div class="input-group">
                                <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                <input name="cont13_title" placeholder="" style="white-space: pre-line"
                                    class="form-control" aria-label="With textarea" />
                                <div class="input-group-prepend">
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-1 "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <p>
                            <?php echo $row_page['cont13_text']; ?>
                        </p>
                        <form action="security_camera_page_server.php" method="POST">
                            <div class="input-group">
                                <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                <textarea name="cont13_text" placeholder="Text about 350 character."
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
                    <!-- 5th tab content end here -->
                </div>


                <div class="tab-pane fade show" id="tab6" role="tabpanel" aria-labelledby="home-tab">
                    <!-- data table with action -->
                    <div class="container mt-3">

                        <!-- 5th tab content wirte here -->

                        <div class="fl-wrap d-flex justify-content-between">
                            <div class="w-30">
                                <img src="../assets/assets2/images/<?php echo $row_page['cont14_img']; ?>" class="w-100"
                                    alt="" srcset="">
                            </div>
                            <div class="w-70">
                                <form action="security_camera_page_server.php" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="cont14_img">Click to Choose File</label>
                                        <input type="text" hidden name="pageid" id="pageid"
                                            value="<?php echo $pageid; ?>">
                                        <input type="file" class="form-control" name="cont14_img" id="cont14_img">
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <p>
                            <?php echo $row_page['cont14_title']; ?>
                        </p>
                        <form action="security_camera_page_server.php" method="POST">
                            <div class="input-group">
                                <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                <input name="cont14_title" placeholder="" style="white-space: pre-line"
                                    class="form-control" aria-label="With textarea" />
                                <div class="input-group-prepend">
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-1 "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <p>
                            <?php echo $row_page['cont14_text']; ?>
                        </p>
                        <form action="security_camera_page_server.php" method="POST">
                            <div class="input-group">
                                <input type="text" hidden name="pageid" value="<?php echo $pageid; ?>">
                                <textarea name="cont14_text" placeholder="Text about 350 character."
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
                    <!-- 4th tab content end here -->
                </div>



            </div>
        </div>

    </div>

</div>
</div>



<!-- Create task-->

<div class="modal fade" id="createtask" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <form action="slider_update_server.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="createprojectlLabel"> edit slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea786" class="form-label">Page Title</label>
                        <input value="<?php echo $pagetitle; ?>" name="pagetitle" class="form-control"
                            id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea786" class="form-label">Page Title</label>
                        <input value="<?php echo $pagetitle; ?>" name="pagetitle" class="form-control"
                            id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea786" class="form-label">Page Title</label>
                        <input value="<?php echo $pagetitle; ?>" name="pagetitle" class="form-control"
                            id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request" />
                    </div>

                    <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">select Slider image</label>
                        <input class="form-control" type="file" id="formFileDisabled">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>





<!-- // body Html code Ended here  -->
<?php
require_once('_footer.php');



?>