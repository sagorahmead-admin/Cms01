<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header('location: index.php');
  exit;
}
?>
<?php 
$pagetitle = "Slider Images Setting :: Home page"; 
$currentpage = "homepage"; 
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
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div
                    class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Slider Image Settings</h3>
                    <div class="col-auto d-flex w-sm-100">

                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row clearfix  g-3">
            <div class="col-lg-12 col-md-12 flex-column">
                <div class="row g-3 row-deck">


                    <div class="col-xxl-11 col-xl-10 col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-header py-3 d-flex align-items-center">
                                <h6 class="mb-0 fw-bold ">slider</h6>
                                
                            </div>
                            <div class="card-body">
                                <div class="flex-grow-1 mem-list">
                                    <?php require('_dbconnection.php');
                                            $sql = "SELECT * FROM _slides ORDER BY id ASC ";
                                            $result = mysqli_query($conn, $sql);
                                            $numrows = mysqli_num_rows($result);
                                            if( $numrows > 0){
                                                while($row = mysqli_fetch_assoc($result)){
     
                                        ?>
                                    <div class="py-2 d-flex align-items-center border-bottom" style="height: 100px">

                                        <div class="d-flex ms-2 align-items-center flex-fill">
                                            <div class="col-md-3 border rounded-corner">
                                                <img class="card-img-top rounded-corner" src="../images/<?php echo $row['filename']; ?>" alt="" />
                                            </div>
                                            <div class="d-flex flex-column ps-2">
                                                <h6 class="fw-bold mb-0"><?php echo $row['headline']; ?></h6>
                                            </div>
                                        </div>
                                        <button onclick="getidtomodal(<?php echo $row['id']; ?>)" type="button" class="btn btn-dark btn-set-task w-sm-100"
                                            data-bs-toggle="modal" data-bs-target="#createtask"><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update</button>
                                       
                                    </div>
                                    <?php } } ?>



                                </div>
                            </div>
                        </div> 
                        <!-- .card: My Timeline -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Create task-->
<!-- <div class="modal fade" id="createtask" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content overflow-scroll">
            <form action="slider_update_server.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="createprojectlLabel"> edit slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <div class="mb-3">
                        <select name="pagelink" class="form-select" aria-label="Default select example">
                            <option selected>Select Page</option>


                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultipleone" class="form-label">Upload Image</label>
                        <input name="file" class="form-control" type="file" id="formFileMultipleone" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea786" class="form-label">Page Title</label>
                        <input name="pagetitle" class="form-control" id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea786" class="form-label">Head line</label>
                        <textarea name="headline" class="form-control" id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea786" class="form-label">Description </label>
                        <textarea name="short_text" class="form-control" id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div> -->
       <!-- Create Client-->
       <div class="modal fade" id="createtask" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <form action="slider_update_server.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Slider Image Upload</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        
                        <div class="mb-3">
                            <label for="formFileMultipleoneone" class="form-label"></label>
                            <input name="id" class="invisible" type="number" hidden id="getid" value="">
                            <input name="filename" class="form-control" type="file" id="formFileMultipleoneone" >
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