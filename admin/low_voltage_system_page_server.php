<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once('_dbconnection.php');
    //important variable
    $tablename = "_page5";
    $datetime = date('Y-m-d H:i:s');
    $redirectlink = "";//<script>window.location.href = 'low_voltage_system_page_settings.php';</script>
    $uploadpath = "../assets/assets4/images/";
    //updating start
    if (array_key_exists("text", $_POST)) {
        //echo "text id found";
        $array = array_keys($_POST['text']);
        $id = $array[0];
        $text = $array[1];
        $idvalue = $_POST["text"]["$id"];
        $textvalue = mysqli_real_escape_string($conn, $_POST["text"]["$text"]);
        //sql
        $sql = "SELECT * FROM $tablename WHERE $id='$idvalue'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($query);
        $modified_count = $result['modified_count'] + 1;
        $rownum = mysqli_num_rows($query);
        if ($rownum == 1) {
            if (!empty($textvalue)) {

                //update any text
                $query = mysqli_query($conn, "UPDATE $tablename SET $text='$textvalue', modified_count='$modified_count', modified_date='$datetime' WHERE $id='$idvalue'");
                if ($query) {
                    echo "Text Update successful";
                    echo $redirectlink;
                } else {
                    echo 'Updating Failed Try again.';
                }

            } else {
                echo 'content value less then 1 or something else';
            }
        } else {
            echo 'page not found or not equal to 1';
        }

    } elseif (array_key_exists("img", $_POST)) {
        //echo "img id found";


        $array = array_keys($_POST['img']);

        $id = $array[0];
        $idvalue = $_POST["img"]["$id"];
        $imgarray = $_FILES['img'];
        $imgname = array_keys($imgarray['name']);
        $imgname = $imgname[0];

        $file = $imgarray['tmp_name']["$imgname"];
        $filename = $imgarray['name']["$imgname"];
        //>>>>>>>>>>error checking of img upload<<<<<<<<<<<<<<
        // echo "<br>";
        // echo "id Name   :  $id <br>";
        // echo "id Value  :  $idvalue <br>";
        // echo "name      :  $imgname <br>";
        // echo "filename  : $filename  <br>";
        // echo "file      :  $file <br>";
        // echo "<br>";

        $sql = "SELECT * FROM $tablename WHERE $id='$idvalue'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($query);
        $modified_count = $result['modified_count'] + 1;
        $rownum = mysqli_num_rows($query);
        if ($rownum == 1) {

            if (!empty($file)) {
                //image update
                if (move_uploaded_file($file, $uploadpath . $filename)) {

                    $query = mysqli_query($conn, "UPDATE $tablename SET $imgname='$filename', modified_count='$modified_count', modified_date='$datetime' WHERE $id='$idvalue'");
                    if ($query) {
                        echo "Image Upload Successful.";
                        echo $redirectlink;
                    } else {
                        echo 'Updating Failed Try again.';
                    }
                } else {
                    echo "uploading failed";
                }
            } else {
                echo 'content value less then 1 or something else';
            }
        } else {
            echo 'page not found or not equal to 1';
        }
    } else {
        echo 'id not found';
    }
} else {
    echo 'Request not found';
}
?>