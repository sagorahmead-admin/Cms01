<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once('_dbconnection.php');
    $pageid="";
    $imagepath ="../images/";
    if(isset($_POST['pageid']) && !empty($_POST['pageid'])  && ctype_space($_POST['pageid']) === false){
        $pageid=$_POST['pageid'];
        $sql = "SELECT * FROM _page1 WHERE pageid='$pageid'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($query);      
        $modified_count = $result['modified_count'] + 1;      
        $rownum = mysqli_num_rows($query);
        if($rownum == 1){
            $pageid = $_POST['pageid'];
            //for 1st content title
            if(isset($_POST['cont1_title1']) && !empty($_POST['cont1_title1'])  && ctype_space($_POST['cont1_title1']) === false){
                $cont1_title1 = $_POST['cont1_title1'];
                
                $query = mysqli_query($conn, "UPDATE _page1 SET cont1_title1='$cont1_title1', modified_count='$modified_count' WHERE pageid='$pageid'");
                if($query){
                    echo "<script>window.location.href = 'who_are_we_page_settings.php';</script>";
                }else{
                    echo 'Updating Failed Try again.';
                }
                //for 1st section text
            }elseif(isset($_POST['cont2_text1']) && !empty($_POST['cont2_text1'])  && ctype_space($_POST['cont2_text1']) === false){
                $cont2_text1 = mysqli_real_escape_string($conn, $_POST['cont2_text1']);
                
                $query = mysqli_query($conn, "UPDATE _page1 SET cont2_text1='$cont2_text1', modified_count='$modified_count' WHERE pageid='$pageid'");
                if($query){
                    echo "<script>window.location.href = 'who_are_we_page_settings.php';</script>";
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(!empty($_FILES['cont3_img']['name'])){
               
                $filename = basename($_FILES['cont3_img']['name']);
                $file = $_FILES['cont3_img']['tmp_name'];
                if(move_uploaded_file($file,$imagepath.$filename)){
                    
                    $query = mysqli_query($conn, "UPDATE _page1 SET cont3_img='$filename', modified_count='$modified_count' WHERE pageid='$pageid'");
                    if($query){
                        echo "<script>window.location.href = 'who_are_we_page_settings.php';</script>";
                    }else{
                        echo 'Updating Failed Try again.';
                    }
                }
                else{
                    echo "uploading failed";
                }
            }elseif(!empty($_FILES['cont3_img2']['name'])){
               
                $filename = basename($_FILES['cont3_img2']['name']);
                $file = $_FILES['cont3_img2']['tmp_name'];
                if(move_uploaded_file($file,$imagepath.$filename)){
                    
                    $query = mysqli_query($conn, "UPDATE _page1 SET cont3_img2='$filename', modified_count='$modified_count' WHERE pageid='$pageid'");
                    if($query){
                        echo "<script>window.location.href = 'who_are_we_page_settings.php';</script>";
                    }else{
                        echo 'Updating Failed Try again.';
                    }
                }
                else{
                    echo "uploading failed";
                }
            }elseif(isset($_POST['cont4_text2']) && !empty($_POST['cont4_text2'])  && ctype_space($_POST['cont4_text2']) === false){
                $cont4_text2 = mysqli_real_escape_string($conn, $_POST['cont4_text2']);
                
                $query = mysqli_query($conn, "UPDATE _page1 SET cont4_text2='$cont4_text2', modified_count='$modified_count' WHERE pageid='$pageid'");
                if($query){
                    echo "<script>window.location.href = 'who_are_we_page_settings.php';</script>";
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(!empty($_FILES['cont5_title2']['name'])){
                $filename = basename($_FILES['cont5_title2']['name']);
                $file = $_FILES['cont5_title2']['tmp_name'];
                if(move_uploaded_file($file,$imagepath.$filename)){
                    
                    $query = mysqli_query($conn, "UPDATE _page1 SET cont5_title2='$filename', modified_count='$modified_count' WHERE pageid='$pageid'");
                    if($query){
                        echo "<script>window.location.href = 'who_are_we_page_settings.php';</script>";
                    }else{
                        echo 'Updating Failed Try again.';
                    }
                }
                else{
                    echo "uploading failed";
                }
                
            }elseif(isset($_POST['cont6_text3']) && !empty($_POST['cont6_text3'])  && ctype_space($_POST['cont6_text3']) === false){
                $cont6_text3 = mysqli_real_escape_string($conn, $_POST['cont6_text3']);
                
                $query = mysqli_query($conn, "UPDATE _page1 SET cont6_text3='$cont6_text3', modified_count='$modified_count' WHERE pageid='$pageid'");
                if($query){
                    echo "<script>window.location.href = 'who_are_we_page_settings.php';</script>";
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(isset($_POST['cont7_title3']) && !empty($_POST['cont7_title3'])  && ctype_space($_POST['cont7_title3']) === false){
                $cont7_title3 = $_POST['cont7_title3'];
                
                $query = mysqli_query($conn, "UPDATE _page1 SET cont7_title3='$cont7_title3', modified_count='$modified_count' WHERE pageid='$pageid'");
                if($query){
                    echo "<script>window.location.href = 'who_are_we_page_settings.php';</script>";
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(isset($_POST['cont8_pt1']) && !empty($_POST['cont12_pp1'])  && ctype_space($_POST['cont15_pp4']) === false){
                $cont8_pt1 = "";
                $cont9_pt2 = "";
                $cont10_pt3 ="";
                $cont11_pt4 ="";
                $cont12_pp1 ="";
                $cont13_pp2 ="";
                $cont14_pp3 ="";
                $cont15_pp4 = "";
                
                $cont8_pt1 = $_POST['cont8_pt1'];
                $cont9_pt2 = $_POST['cont9_pt2'];
                $cont10_pt3 = $_POST['cont10_pt3'];
                $cont11_pt4 = $_POST['cont11_pt4'];
                $cont12_pp1 = $_POST['cont12_pp1'];
                $cont13_pp2 = $_POST['cont13_pp2'];
                $cont14_pp3 = $_POST['cont14_pp3'];
                $cont15_pp4 = $_POST['cont15_pp4'];
               
                $query = mysqli_query($conn, "UPDATE _page1 SET cont8_pt1='$cont8_pt1',cont9_pt2='$cont9_pt2',cont10_pt3='$cont10_pt3',cont11_pt4='$cont11_pt4',cont12_pp1='$cont12_pp1',cont13_pp2='$cont13_pp2',cont14_pp3='$cont14_pp3',cont15_pp4='$cont15_pp4', modified_count='$modified_count' WHERE pageid='$pageid'");
                if($query){
                    echo "<script>window.location.href = 'who_are_we_page_settings.php';</script>";
                }else{
                    echo 'Updating Failed Try again.';
                }
            }else{
                echo 'content value less then 1 or something else';
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