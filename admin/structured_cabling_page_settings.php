<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header('location: index.php');
  exit;
}
?>
<?php 
$pagetitle = "Structured Cabling Page Settings :: All Pages Settings"; 
$currentpage = "allpage"; 
$formactionurl = "structured_cabling_page_server.php";
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

    $sql_page = "SELECT * FROM _page3 WHERE pageid='3'";
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
                        <h3 class=" fw-bold flex-fill mb-0">Update structured cabling  page</h3>

                    </div>
                </div>
            </div>
        </div>

        <!-- collapse tab  -->
        <div class="container">
            <div class="profile-head">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab1" role="tab"
                            aria-controls="home" aria-selected="true">1st Section</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab2" role="tab"
                            aria-controls="profile" aria-selected="false">2nd Section</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab3" role="tab"
                            aria-controls="profile" aria-selected="false">3rd Section</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab4" role="tab"
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
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
                    <!-- data table with action -->
                    <div class="container mt-3">

                        <!-- 1st tab content wirte here -->
                        <div class="section-title fl-wrap">
                        <div class="fl-wrap d-flex justify-content-between">
                            <div class="w-30">
                                <img src="../assets/assets3/images/<?php echo $row_page['content1']; ?>" class="w-100" alt=""
                                    srcset="">
                            </div>
                            <div class="w-70">
                                <form action="<?php echo $formactionurl; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="image-input-file1">Click to Choose File</label>
                                        <input type="text" hidden name="img[pageid]" id="pageid"
                                            value="<?php echo $pageid;?>">
                                        <input type="file" class="form-control" name="img[content1]" id="image-input-file1" multiple>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                            <h2><?php echo $row_page['content2']; ?></h2>
                            <form action="<?php echo $formactionurl; ?>" method="POST">
                                <div class="input-group mb-3">
                                    <input type="text" hidden name="text[pageid]" value="<?php echo $pageid; ?>">
                                    <input name="text[content2]" type="text" class="form-control" placeholder="Title"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                            <button type="submit" class="btn btn-dark ms-1 "><i
                                                    class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p><?php echo $row_page['content3']; ?></p>
                            <form action="<?php echo $formactionurl; ?>" method="POST">
                                <div class="input-group">
                                    <input type="text" hidden name="text[pageid]" value="<?php echo $pageid; ?>">
                                    <textarea name="text[content3]" placeholder="Text about 350 character."
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
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- data table with action -->
                    
                    <div class="container mt-3">
                        <!-- 2nd tab content wirte here -->

                        
                        <div class="section-title fl-wrap">
                        <div class="fl-wrap d-flex justify-content-between">
                            <div class="w-30">
                                <img src="../assets/assets3/images/<?php echo $row_page['content4']; ?>" class="w-100" alt=""
                                    srcset="">
                            </div>
                            <div class="w-70">
                                <form action="<?php echo $formactionurl; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="content4">Click to Choose File</label>
                                        <input type="text" hidden name="img[pageid]" id="pageid"
                                            value="<?php echo $pageid;?>">
                                        <input type="file" class="form-control" name="img[content4]" id="content4" multiple>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                            <h2><?php echo $row_page['content5']; ?></h2>
                            <form action="<?php echo $formactionurl; ?>" method="POST" enctype="multipart/form-data" >
                                <div class="input-group mb-3">
                                    <input type="text" hidden name="text[pageid]" value="<?php echo $pageid; ?>">
                                    <input name="text[content5]" type="text" class="form-control" placeholder="Title"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                            <button type="submit" class="btn btn-dark ms-1 "><i
                                                    class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p><?php echo $row_page['content6']; ?></p>
                            <form action="<?php echo $formactionurl; ?>" method="POST">
                                <div class="input-group">
                                    <input type="text" hidden name="text[pageid]" value="<?php echo $pageid; ?>">
                                    <textarea name="text[content6]" placeholder="Text about  character."
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
                        
                        <!-- 2nd tab content end here -->
                    </div>
               
                </div>
                
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- data table with action -->
                    <div class="container mt-3">
                        <!-- 3rd tab content wirte here -->

                        
                        <div class="section-title fl-wrap">
                        <div class="fl-wrap d-flex justify-content-between">
                            <div class="w-30">
                                <img src="../assets/assets3/images/<?php echo $row_page['content9']; ?>" class="w-100" alt=""
                                    srcset="">
                            </div>
                            <div class="w-70">
                                <form action="<?php echo $formactionurl; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="content9">Click to Choose File</label>
                                        <input type="text" hidden name="img[pageid]" id="pageid"
                                            value="<?php echo $pageid;?>">
                                        <input type="file" class="form-control" name="img[content9]" id="content9" multiple>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                            <h2><?php echo $row_page['content7']; ?></h2>
                            <form action="<?php echo $formactionurl; ?>" method="POST" enctype="multipart/form-data" >
                                <div class="input-group mb-3">
                                    <input type="text" hidden name="text[pageid]" value="<?php echo $pageid; ?>">
                                    <input name="text[content7]" type="text" class="form-control" placeholder="Title"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                            <button type="submit" class="btn btn-dark ms-1 "><i
                                                    class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p><?php echo $row_page['content8']; ?></p>
                            <form action="<?php echo $formactionurl; ?>" method="POST">
                                <div class="input-group">
                                    <input type="text" hidden name="text[pageid]" value="<?php echo $pageid; ?>">
                                    <textarea name="text[content8]" placeholder="Text about  character."
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
                        
                        <!-- 3rdtab content end here -->
                    </div>
               
                </div>
                <div class="tab-pane fade show" id="tab4" role="tabpanel" aria-labelledby="home-tab">
                    <!-- data table with action -->
                    
                    <div class="container mt-3">
                        <!-- 4th tab content wirte here -->

                        
                        <div class="section-title fl-wrap">
                        <div class="fl-wrap d-flex justify-content-between">
                            <div class="w-30">
                                <img src="../assets/assets3/images/<?php echo $row_page['content10']; ?>" class="w-100" alt=""
                                    srcset="">
                            </div>
                            <div class="w-70">
                                <form action="<?php echo $formactionurl; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="content10">Click to Choose File</label>
                                        <input type="text" hidden name="img[pageid]" id="pageid"
                                            value="<?php echo $pageid;?>">
                                        <input type="file" class="form-control" name="img[content10]" id="content10" multiple>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                            <h2><?php echo $row_page['content11']; ?></h2>
                            <form action="<?php echo $formactionurl; ?>" method="POST" enctype="multipart/form-data" >
                                <div class="input-group mb-3">
                                    <input type="text" hidden name="text[pageid]" value="<?php echo $pageid; ?>">
                                    <input name="text[content11]" type="text" class="form-control" placeholder="Title"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                            <button type="submit" class="btn btn-dark ms-1 "><i
                                                    class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p><?php echo $row_page['content12']; ?></p>
                            <form action="<?php echo $formactionurl; ?>" method="POST">
                                <div class="input-group">
                                    <input type="text" hidden name="text[pageid]" value="<?php echo $pageid; ?>">
                                    <textarea name="text[content12]" placeholder="Text about  character."
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
                <div class="tab-pane fade show" id="tab5" role="tabpanel" aria-labelledby="home-tab">
                    <!-- data table with action -->
                    <div class="container mt-3">
                        <!-- 5th tab content wirte here -->

                        
                        <div class="section-title fl-wrap">
                        <div class="fl-wrap d-flex justify-content-between">
                            <div class="w-30">
                                <img src="../assets/assets3/images/<?php echo $row_page['content13']; ?>" class="w-100" alt=""
                                    srcset="">
                            </div>
                            <div class="w-70">
                                <form action="<?php echo $formactionurl; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <label id="file-input-label" for="content13">Click to Choose File</label>
                                        <input type="text" hidden name="img[pageid]" id="pageid"
                                            value="<?php echo $pageid;?>">
                                        <input type="file" class="form-control" name="img[content13]" id="content13" multiple>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button type="submit" class="btn btn-dark ms-auto "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                            <h2><?php echo $row_page['content14']; ?></h2>
                            <form action="<?php echo $formactionurl; ?>" method="POST" enctype="multipart/form-data" >
                                <div class="input-group mb-3">
                                    <input type="text" hidden name="text[pageid]" value="<?php echo $pageid; ?>">
                                    <input name="text[content14]" type="text" class="form-control" placeholder="Title"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                            <button type="submit" class="btn btn-dark ms-1 "><i
                                                    class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p><?php echo $row_page['content15']; ?></p>
                            <form action="<?php echo $formactionurl; ?>" method="POST">
                                <div class="input-group">
                                    <input type="text" hidden name="text[pageid]" value="<?php echo $pageid; ?>">
                                    <textarea name="text[content15]" placeholder="Text about  character."
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
               
                
                </div>
                <div class="tab-pane fade show" id="tab6" role="tabpanel" aria-labelledby="home-tab">
                    <!-- data table with action -->
                    <div class="container mt-3">
                        <!-- 6th tab content wirte here -->

                        
                        <div class="section-title fl-wrap">
                            <h2><?php echo $row_page['content16']; ?></h2>
                            <form action="<?php echo $formactionurl; ?>" method="POST" enctype="multipart/form-data" >
                                <div class="input-group mb-3">
                                    <input type="text" hidden name="text[pageid]" value="<?php echo $pageid; ?>">
                                    <input name="text[content16]" type="text" class="form-control" placeholder="Title"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                            <button type="submit" class="btn btn-dark ms-1 "><i
                                                    class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p><?php echo $row_page['content17']; ?></p>
                            <form action="<?php echo $formactionurl; ?>" method="POST">
                                <div class="input-group">
                                    <input type="text" hidden name="text[pageid]" value="<?php echo $pageid; ?>">
                                    <textarea name="text[content17]" placeholder="Text about  character."
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
                        
                        <!-- 6th tab content end here -->
                    </div>
               
            
                </div>

            </div>

        </div>

    </div>
</div>





<!-- // body Html code Ended here  -->
<?php
require_once('_footer.php');



?>