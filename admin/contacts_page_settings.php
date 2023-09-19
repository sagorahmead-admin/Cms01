<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location: index.php');
    exit;
}
?>
<?php
$pagetitle = "Contacts Info Settings :: All Pages Settings";
$currentpage = "allpage";
$formactionurl = "contacts_page_server.php";
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

$sql_page = "SELECT * FROM _contactinfo WHERE pageid='6'";
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
                        <h3 class=" fw-bold flex-fill mb-0">Update Contact Info</h3>

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
                            aria-controls="home" aria-selected="true">Contact Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="counter-tab" data-toggle="tab" href="#tab2" role="tab"
                            aria-controls="profile" aria-selected="false">Social Links</a>
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
                            <form autocomplete="off" action="<?php echo $formactionurl; ?>" method="POST">
                                <div class="form-group row mt-3">
                                    <label for="phone1" class="col-sm-1 col-form-label">
                                        Phone-1:</label>
                                    <div class="col-sm-9"><input name="pageid" hidden
                                            value="<?php echo $row_page['pageid']; ?>" />
                                        <input name="phone1" value="<?php echo $row_page['phone1']; ?>" type="text"
                                            class="form-control" id="phone1" placeholder="+489756412322">

                                    </div>

                                    <div class="d-flex flex-wrap align-items-center ct-btn-set col-sm-2">
                                        <button type="submit" class="btn btn-dark ms-1 "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                    </div>
                                </div>
                            </form>
                            <form autocomplete="off" action="<?php echo $formactionurl; ?>" method="POST">
                                <div class="form-group row mt-3">
                                    <label for="phone2" class="col-sm-1 col-form-label">
                                        Phone-2:</label>
                                    <div class="col-sm-9"><input name="pageid" hidden
                                            value="<?php echo $row_page['pageid']; ?>" />
                                        <input name="phone2" value="<?php echo $row_page['phone2']; ?>" type="text"
                                            class="form-control" id="phone2" placeholder=" +8(222)987654321">

                                    </div>

                                    <div class="d-flex flex-wrap align-items-center ct-btn-set col-sm-2">
                                        <button type="submit" class="btn btn-dark ms-1 "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                    </div>
                                </div>
                            </form>

                            <form autocomplete="off" action="<?php echo $formactionurl; ?>" method="POST">
                                <div class="form-group row mt-3">
                                    <label for="email" class="col-sm-1 col-form-label">
                                        Email:</label>
                                    <div class="col-sm-9"><input name="pageid" hidden
                                            value="<?php echo $row_page['pageid']; ?>" />
                                        <input name="email" value="<?php echo $row_page['email']; ?>" type="text"
                                            class="form-control" id="email" placeholder="YOURMAIL@DOMAIN.COM">

                                    </div>

                                    <div class="d-flex flex-wrap align-items-center ct-btn-set col-sm-2">
                                        <button type="submit" class="btn btn-dark ms-1 "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                    </div>
                                </div>
                            </form>
                            <form autocomplete="off" action="<?php echo $formactionurl; ?>" method="POST">
                                <div class="form-group row mt-3">
                                    <label for="address" class="col-sm-1 col-form-label">
                                        Address:</label>
                                    <div class="col-sm-9"><input name="pageid" hidden
                                            value="<?php echo $row_page['pageid']; ?>" />
                                        <input name="address" value="<?php echo $row_page['address']; ?>" type="text"
                                            class="form-control" id="address" placeholder="USA 27TH BROOKLYN NY">

                                    </div>

                                    <div class="d-flex flex-wrap align-items-center ct-btn-set col-sm-2">
                                        <button type="submit" class="btn btn-dark ms-1 "><i
                                                class="icofont-plus-circle me-2 fs-6"></i>Update Now</button>
                                    </div>
                                </div>
                            </form>

                            <div class="sec-title_dec"></div>
                        </div>
                        <!-- 1st tab content end here -->
                    </div>
                </div>


                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="counter-tab">
                    <!-- data table with action -->
                    <div class="container mt-3">
                        <!-- 2nd tab content wirte here -->
                        <div class="d-flex flex-wrap align-items-center ct-btn-set col-sm-12">
                            <button type="button" class="btn btn-secondary btn-set-task w-sm-100 ms-auto"
                                data-bs-toggle="modal" data-bs-target="#counter_add"><i
                                    class="icofont-plus-circle me-2 fs-6"></i>ADD</button>
                        </div>

                        <div class="row clearfix g-3">
                            <div class="col-lg-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <table id="myProjectTable" class="table table-hover align-middle mb-0"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Social Site</th>

                                                    <th>Short Form</th>
                                                    <th>Social Links</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require_once('_dbconnection.php');
                                                $sql_counter = mysqli_query($conn, "SELECT * FROM _social_links");
                                                $numcounter = mysqli_num_rows($sql_counter);
                                                if ($numcounter > 0) {
                                                    while ($c_row = mysqli_fetch_assoc($sql_counter)) {

                                                        ?>
                                                        <tr>
                                                        <td>
                                                        <i class="<?php echo $c_row['social_icon']; ?>"></i>
                                                                <span class="fw-bold ms-1"><?php echo $c_row['social_name']; ?></span>
                                                        </td>
                                                        <td>
                                                            <?php echo $c_row['short_form']; ?>
                                                        </td>
                                                        <td>
                                                        <?php echo $c_row['social_link']; ?>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic outlined example">

                                                                <button type="button" class="btn btn-outline-secondary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#counter_update<?php echo $c_row['id'];?> ">
                                                                    <i class="icofont-edit text-success"></i></button>
                                                                    <form action="social_links_server.php" method="POST" enctype="multipart/form-data">
                                                                    <input name="id" type="text" hidden value="<?php echo $c_row['id']; ?>" />
                                                                    <input name="delete" type="text" hidden value="deleted" />
                                                                    <button type="submit"
                                                                    class="btn btn-outline-secondary deleterow"><i
                                                                        class="icofont-ui-delete text-danger"></i></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                        
                                                        <?php
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='6' style='text-align:center;'>No Data Found</td></tr>";
                                                }


                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--2nd tab content end here -->

                    </div>

                </div>



            </div>
        </div>


        <!-- Social site New Record creating Modal -->
        <div class="modal fade" id="counter_add" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content overflow-scroll">
                    <form action="social_links_server.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title  fw-bold" id="createprojectlLabel">Add Social Site</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3 row">
                                <label for="add_social_icon" class="col-sm-3 col-form-label">Icon class:</label>
                                <div class="col-sm-9">

                                    <input name="social_icon" type="text" class="form-control" id="add_social_icon"
                                       placeholder="fab fa-facebook-f" />
                                </div>
                            </div>
                            <div class="mb-3 row">

                                <label for="add_social_name" class="col-sm-3 col-form-label">Social Site Name:</label>
                                <div class="col-sm-9">

                                    <input required name="social_name" type="text" class="form-control" id="add_social_name"
                                        placeholder="Facebook" />
                                </div>
                            </div>
                           
                            <div class="mb-3 row">

                                <label for="add_short_form" class="col-sm-3 col-form-label">Short Form:</label>
                                <div class="col-sm-9">
                                    <input required name="short_form" type="text" class="form-control" id="add_short_form"
                                        placeholder="Fb" />
                                </div>
                            </div>
                            <div class="mb-3 row">

                                <label for="add_social_link" class="col-sm-3 col-form-label">Social Link:</label>
                                <div class="col-sm-9">
                                    <input required name="social_link" type="text" class="form-control" id="add_social_link"
                                        placeholder="https://facebook.com/profile/" />
                                </div>
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

        <?php
            require_once('_dbconnection.php');
            $sql_counter = mysqli_query($conn, "SELECT * FROM _social_links");
            $numcounter = mysqli_num_rows($sql_counter);
            if ($numcounter > 0) {
                while ($c_row = mysqli_fetch_assoc($sql_counter)) {

        ?>

        <!-- Updating Modal here -->
        <div class="modal fade" id="counter_update<?php echo $c_row['id']; ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content overflow-scroll">
                    <form action="social_links_server.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title  fw-bold" id="createprojectlLabel">Update Social info</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3 row">

                                <label for="social_icon" class="col-sm-3 col-form-label">Icon:</label>
                                <div class="col-sm-9">

                                    <input hidden name="id" type="text" value="<?php echo $c_row['id']; ?>"/>
                                    <input  name="social_icon" type="text" class="form-control" id="social_icon" value="<?php echo $c_row['social_icon']; ?>" />
                                </div>
                            </div>
                            <div class="mb-3 row">

                                <label for="social_name" class="col-sm-3 col-form-label">Social site Name:</label>
                                <div class="col-sm-9">

                                    <input name="social_name" type="text" class="form-control" id="social_name"
                                        placeholder="Facebook"  value="<?php echo $c_row['social_name']; ?>" />
                                </div>
                            </div>
                            <div class="mb-3 row">

                                <label for="short_form" class="col-sm-3 col-form-label">Short Form:</label>
                                <div class="col-sm-9">
                                    <input name="short_form" type="text" class="form-control" id="short_form"
                                        placeholder="Fb" value="<?php echo $c_row['short_form']; ?>" />
                                </div>
                            </div>
                            <div class="mb-3 row">

                                <label for="social_link" class="col-sm-3 col-form-label">Social Link:</label>
                                <div class="col-sm-9">
                                    
                                    <input name="social_link" type="text" class="form-control" id="social_link"
                                        placeholder="https://facebook.com/profile/" value="<?php echo $c_row['social_link']; ?>" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        
                    
                    </form>
                </div>
            </div>


        </div>
        <?php } } ?>


        <!-- // body Html code Ended here  -->
        <?php
        require_once('_footer.php');



        ?>