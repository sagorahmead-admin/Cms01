<?php 
$id ="";
$pagelink = "";
$pagetitle = "";
$headline = "";
$short_text = "";


// important variable
$tablename = "_slides";
$redirectlink = "<script>window.location.href = 'slider_setting.php';</script>";
$imagepath = "../images/";

//function start if post request match
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once('_dbconnection.php');
    //first if id not match and others value set then new row insert
    if(!isset($_POST['id'])){

        
        //image file have value then create row
        if(isset($_FILES['filename']) && !empty($_FILES['filename']) && ctype_space($_FILES['filename']) === false){
            
            $pagelink = $_POST['pagelink'];
            $pagetitle = mysqli_real_escape_string($conn, $_POST['pagetitle']);
            $headline = mysqli_real_escape_string($conn, $_POST['headline']);
            $short_text = mysqli_real_escape_string($conn, $_POST['short_text']);
            $filename = basename($_FILES['filename']['name']);
            $file = $_FILES['filename']['tmp_name'];
            if(move_uploaded_file($file,$imagepath.$filename)){
                $sql = mysqli_query($conn, "INSERT INTO $tablename (pagelink, pagetitle, headline, short_text, filename) values('$pagelink', '$pagetitle', '$headline', '$short_text', '$filename')");
                if($sql){
                    echo "New record created successfully.";
                    echo $redirectlink;
                }
            }else{
                echo "File Uploading fail.";
                echo $redirectlink;
            }
           
        }else{
            echo "image file not found";
            echo $redirectlink;
        }
    // id isset then update fuction start
    }elseif(isset($_POST['id']) && !empty($_POST['id']) && ctype_space($_POST['id']) === false){
        // image file set then only image updating
        if(isset($_FILES['filename']) && !empty($_FILES['filename'])){
            $id = $_POST['id'];
            $filename = basename($_FILES['filename']['name']);
            $file = $_FILES['filename']['tmp_name'];
            if(move_uploaded_file($file,$imagepath.$filename)){
                $sql = mysqli_query($conn, "UPDATE $tablename SET filename='$filename' WHERE id='$id'");
                if($sql){
                    echo"upload succech";
                    header("Location:slider_setting.php");
                }else{
                    header("Location:slider_setting.php");
                }
            }else{
                header("Location:slider_setting.php");
            }
        // updating other text inputs
        }elseif(isset($_POST['id']) && isset($_POST['pagelink']) && isset($_POST['pagetitle']) && isset($_POST['headline']) && isset($_POST['short_text'])){
            $id = $_POST['id'];
            $pagelink = $_POST['pagelink'];
            $pagetitle = mysqli_real_escape_string($conn, $_POST['pagetitle']);
            $headline = mysqli_real_escape_string($conn, $_POST['headline']);
            $short_text = mysqli_real_escape_string($conn, $_POST['short_text']);
            $sql = mysqli_query($conn, "UPDATE $tablename SET pagelink='$pagelink', pagetitle='$pagetitle', headline='$headline', short_text='$short_text'");
            if($sql){
                echo "Updated successfully.";
                echo $redirectlink;
            }else{
                echo "Updating Failed..";
                header("Location:slider_setting.php");
            }
        }elseif(isset($_POST['status']) == "deleted"){
            $id = $_POST['id'];
            $sql = mysqli_query($conn, "DELETE FROM $tablename WHERE id='$id'");
            if($sql){
                echo "Record Deleted successfully.";
                    echo $redirectlink;
            }else{
                echo "Deleting Failed..";
                echo $redirectlink;
            }

        }else{
            echo "No valid data";
            echo $redirectlink;
        }
    }

}else{
    echo "No valid 'Request' found.";
    echo $redirectlink;
}











// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     include('_dbconnection.php');

// if($_POST['id'] > 0 && !empty($_FILES['file']['name'])){
//     $id = $_POST['id'];
//     $filename = basename($_FILES['file']['name']);
//     $file = $_FILES['file']['tmp_name'];

//     if(move_uploaded_file($file,$imagepath.$filename)){
//         $sql = "UPDATE _slides SET filename='$filename' WHERE id='$id'";
//          $query = mysqli_query($conn,$sql);
//     }else{
//         echo "File Uploading fail.";
//     }
// }
// elseif(isset($_POST['pagelink']) && isset($_POST['pagetitle'])  && isset($_POST['headline']) && isset($_POST['short_text']) && (!empty(basename($_FILES['file']['name'])))){

//     $pagelink = $_POST['pagelink'];
//     $pagetitle = $_POST['pagetitle'];
//     $headline = $_POST['headline'];
//     $short_text = $_POST['short_text'];
//     $filename = basename($_FILES['file']['name']);
//     $file = $_FILES['file']['tmp_name'];

//     if(move_uploaded_file($file,$imagepath.$filename)){
//         $sql = "INSERT INTO 
//         _slides(pagelink, pagetitle, headline, short_text, filename) 
//         values('$pagelink', '$pagetitle',' $headline',' $short_text', '$filename')
//         ";
//          $query = mysqli_query($conn,$sql);
//     }else{
//         echo "File Uploading fail.";
//     }
// }
// elseif (isset($_POST['pagetitle'])  && isset($_POST['headline'])) {

//     if(!empty($_POST['pagelink']) && !empty($_POST['short_text'])){
//         $pagelink = $_POST['pagelink'];
//         $pagetitle = $_POST['pagetitle'];
//         $headline = $_POST['headline'];
//         $short_text = $_POST['short_text'];
        
//         $sql = "INSERT INTO 
//         _slides(pagelink, pagetitle, headline, short_text) 
//         values('$pagelink',' $pagetitle', '$headline', '$short_text')
//         ";
//             $query = mysqli_query($conn,$sql);
        
//     }else{
//         echo "File Uploading fail.";
//     }
 
// }


// }

 ?>