<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header('location: index.php');
  exit;
}
?>
<?php 
$pagetitle = "Dashboard"; 
$currentpage = "dashboard"; 
?>



<?php 
require_once('_header.php');
require_once('_sidebar.php');
require_once('_bodyheader.php');
?>
<!-- // body Html code start from here  -->

        <!-- Body: Body -->
        <div class="body d-flex py-3">
            <div class="container-xxl">
                <div class="row g-3 mb-3 row-deck">
                    <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar lg  rounded-1 no-thumbnail bg-lightyellow color-defult"><i class="bi bi-journal-check fs-4"></i></div>
                                    <div class="flex-fill ms-4">
                                        <div class="">Total Pages</div>
                                        <h5 class="mb-0 ">12</h5>
                                    </div>
                                    <a href="task.html" title="view-members" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar lg  rounded-1 no-thumbnail bg-lightblue color-defult"><i class="bi bi-list-check fs-4"></i></div>
                                    <div class="flex-fill ms-4">
                                        <div class="">Total Email </div>
                                        <h5 class="mb-0 ">376</h5>
                                    </div>
                                    <a href="task.html" title="space-used" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar lg  rounded-1 no-thumbnail bg-lightgreen color-defult"><i class="bi bi-clipboard-data fs-4"></i></div>
                                    <div class="flex-fill ms-4">
                                        <div class="">Total User Visit</div>
                                        <h5 class="mb-0 ">2574</h5>
                                    </div>
                                    <a href="task.html" title="renewal-date" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
                <div class="row g-3 mb-3 row-deck">
                    <div class="col-md-12 col-lg-8 col-xl-7 col-xxl-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-5 col-lg-6 order-md-2 ">
                                        <div class="text-center p-4">
                                            <img src="assets/images/task-view.svg" alt="..." class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-7 col-lg-6 order-md-1 px-4">
                                        <h3 class="fw-bold ">Wellcome , KOHAN IT</h3>
                                        <p class="line-height-custom">Welcome back Dylan Hunter. This is admin Dashboard here you can do anything. You can update , delete, and add your contant . if you do someting here your main website update automatically </p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-5 col-xxl-5">
                        <form action="update_admin_info.php" method="POST">
                            <div class="alert alert-primary p-3 mb-0 w-100">
                                <h6 class="fw-bold mb-1">Change Your Admin Information</h6>

                                <div class="invisible">
                                    <input name="id" type="text" class="invisible" value="<?php echo $user_id; ?>">
                                </div>
                                <div class="my-3 ">
                                    <input name="email" type="text" class="form-control form-control-lg" placeholder="Enter Username">
                                </div>
                                <div class="my-3">
                                    <input name="password" type="password" class="form-control form-control-lg" placeholder="Enter Password">
                                </div>
                                <div class="my-3">
                                    <input name="cpassword" type="password" class="form-control form-control-lg" placeholder="Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Update Now </button>
                            </div>
                        </form>
                    </div>
                </div><!-- Row End -->
              
               
               
            </div>             
        </div>

<!-- // body Html code Ended here  -->
<?php
require_once('_footer.php');



?>