<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header('location: index.php');
  exit;
}
?>
<?php 
$pagetitle = "Slider Setting :: Home page"; 
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
                    <h3 class="fw-bold mb-0">Slider Settings</h3>
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
                                <button type="button" class="btn btn-secondary btn-set-task w-sm-100 ms-auto"
                                    data-bs-toggle="modal" data-bs-target="#createnewrecord"><i
                                        class="icofont-plus-circle me-2 fs-6"></i>ADD</button>
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
                                    <div class="py-2 d-flex align-items-center border-bottom">

                                        <div class="d-flex ms-2 align-items-center flex-fill">
                                            <img src="assets/images/xs/avatar6.jpg"
                                                class="avatar lg rounded-circle img-thumbnail" alt="avatar">
                                            <div class="d-flex flex-column ps-2">
                                                <h6 class="fw-bold mb-0"><?php echo $row['headline']; ?></h6>

                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-dark btn-set-task w-sm-100"
                                            data-bs-toggle="modal"
                                            data-bs-target="#createtask<?php echo $row['id'] ?>"><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update</button>
                                                <form action="slider_update_server.php" method="POST" class="p-0 m-0" >
                                                    <input type="text" name="id" hidden value="<?php echo $row['id']; ?>">
                                                    <input type="text" name="status" hidden value="deleted">
                                        <button type="submit" class="btn btn-primary btn-set-task w-sm-100 ms-2"
                                            ><i
                                                class="icofont-minus-circle me-2 fs-6"></i>Delete</button>
                                                </form>
                                    </div>
                                    <?php } } ?>



                                </div>
                            </div>
                        </div> <!-- .card: My Timeline -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Create task-->
<?php
require('_dbconnection.php');
$sql_slides = "SELECT * FROM _slides ORDER BY id ASC ";
$result_slides = mysqli_query($conn, $sql_slides);
$numrows = mysqli_num_rows($result);
if( $numrows > 0){
    while($row_s = mysqli_fetch_assoc($result_slides)){
        // $file = $row['file'];
        // $category = $row['category'];
        $id = $row_s['id'];
        $pagelink = $row_s['pagelink'];
        $headline = $row_s['headline'];
        $short_text = $row_s['short_text'];
        $pagetitle = $row_s['pagetitle'];

?>
<div class="modal fade" id="createtask<?php echo $id; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content overflow-scroll">
            <form action="slider_update_server.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="createprojectlLabel"> edit slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">



                    <div class="mb-3">
                        <input hidden type="text" name="id" value="<?php echo $id; ?>" >
                        <label  class="form-label">Page Link</label>
                        <input value="<?php echo $pagelink; ?>" name="pagelink" class="form-control"
                            id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request" />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Page Title</label>
                        <input value="<?php echo $pagetitle; ?>" name="pagetitle" class="form-control"
                            id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request" />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Head line</label>
                        <textarea name="headline" class="form-control" id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request"><?php echo $headline; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Description </label>
                        <textarea name="short_text" class="form-control" id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request"><?php echo $short_text; ?></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>


<?php 
       }
    }
   
?>
<div class="modal fade" id="createnewrecord" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content overflow-scroll">
            <form action="slider_update_server.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="createprojectlLabel"> edit slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="mb-3">
                        <label  class="form-label">Page Link</label>
                        <input type="file"  name="filename" class="form-control"
                            id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request" />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Page Link</label>
                        <input  name="pagelink" class="form-control"
                            id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request" />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Page Title</label>
                        <input  name="pagetitle" class="form-control"
                            id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request" />
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Head line</label>
                        <textarea name="headline" class="form-control" id="exampleFormControlTextarea786" rows="3"
                            placeholder="Add any extra details about the request"></textarea>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Description </label>
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


</div>

<!-- // body Html code Ended here  -->
<?php
require_once('_footer.php');



?>