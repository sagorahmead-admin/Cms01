<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header('location: index.php');
  exit;
}
?>
<?php 
$pagetitle = "Logo Setting"; 
$currentpage = "logopage"; 
?>
<?php 
    require('_dbconnection.php');
    $sql = "SELECT * FROM _logo WHERE id='1'";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_assoc($result);
    $menuid = $row['id'];             
    $menulogo = $row['file'];

    $sql = "SELECT * FROM _logo WHERE id='2'";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_assoc($result);
    $footerid = $row['id'];             
    $footerlogo = $row['file'];

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
                                <h3 class=" fw-bold flex-fill mb-0">Update Your Logo</h3>
                                 
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
                <div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4">
                    <div class="col">
                        <div class="card teacher-card">
                            <div class="card-body  d-flex">
                                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                                    <img src="../images/<?php echo $menulogo; ?>" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                    <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                                       
                                    </div>
                                </div>
                                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                                    <h6  class="mb-0 mt-2  fw-bold d-block fs-6"> Manu Logo Update</h6>
                          
                                     <br>
                                     <br>

                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button onclick="getidtomodal(<?php echo $menuid; ?>)" type="button" class="btn btn-dark ms-1 " data-bs-toggle="modal" data-bs-target="#createproject"><i class="icofont-plus-circle me-2 fs-6"></i>Upload logo</button>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card teacher-card">
                            <div class="card-body  d-flex">
                                <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                                    <img src="../images/<?php echo $footerlogo; ?>" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                    <div class="about-info d-flex align-items-center mt-1 justify-content-center flex-column">
                                       
                                        
                                    </div>
                                </div>
                                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                                    <h6  class="mb-0 mt-2  fw-bold d-block fs-6"> Footer Logo Update</h6>
                          
                                     <br>
                                     <br>

                                    <div class="d-flex flex-wrap align-items-center ct-btn-set">
                                        <button onclick="getidtomodal(<?php echo $footerid; ?>)" type="button" class="btn btn-dark ms-1 " data-bs-toggle="modal" data-bs-target="#createproject"><i class="icofont-plus-circle me-2 fs-6"></i>Upload logo</button>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                     
                
                  
                </div>
            </div>
        </div>
        
 

       <!-- Create Client-->
       <div class="modal fade" id="createproject" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <form action="logo_update_server.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Logo Upload</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        
                        <div class="mb-3">
                            <label for="formFileMultipleoneone" class="form-label"></label>
                            <input name="id" class="invisible" type="number" id="getid" value="">
                            <input name="file" class="form-control" type="file" id="formFileMultipleoneone" >
                        </div>
                        
                    
                        
                    </div>
                    <div class="modal-footer">
                        
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div> 
                </div>  
            </form>
        </div>
       </div>


<!-- // body Html code Ended here  -->
<?php
require_once('_footer.php');



?>

