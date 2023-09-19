<?php


$login = false;
$showAlert_p = false;
$showAlert_e = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('_dbconnection.php');
    
    $email = $_POST['email'];
    $password = $_POST['password'];


        $sql="SELECT * FROM _users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        $found = mysqli_num_rows($result);
        if($found == 1){
           $login = true;
           session_start();
           $_SESSION['loggedin'] = true;
           $_SESSION['username'] = $email;
           echo '<script>window.location.href="dashboard.php";</script>';

        }
        else{
          $showAlert_p = true;
        }

}else{
    session_start();
    if(isset($_SESSION['loggedin'])) {
        echo '<script>window.location.href="dashboard.php";</script>';
    }
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: Kohanit:: Signin</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="./assets/css/my-task.style.min.css">
</head>

<body>
<?php
         if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your Succesfully loggedin in your account.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
         }
         if($showAlert_p){
            echo '<div class="alert alert-danger alert-dismissible fade show position-absolute top-0 start-0 end-0" role="alert">
                <strong>Warning!</strong> Invalid Credendials.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
             }
        if($showAlert_e){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Already Exist!</strong> You have aleady an account.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
             }
        ?>
<div id="mytask-layout" class="theme-indigo">

    <!-- main body area -->
    <div class="main p-2 py-3 p-xl-5 ">
        
        <!-- Body: Body -->
        <div class="body d-flex p-0 p-xl-5">
            <div class="container-xxl">

                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                        <div style="max-width: 25rem;">
                            <div class="text-center mb-5">
                                <img src="assets/images/logomain.png" width="300px" alt="">
                            </div>
                            <div class="mb-5">
                                <h2 class="color-900 text-center">Wellcome to Kohanit Dashboard</h2>
                            </div>
                            <!-- Image block -->
                            <div class="">
                                <img src="./assets/images/login-img.svg" alt="login-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                        <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
                            <!-- Form -->
                            <form class="row g-1 p-3 p-md-4" action="index.php" method="POST">
                                <div class="col-12 text-center mb-1 mb-lg-5">
                                    <h1>Sign in</h1>
                                    <span>Access to your dashboard.</span>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Email address</label>
                                        <input name="email" type="email" class="form-control form-control-lg" placeholder="name@example.com">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        
                                        <input name="password" type="password" class="form-control form-control-lg" placeholder="***************">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase" atl="signin" >SIGN IN</button>
                                </div>
                                
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="./assets/bundles/libscripts.bundle.js"></script>

</body>
 
</html>