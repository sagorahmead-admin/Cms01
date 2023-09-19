    <?php 
    require('_dbconnection.php');
    $sql = "SELECT * FROM _logo WHERE id='1'";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_assoc($result);
    $menuid = $row['id'];             
    $menulogo = $row['file'];

    ?>
   <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="dashboard.php" class="mb-0 brand-icon">
          <img src="assets/images/<?php echo $menulogo;?>" width="200px" alt="">
            </a>
            <!-- Menu: main ul -->

            <ul class="menu-list flex-grow-1 mt-3">
                <li class="collapsed">
                    <a class="m-link <?php echo $currentpage == 'dashboard' ? 'active' : ''; ?>"   href="dashboard.php">
                        <i class="icofont-home fs-5"></i> <span>Dashboard</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                   
                </li>
                <li  class="collapsed">
                    <a class="m-link <?php echo $currentpage == 'homepage' ? 'active' : ''; ?>"  data-bs-toggle="collapse" data-bs-target="#project-Components" href="#">
                        <i class="icofont-briefcase"></i><span>Home Page </span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="project-Components">
                        <li><a class="ms-link" href="slider_setting.php"><span>Slider   Settings</span></a></li>
                        <li><a class="ms-link" href="slider_images_setting.php"><span>Slider Images Settings</span></a></li>
                    </ul>
                </li>
                
                <li class="collapsed">
                    <a class="m-link <?php echo $currentpage == 'allpage' ? 'active' : ''; ?>"    href="#" data-bs-toggle="collapse" data-bs-target="#pages-Components"><i
                            class="icofont-ticket"></i> <span >All Page Setting</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                   <!-- Menu: Sub menu ul -->
                   <ul class="sub-menu collapse" id="pages-Components">
                        <li><a class="ms-link" href="page_settings.php"><span>All Page Settings</span></a></li>
                        <li><a class="ms-link" href="contacts_page_settings.php"><span>Contact Info Settings</span></a></li>
                        <li><a class="ms-link" href="brand_counter_settings.php"><span>Brand Counter Settings</span></a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link <?php echo $currentpage == 'logopage' ? 'active' : ''; ?>"  href="logo_update.php"><i
                            class="icofont-user-male"></i> <span>Logo Setting</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                   
                </li>
                <li class="collapsed">
                    <a class="m-link <?php echo $currentpage == 'admin' ? 'active' : ''; ?>"  href="admin_settings.php"><i
                            class="icofont-users-alt-5"></i> <span>Admin Settings</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                
                </li>
               
                <li class="collapsed">
                    <a class="m-link <?php echo $currentpage == 'contact' ? 'active' : ''; ?>" href="contacts_view.php"><i
                            class="icofont-ui-calculator"></i> <span>Contact Email</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    
                </li>
              
                
            </ul>

        
         
        </div>
    </div>