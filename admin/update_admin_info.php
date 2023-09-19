<?php
$showAlert_s = false;
$showAlert_p = false;
$showAlert_e = false;
$redirectlink ="<script>window.location.href = 'admin_settings.php';</script>";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('_dbconnection.php');
    
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if(!isset($_POST['password']) && empty($_POST['cpassword'])  && ctype_space($_POST['password']) === true){
        if(isset($_POST['email']) && !empty($_POST['email'])  && ctype_space($_POST['email']) === true){
                $sql="SELECT * FROM _users WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            $found = mysqli_num_rows($result);
            if($found > 0){
                $sql = "UPDATE _users SET first_name='$first_name', last_name='$last_name', email='$email'  WHERE id='$id'";
                $result = mysqli_query($conn, $sql);
                if($result){
                    $showAlert_s = true;
                    echo $redirectlink;
                }
            }
            else{
                $showAlert_e = true;
                echo $redirectlink;
            }
        }

    }elseif(($password == $cpassword)){
        $sql="SELECT * FROM _users WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $found = mysqli_num_rows($result);
        if($found > 0){
            $sql = "UPDATE _users SET first_name='$first_name', last_name='$last_name', email='$email', password='$password' WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert_s = true;
                echo $redirectlink;
            }
        }
        else{
            $showAlert_e = true;
            echo $redirectlink;
        }
    }
    else{
        $showAlert_p = true;
        echo $redirectlink;
    }
}
else{
    echo $redirectlink;
}
?>

    