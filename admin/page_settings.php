<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header('location: index.php');
  exit;
}
?>
<?php 
$pagetitle = "All Pages Settings"; 
$currentpage = "allpage"; 
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
                        <div class="card-header p-0 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold py-3 mb-0">All Of Pages</h3>
                            <div class="d-flex py-2 project-tab flex-wrap w-sm-100">
                                <button type="button" class="btn btn-dark w-sm-100" data-bs-toggle="modal" data-bs-target="#createproject"><i class="icofont-plus-circle me-2 fs-6"></i>Create New </button>
                              
                            </div>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 flex-column">
                        <div class="tab-content mt-4">
                            <div class="tab-pane fade show active" id="All-list">
                                <div class="row g-3 gy-5 py-3 row-deck">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between mt-5">
                                                    <div class="lesson_name">
                                                        <div class="project-block light-info-bg">
                                                            <i class="icofont-paint"></i>
                                                        </div>
                                                        <span class="small text-muted project_name fw-bold"> Click Edit Icon to Edit this page </span>
                                                        <h6 class="mb-0 fw-bold  fs-6  mb-2">Who Are We Page</h6>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="who_are_we_page_settings.php"><button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button></a>
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-list avatar-list-stacked pt-2">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar2.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar1.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar3.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar4.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar8.jpg" alt="">
                                                        <span class="avatar rounded-circle text-center pointer sm" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                                                    </div>
                                                </div>
                                                <div class="row g-2 pt-4">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-paper-clip"></i>
                                                            <span class="ms-2">5 Contant</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-sand-clock"></i>
                                                            <span class="ms-2">4 Time Edit</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-group-students "></i>
                                                            <span class="ms-2">5 subpage</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-ui-text-chat"></i>
                                                            <span class="ms-2">10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dividers-block"></div>
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h4 class="small fw-bold mb-0">Want to Edit? </h4>
                                                    <a href="who_are_we_page_settings.php"><span class="small light-danger-bg  p-1 rounded"><i class="icofont-edit"></i> Edit Now</span></a>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between mt-5">
                                                    <div class="lesson_name">
                                                        <div class="project-block light-info-bg">
                                                            <i class="icofont-paint"></i>
                                                        </div>
                                                        <span class="small text-muted project_name fw-bold"> Click Edit Icon to Edit this page </span>
                                                        <h6 class="mb-0 fw-bold  fs-6  mb-2">Security Camera Installation Page </h6>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="security_camera_page_settings.php"><button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject"><i class="icofont-edit text-success"></i></button></a>
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-list avatar-list-stacked pt-2">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar2.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar1.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar3.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar4.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar8.jpg" alt="">
                                                        <span class="avatar rounded-circle text-center pointer sm" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                                                    </div>
                                                </div>
                                                <div class="row g-2 pt-4">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-paper-clip"></i>
                                                            <span class="ms-2">5 Contant</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-sand-clock"></i>
                                                            <span class="ms-2">4 Time Edit</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-group-students "></i>
                                                            <span class="ms-2">5 subpage</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-ui-text-chat"></i>
                                                            <span class="ms-2">10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dividers-block"></div>
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h4 class="small fw-bold mb-0">Want to Edit? </h4>
                                                    <a href="security_camera_page_settings.php"><span class="small light-danger-bg  p-1 rounded"><i class="icofont-edit"></i> Edit Now</span></a>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between mt-5">
                                                    <div class="lesson_name">
                                                        <div class="project-block light-info-bg">
                                                            <i class="icofont-paint"></i>
                                                        </div>
                                                        <span class="small text-muted project_name fw-bold"> Click Edit Icon to Edit this page </span>
                                                        <h6 class="mb-0 fw-bold  fs-6  mb-2">
                                                            Structured Cabling Page</h6>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="structured_cabling_page_settings.php"><button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject"><i class="icofont-edit text-success"></i></button></a>
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-list avatar-list-stacked pt-2">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar2.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar1.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar3.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar4.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar8.jpg" alt="">
                                                        <span class="avatar rounded-circle text-center pointer sm" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                                                    </div>
                                                </div>
                                                <div class="row g-2 pt-4">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-paper-clip"></i>
                                                            <span class="ms-2">5 Contant</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-sand-clock"></i>
                                                            <span class="ms-2">4 Time Edit</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-group-students "></i>
                                                            <span class="ms-2">5 subpage</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-ui-text-chat"></i>
                                                            <span class="ms-2">10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dividers-block"></div>
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h4 class="small fw-bold mb-0">Want to Edit? </h4>
                                                    <a href="structured_cabling_page_settings.php"><span class="small light-danger-bg  p-1 rounded"><i class="icofont-edit"></i> Edit Now</span></a>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between mt-5">
                                                    <div class="lesson_name">
                                                        <div class="project-block light-info-bg">
                                                            <i class="icofont-paint"></i>
                                                        </div>
                                                        <span class="small text-muted project_name fw-bold"> Click Edit Icon to Edit this page </span>
                                                        <h6 class="mb-0 fw-bold  fs-6  mb-2">
                                                            
                Intercoms Page</h6>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="intercoms_page_settings.php"><button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject"><i class="icofont-edit text-success"></i></button></a>
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-list avatar-list-stacked pt-2">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar2.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar1.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar3.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar4.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar8.jpg" alt="">
                                                        <span class="avatar rounded-circle text-center pointer sm" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                                                    </div>
                                                </div>
                                                <div class="row g-2 pt-4">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-paper-clip"></i>
                                                            <span class="ms-2">5 Contant</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-sand-clock"></i>
                                                            <span class="ms-2">4 Time Edit</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-group-students "></i>
                                                            <span class="ms-2">5 subpage</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-ui-text-chat"></i>
                                                            <span class="ms-2">10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dividers-block"></div>
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h4 class="small fw-bold mb-0">Want to Edit? </h4>
                                                    <a href="intercoms_page_settings.php"><span class="small light-danger-bg  p-1 rounded"><i class="icofont-edit"></i> Edit Now</span></a>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between mt-5">
                                                    <div class="lesson_name">
                                                        <div class="project-block light-info-bg">
                                                            <i class="icofont-paint"></i>
                                                        </div>
                                                        <span class="small text-muted project_name fw-bold"> Click Edit Icon to Edit this page </span>
                                                        <h6 class="mb-0 fw-bold  fs-6  mb-2">
                                                            
                                                            Low voltage Access Control Page</h6>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="low_voltage_system_page_settings.php"><button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject"><i class="icofont-edit text-success"></i></button></a>
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-list avatar-list-stacked pt-2">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar2.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar1.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar3.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar4.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar8.jpg" alt="">
                                                        <span class="avatar rounded-circle text-center pointer sm" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                                                    </div>
                                                </div>
                                                <div class="row g-2 pt-4">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-paper-clip"></i>
                                                            <span class="ms-2">5 Contant</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-sand-clock"></i>
                                                            <span class="ms-2">4 Time Edit</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-group-students "></i>
                                                            <span class="ms-2">5 subpage</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-ui-text-chat"></i>
                                                            <span class="ms-2">10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dividers-block"></div>
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h4 class="small fw-bold mb-0">Want to Edit? </h4>
                                                    <a href="low_voltage_system_page_settings.php"><span class="small light-danger-bg  p-1 rounded"><i class="icofont-edit"></i> Edit Now</span></a>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between mt-5">
                                                    <div class="lesson_name">
                                                        <div class="project-block light-info-bg">
                                                            <i class="icofont-paint"></i>
                                                        </div>
                                                        <span class="small text-muted project_name fw-bold"> Click Edit Icon to Edit this page </span>
                                                        <h6 class="mb-0 fw-bold  fs-6  mb-2">
                                                            
                                                           Conatct Us Page</h6>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="contacts_page_settings.php"><button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject"><i class="icofont-edit text-success"></i></button></a>
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-list avatar-list-stacked pt-2">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar2.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar1.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar3.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar4.jpg" alt="">
                                                        <img class="avatar rounded-circle sm" src="assets/images/xs/avatar8.jpg" alt="">
                                                        <span class="avatar rounded-circle text-center pointer sm" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                                                    </div>
                                                </div>
                                                <div class="row g-2 pt-4">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-paper-clip"></i>
                                                            <span class="ms-2">5 Contant</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-sand-clock"></i>
                                                            <span class="ms-2">4 Time Edit</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-group-students "></i>
                                                            <span class="ms-2">5 subpage</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-ui-text-chat"></i>
                                                            <span class="ms-2">10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dividers-block"></div>
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h4 class="small fw-bold mb-0">Want to Edit? </h4>
                                                    <a href="contacts_page_settings.php"><span class="small light-danger-bg  p-1 rounded"><i class="icofont-edit"></i> Edit Now</span></a>
                                                </div>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      
        <!-- Create Project-->
        <!-- <div class="modal fade" id="createproject" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Create Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput77" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput77" placeholder="Explain what the Project Name">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Project Category</label>
                        <select class="form-select" aria-label="Default select Project Category">
                            <option selected>UI/UX Design</option>
                            <option value="1">Website Design</option>
                            <option value="2">App Development</option>
                            <option value="3">Quality Assurance</option>
                            <option value="4">Development</option>
                            <option value="5">Backend Development</option>
                            <option value="6">Software Testing</option>
                            <option value="7">Website Design</option>
                            <option value="8">Marketing</option>
                            <option value="9">SEO</option>
                            <option value="10">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultipleone" class="form-label">Project Images & Document</label>
                        <input class="form-control" type="file" id="formFileMultipleone"  multiple>
                    </div>
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                              <div class="col">
                                <label for="datepickerded" class="form-label">Project Start Date</label>
                                <input type="date" class="form-control" id="datepickerded">
                              </div>
                              <div class="col">
                                <label for="datepickerdedone" class="form-label">Project End Date</label>
                                <input type="date" class="form-control" id="datepickerdedone">
                              </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-sm-12">
                                    <label class="form-label">Notifation Sent</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>All</option>
                                        <option value="1">Team Leader Only</option>
                                        <option value="2">Team Member Only</option>
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                    <label for="formFileMultipleone" class="form-label">Task Assign Person</label>
                                    <select class="form-select" multiple aria-label="Default select Priority">
                                        <option selected>Lucinda Massey</option>
                                        <option value="1">Ryan Nolan</option>
                                        <option value="2">Oliver Black</option>
                                        <option value="3">Adam Walker</option>
                                        <option value="4">Brian Skinner</option>
                                        <option value="5">Dan Short</option>
                                        <option value="5">Jack Glover</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-sm">
                            <label for="formFileMultipleone" class="form-label">Budget</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-sm">
                            <label for="formFileMultipleone" class="form-label">Priority</label>
                            <select class="form-select" aria-label="Default select Priority">
                                <option selected>Highest</option>
                                <option value="1">Medium</option>
                                <option value="2">Low</option>
                                <option value="3">Lowest</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea78" class="form-label">Description (optional)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details about the request"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </div>
            </div>
        </div> -->

    

        <!-- Modal  Delete Folder/ File-->
        <div class="modal fade" id="deleteproject" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="deleteprojectLabel"> Delete item Permanently?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body justify-content-center flex-column d-flex">
                    <i class="icofont-ui-delete text-danger display-2 text-center mt-2"></i>
                    <p class="mt-4 fs-5 text-center">You can only delete this item Permanently</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger color-fff">Delete</button>
                </div>
            </div>
            </div>
        </div>

<!-- // body Html code Ended here  -->
<?php
require_once('_footer.php');



?>




