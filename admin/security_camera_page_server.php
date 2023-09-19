<?php 
$redirectlink="<script>window.location.href = 'security_camera_page_settings.php';</script>";//

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once('_dbconnection.php');
    $pageid="";
    $uploadpath = "../assets/assets2/images/";
    if(isset($_POST['pageid']) && !empty($_POST['pageid'])  && ctype_space($_POST['pageid']) === false){
        $pageid=$_POST['pageid'];
        $sql = "SELECT * FROM _page2 WHERE pageid='$pageid'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($query);      
        $modified_count = $result['modified_count'] + 1;      
        $rownum = mysqli_num_rows($query);
        if($rownum == 1){
            $pageid = $_POST['pageid'];
            //for 1st content title
            if(isset($_POST['cont1_title1']) && !empty($_POST['cont1_title1'])  && ctype_space($_POST['cont1_title1']) === false){
                $cont1_title1 = $_POST['cont1_title1'];
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont1_title1='$cont1_title1', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                //for 1st section text
            }elseif(isset($_POST['cont2_title2']) && !empty($_POST['cont2_title2'])  && ctype_space($_POST['cont2_title2']) === false){
                $cont2_title2 = $_POST['cont2_title2'];
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont2_title2='$cont2_title2', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(isset($_POST['cont3_text1']) && !empty($_POST['cont3_text1'])  && ctype_space($_POST['cont3_text1']) === false){
                $cont3_text1 = mysqli_real_escape_string($conn, $_POST['cont3_text1']);
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont3_text1='$cont3_text1',modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(!empty($_FILES['cont3_img']['name'])){
               
                $filename = basename($_FILES['cont3_img']['name']);
                $file = $_FILES['cont3_img']['tmp_name'];
                if(move_uploaded_file($file,$uploadpath.$filename)){
                    
                    $query = mysqli_query($conn, "UPDATE _page2 SET cont3_img='$filename', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                    if($query){
                        echo $redirectlink;
                    }else{
                        echo 'Updating Failed Try again.';
                    }
                }
                else{
                    echo "uploading failed";
                }
            }elseif(!empty($_FILES['cont4_img']['name'])){
               
                $filename = basename($_FILES['cont4_img']['name']);
                $file = $_FILES['cont4_img']['tmp_name'];
                if(move_uploaded_file($file,$uploadpath.$filename)){
                    
                    $query = mysqli_query($conn, "UPDATE _page2 SET cont4_img='$filename', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                    if($query){
                        echo $redirectlink;
                    }else{
                        echo 'Updating Failed Try again.';
                    }
                }
                else{
                    echo "uploading failed";
                }
            }elseif(isset($_POST['cont5_text2']) && !empty($_POST['cont5_text2'])  && ctype_space($_POST['cont5_text2']) === false){
                $cont5_text2 = mysqli_real_escape_string($conn, $_POST['cont5_text2']);
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont5_text2='$cont5_text2', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(isset($_POST['cont6_text3']) && !empty($_POST['cont6_text3'])  && ctype_space($_POST['cont6_text3']) === false){
                $cont6_text3 = mysqli_real_escape_string($conn, $_POST['cont6_text3']);
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont6_text3='$cont6_text3', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(!empty($_FILES['cont7_img']['name'])){
               
                $filename = basename($_FILES['cont7_img']['name']);
                $file = $_FILES['cont7_img']['tmp_name'];
                if(move_uploaded_file($file,$uploadpath.$filename)){
                    
                    $query = mysqli_query($conn, "UPDATE _page2 SET cont7_img='$filename', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                    if($query){
                        echo $redirectlink;
                    }else{
                        echo 'Updating Failed Try again.';
                    }
                }
                else{
                    echo "uploading failed";
                }
            }elseif(isset($_POST['cont7_title3']) && !empty($_POST['cont7_title3'])  && ctype_space($_POST['cont7_title3']) === false){
                $cont7_title3 = $_POST['cont7_title3'];
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont7_title3='$cont7_title3', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(isset($_POST['cont7_text']) && !empty($_POST['cont7_text'])  && ctype_space($_POST['cont7_text']) === false){
                $cont7_text = $_POST['cont7_text'];
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont7_text='$cont7_text', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(isset($_POST['cont8_slider1']) && !empty($_POST['cont8_slider1'])  && ctype_space($_POST['cont8_slider1']) === false){

                $cont8_slider1 = $_POST['cont8_slider1'];

               
                $query = mysqli_query($conn, "UPDATE _page2 SET cont8_slider1='$cont8_slider1', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
            }elseif(isset($_POST['cont9_title4']) && !empty($_POST['cont9_title4'])  && ctype_space($_POST['cont9_title4']) === false){

                $cont9_title4 = $_POST['cont9_title4'];

               
                $query = mysqli_query($conn, "UPDATE _page2 SET cont9_title4='$cont9_title4', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
            }elseif(isset($_POST['cont10_text4']) && !empty($_POST['cont10_text4'])  && ctype_space($_POST['cont10_text4']) === false){
                $cont10_text4 = mysqli_real_escape_string($conn, $_POST['cont10_text4']);
                $query = mysqli_query($conn, "UPDATE _page2 SET cont10_text4='$cont10_text4', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
            }elseif(isset($_POST['cont11_slider2']) && !empty($_POST['cont11_slider2'])  && ctype_space($_POST['cont11_slider2']) === false){

                $cont11_slider2 = $_POST['cont11_slider2'];

               
                $query = mysqli_query($conn, "UPDATE _page2 SET cont11_slider2='$cont11_slider2', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
            }elseif(!empty($_FILES['cont12_img']['name'])){
               
                $filename = basename($_FILES['cont12_img']['name']);
                $file = $_FILES['cont12_img']['tmp_name'];
                if(move_uploaded_file($file,$uploadpath.$filename)){
                    
                    $query = mysqli_query($conn, "UPDATE _page2 SET cont12_img='$filename', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                    if($query){
                        echo $redirectlink;
                    }else{
                        echo 'Updating Failed Try again.';
                    }
                }
                else{
                    echo "uploading failed";
                }
            }elseif(isset($_POST['cont12_title']) && !empty($_POST['cont12_title'])  && ctype_space($_POST['cont12_title']) === false){
                $cont12_title = $_POST['cont12_title'];
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont12_title='$cont12_title', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(isset($_POST['cont12_text']) && !empty($_POST['cont12_text'])  && ctype_space($_POST['cont12_text']) === false){
                $cont12_text = $_POST['cont12_text'];
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont12_text='$cont12_text', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(!empty($_FILES['cont13_img']['name'])){
               
                $filename = basename($_FILES['cont13_img']['name']);
                $file = $_FILES['cont13_img']['tmp_name'];
                if(move_uploaded_file($file,$uploadpath.$filename)){
                    
                    $query = mysqli_query($conn, "UPDATE _page2 SET cont13_img='$filename', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                    if($query){
                        echo $redirectlink;
                    }else{
                        echo 'Updating Failed Try again.';
                    }
                }
                else{
                    echo "uploading failed";
                }
            }elseif(isset($_POST['cont13_title']) && !empty($_POST['cont13_title'])  && ctype_space($_POST['cont13_title']) === false){
                $cont13_title = $_POST['cont13_title'];
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont13_title='$cont13_title', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(isset($_POST['cont13_text']) && !empty($_POST['cont13_text'])  && ctype_space($_POST['cont13_text']) === false){
                $cont13_text = $_POST['cont13_text'];
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont13_text='$cont13_text', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(!empty($_FILES['cont14_img']['name'])){
               
                $filename = basename($_FILES['cont14_img']['name']);
                $file = $_FILES['cont14_img']['tmp_name'];
                if(move_uploaded_file($file,$uploadpath.$filename)){
                    
                    $query = mysqli_query($conn, "UPDATE _page2 SET cont14_img='$filename', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                    if($query){
                        echo $redirectlink;
                    }else{
                        echo 'Updating Failed Try again.';
                    }
                }
                else{
                    echo "uploading failed";
                }
            }elseif(isset($_POST['cont14_title']) && !empty($_POST['cont14_title'])  && ctype_space($_POST['cont14_title']) === false){
                $cont14_title = $_POST['cont14_title'];
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont14_title='$cont14_title', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
                }else{
                    echo 'Updating Failed Try again.';
                }
                
            }elseif(isset($_POST['cont14_text']) && !empty($_POST['cont14_text'])  && ctype_space($_POST['cont14_text']) === false){
                $cont14_text = $_POST['cont14_text'];
                
                $query = mysqli_query($conn, "UPDATE _page2 SET cont14_text='$cont14_text', modified_count='$modified_count', modified_date='time()' WHERE pageid='$pageid'");
                if($query){
                    echo $redirectlink;
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