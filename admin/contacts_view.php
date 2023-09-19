<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header('location: index.php');
  exit;
}
?>
<?php 
$pagetitle = "contacts Details :: Contact Email"; 
$currentpage = "contact"; 
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
                    <h3 class="fw-bold py-3 mb-0">Contact</h3>
                    <div class="d-flex py-2 project-tab flex-wrap w-sm-100">

                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="list-view">
                <div class="row clearfix g-3">
                    <div class="col-lg-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="myProjectTable" class="table table-hover align-middle mb-0"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Person Name</th>

                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                            require_once('_dbconnection.php');
                                            $sql_contacts = mysqli_query($conn, "SELECT * FROM _contactpage WHERE cstatus='Pending'");
                                            $numcontacts = mysqli_num_rows($sql_contacts);
                                            if($numcontacts > 0){
                                                while($c_row = mysqli_fetch_assoc($sql_contacts) ){

                                        ?>
                                        <tr>
                                        <td>
                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg"
                                                alt="">
                                            <span class="fw-bold ms-1"><?php echo $c_row['cname']; ?></span>
                                        </td>
                                        <td>
                                            <?php echo $c_row['cemail']; ?>
                                        </td>
                                        <td><?php echo $c_row['cnumber']; ?></td>
                                        <td><?php echo $c_row['csubject']; ?></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">

                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#message<?php echo $c_row['cid'] ?>"><i
                                                        class="icofont-ui-message text-success"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <form class="p-0 m-0" action="contact_server.php" method="POST">
                                                        <input type="text" name="cid" hidden value="<?php echo $c_row['cid']; ?>">
                                                        <input type="text" name="cstatus" hidden value="deleted">
                                                <button type="submit" class="btn btn-outline-secondary deleterow"><i
                                                        class="icofont-ui-delete text-danger"></i></button></form>
                                            </div>
                                        </td>
                                        </tr>
                                        <?php
                                                }
                                            }else{
                                                echo "<tr><td colspan='6' style='text-align:center;'>No Data Found</td></tr>";
                                            }

                                            
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
            </div>

        </div>
    </div>
</div>

<!-- Edit Contact-->
<?php 
                                            require_once('_dbconnection.php');
                                            $sql_contacts = mysqli_query($conn, "SELECT * FROM _contactpage WHERE cstatus='Pending'");
                                            $numcontacts = mysqli_num_rows($sql_contacts);
                                            if($numcontacts > 0){
                                                while($c_row = mysqli_fetch_assoc($sql_contacts) ){

                                        ?>
<div class="modal fade" id="message<?php echo $c_row['cid']; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  fw-bold" id="expeditLabel"> Message View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 form-control">
                    <p class=""><?php echo $c_row['ctext']; ?></p>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<?php
                                                }
                                            }
                                            
                                        ?>
<!-- // body Html code Ended here  -->
<?php
require_once('_footer.php');



?>