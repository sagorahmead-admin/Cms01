<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once('_dbconnection.php');
    $pageid="";
    $tablename ="_contactinfo";
    //
    $datetime = date('Y-m-d H:i:s');
    $redirectlink ="<script>window.location.href = 'contacts_page_settings.php';</script>";
    $imagepath = "../images/";
    if(isset($_POST['pageid']) && !empty($_POST['pageid'])  && ctype_space($_POST['pageid']) === false){
        $pageid=$_POST['pageid'];
        $sql = "SELECT * FROM $tablename WHERE pageid='$pageid'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($query);      
        $modified_count = $result['modified_count'] + 1;      
        $rownum = mysqli_num_rows($query);
        if($rownum == 1){
            $pageid = $_POST['pageid'];
            //for 1st content title
            if(isset($_POST['phone1']) && !empty($_POST['phone1'])  && ctype_space($_POST['phone1']) === false){
                $phone1 = mysqli_real_escape_string($conn, $_POST['phone1']);
                
                $query = mysqli_query($conn, "UPDATE $tablename SET phone1='$phone1', modified_count='$modified_count', modified_date='$datetime' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                //for 1st section text
            }elseif(isset($_POST['phone2']) && !empty($_POST['phone2'])  && ctype_space($_POST['phone2']) === false){
                $phone2 = mysqli_real_escape_string($conn, $_POST['phone2']);
                
                $query = mysqli_query($conn, "UPDATE $tablename SET phone2='$phone2', modified_count='$modified_count', modified_date='$datetime' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                //for 1st section text
            }elseif(isset($_POST['email']) && !empty($_POST['email'])  && ctype_space($_POST['email']) === false){
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                
                $query = mysqli_query($conn, "UPDATE $tablename SET email='$email', modified_count='$modified_count', modified_date='$datetime' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                //for 1st section text
            }elseif(isset($_POST['address']) && !empty($_POST['address'])  && ctype_space($_POST['address']) === false){
                $address = mysqli_real_escape_string($conn, $_POST['address']);
                
                $query = mysqli_query($conn, "UPDATE $tablename SET address='$address', modified_count='$modified_count', modified_date='$datetime' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                //for 1st section text
            }elseif(isset($_POST['fb_link']) && !empty($_POST['fb_link'])  && ctype_space($_POST['fb_link']) === false){
                $fb_link = mysqli_real_escape_string($conn, $_POST['fb_link']);
                
                $query = mysqli_query($conn, "UPDATE $tablename SET fb_link='$fb_link', modified_count='$modified_count', modified_date='$datetime' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                //for 1st section text
            }elseif(isset($_POST['tw_link']) && !empty($_POST['tw_link'])  && ctype_space($_POST['tw_link']) === false){
                $tw_link = mysqli_real_escape_string($conn, $_POST['tw_link']);
                
                $query = mysqli_query($conn, "UPDATE $tablename SET tw_link='$tw_link', modified_count='$modified_count', modified_date='$datetime' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                //for 1st section text
            }elseif(isset($_POST['in_link']) && !empty($_POST['in_link'])  && ctype_space($_POST['in_link']) === false){
                $in_link = mysqli_real_escape_string($conn, $_POST['in_link']);
                
                $query = mysqli_query($conn, "UPDATE $tablename SET in_link='$in_link', modified_count='$modified_count', modified_date='$datetime' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                //for 1st section text
            }elseif(isset($_POST['be_link']) && !empty($_POST['be_link'])  && ctype_space($_POST['be_link']) === false){
                $be_link = mysqli_real_escape_string($conn, $_POST['be_link']);
                
                $query = mysqli_query($conn, "UPDATE $tablename SET be_link='$be_link', modified_count='$modified_count', modified_date='$datetime' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                //for 1st section text
            }else{
                echo 'content value less then 1 or something else Check server menually';
            }
        }else{
            echo 'page not found for update';
        }
    }else{
        echo 'blank';
    }
    
}else{
    echo 'Request not found';
}
?>