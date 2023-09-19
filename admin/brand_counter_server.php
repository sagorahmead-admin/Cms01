<?php
//empty variable declere
$id="";
$counter_icon="";
$counter_name="";
$filename="";
$file="";
$count="";
$delete=isset($_POST['delete']);

//important variable
$uploadpath="../assets/img/icons/";
$redirectlink="brand_counter_settings.php";//brand_counter_settings.php

//if geting post request then funtion start else redirect to admin setting page
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //DB Connection
    require('_dbconnection.php');

    //>>> if id didnt isset then create new record or
    //>>> if id issset then update or 
    //>>> if id isset and delete isset then delete row or 
    //>>> else print No data found  
    if(!isset($_POST['id'])){
        $filename= basename($_FILES['counter_icon']['name']);
        $file= $_FILES['counter_icon']['tmp_name'];
        $counter_name= $_POST['counter_name'];
        $count= $_POST['count'];
        
        //upload file
        if(move_uploaded_file($file,$uploadpath.$filename)){
            $query=mysqli_query($conn, "INSERT INTO _counter(counter_icon, counter_name, count) VALUES('$filename', '$counter_name', '$count')");
            if($query){
                echo 'New record Created Successfully.';
                header("location: $redirectlink");
            }else{
                echo 'Record creating failed.';
                header("location: $redirectlink");
            }

        }else{
            echo 'Uploading failed.';
            header("location: $redirectlink");
        }

    }elseif(isset($_POST['id']) && !isset($_POST['delete'])){
        $filename=basename($_FILES['counter_icon']['name']);
        echo $filename;
        if(isset($filename) && !empty($filename)){
                $id= $_POST['id'];
                $filename= basename($_FILES['counter_icon']['name']);
                $file= $_FILES['counter_icon']['tmp_name'];
                $counter_name= $_POST['counter_name'];
                $count= $_POST['count'];
                    //upload file
            if(move_uploaded_file($file,$uploadpath.$filename)){
                $query=mysqli_query($conn, "UPDATE _counter SET counter_icon='$filename', counter_name='$counter_name', count='$count' Where id='$id'");
                if($query){
                    echo 'Record Updated Successfully with icon.';
                    header("location: $redirectlink");
                }else{
                    echo 'Record Updating failed.';
                    header("location: $redirectlink");
                }

            }else{

                echo 'Uploading failed.';
                header("location: $redirectlink");
            }

        }else{
            $id= $_POST['id'];
            $counter_name= $_POST['counter_name'];
            $count= $_POST['count'];
            $query=mysqli_query($conn, "UPDATE _counter SET counter_name='$counter_name', count='$count' Where id='$id'");
            if($query){
                echo 'Record Updated Successfully.';
                header("location: $redirectlink");
            }else{
                echo 'Record Updating failed.';
                header("location: $redirectlink");
            }

        }

    }elseif(isset($_POST['id']) && ($delete == 'deleted')){
            $id= $_POST['id'];
           
            $query=mysqli_query($conn, "DELETE FROM _counter Where id='$id'");
            if($query){
                echo 'Record Deleted Successfully.';
                header("location: $redirectlink");
            }else{
                echo 'Record Deleting failed.';
                header("location: $redirectlink");
            }

    }else{
        echo 'No data found.';
        header("location: $redirectlink");
    }

}else{
    header("location: $redirectlink");
}
?>