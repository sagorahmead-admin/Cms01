<?php 

$redirectlink="logo_update.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once('_dbconnection.php');
    $id = "";
    $logoname = "";
    $filename = "";
    $file = "";
    $imagepath = "../images/";

    if(!empty($_FILES['file']['name'])){
        $id = $_POST['id'];
        $filename = basename($_FILES['file']['name']);
        $file = $_FILES['file']['tmp_name'];
        if(move_uploaded_file($file,$imagepath.$filename)){
            
            $sql = "UPDATE _logo SET file='$filename' WHERE id='$id'";
            $query = mysqli_query($conn, $sql);
            header("location: $redirectlink");
        }
        else{
            echo "uploading failed";
            header("location: $redirectlink");
        }
    }elseif($_POST['id'] == "2"){
        $id = $_POST['id'];
        $filename = "";
        $sql = "UPDATE _logo SET file='$filename' WHERE id='$id'";
        $query = mysqli_query($conn, $sql);
        if(!$query){
            echo "Blank Update failed";
        }else{
            header("location: $redirectlink");
        }
    }
    else{
        echo "Did not found any image file";
        header("location: $redirectlink");
    }

}else {
    header("location: $redirectlink");
}


?>