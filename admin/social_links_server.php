<?php
//empty variable declere
$id="";
$social_icon="";
$social_name="";
$filename="";
$file="";
$short_form="";
$social_link="";
$delete=isset($_POST['delete']);

//important variable
$uploadpath="../assets/img/icons/";
$redirectlink="contacts_page_settings.php";//brand_social_links_settings.php

//if geting post request then funtion start else redirect to admin setting page
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //DB Connection
    require('_dbconnection.php');

    //>>> if id didnt isset then create new record or
    //>>> if id issset then update or 
    //>>> if id isset and delete isset then delete row or 
    //>>> else print No data found  
    if(!isset($_POST['id'])){
        $social_icon = $_POST['social_icon'];
        $social_name= $_POST['social_name'];
        $short_form= $_POST['short_form'];
        $social_link= $_POST['social_link'];
        



        //upload file
        if(isset($_POST['social_icon']) && isset($_POST['social_name']) && isset($_POST['short_form']) && isset($_POST['social_link'])){
            $query=mysqli_query($conn, "INSERT INTO _social_links(social_icon, social_name, short_form, social_link) VALUES('$social_icon', '$social_name', '$short_form', '$social_link')");
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
        $filename=basename($_FILES['social_icon']['name']);
        echo $filename;
        if(isset($filename) && !empty($filename)){
                $id= $_POST['id'];
                $filename= basename($_FILES['social_icon']['name']);
                $file= $_FILES['social_icon']['tmp_name'];
                $social_name= $_POST['social_name'];
                $short_form= $_POST['short_form'];
                $social_link= $_POST['social_link'];
                    //upload file
            if(move_uploaded_file($file,$uploadpath.$filename)){
                $query=mysqli_query($conn, "UPDATE _social_links SET social_icon='$filename', social_name='$social_name', short_form='$short_form'. social_link='$social_link' Where id='$id'");
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
            $social_icon= $_POST['social_icon'];
            $social_name= $_POST['social_name'];
            $short_form= $_POST['short_form'];
            $social_link= $_POST['social_link'];
            $query=mysqli_query($conn, "UPDATE _social_links SET social_icon='$social_icon', social_name='$social_name', short_form='$short_form', social_link='$social_link' Where id='$id'");
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
           
            $query=mysqli_query($conn, "DELETE FROM _social_links Where id='$id'");
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