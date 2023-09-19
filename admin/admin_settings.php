<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header('location: index.php');
  exit;
}
?>
<?php 
$pagetitle = "Admin Setting :: Home page"; 
$currentpage = "admin"; 
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
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card border-0 mb-4 no-bg">
                    <div class="card-header py-3 px-0 d-flex align-items-center  justify-content-between border-bottom">
                        <h3 class=" fw-bold flex-fill mb-0">Update Admin Profile</h3>

                    </div>
                </div>
            </div>
        </div>
        <!-- Row End -->
        <div class="row col-sm-12">

            <div class="col-md-12 col-lg-4 col-xl-5 col-xxl-5">
                <form action="update_admin_info.php" method="POST">
                    <div class="alert alert-primary p-3 mb-0 w-100">
                        <h6 class="fw-bold mb-1">Change Your Admin Information</h6>

                        <div class="invisible">
                            <input name="id" type="text" hidden class="invisible" value="<?php echo $user_id; ?>">
                        </div>
                        <div class="d-flex my-3">
                            <div class="col-sm m-2">
                                <input value="<?php echo $row['first_name']; ?>" name="first_name" type="text" class="m-0 form-control form-control-lg"
                                    placeholder="First Name">
                            </div>
                            <div class="col-sm m-2" >
                            <input value="<?php echo $row['last_name']; ?>" name="last_name" type="text" class="m-0 form-control form-control-lg"
                                placeholder="Last Name">
                        </div>
                        </div>




                        <div class="my-3 ">
                            <input value="<?php echo $row['email']; ?>" name="email" type="text" class="form-control form-control-lg"
                                placeholder="Enter Username">
                        </div>
                        <div class="my-3">
                            <input name="password" type="password" class="form-control form-control-lg"
                                placeholder="Enter Password">
                        </div>
                        <div class="my-3">
                            <input name="cpassword" type="password" class="form-control form-control-lg"
                                placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Update Now </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Row End -->
    </div>
</div>

<!-- // body Html code Ended here  -->
<?php
require_once('_footer.php');



?>