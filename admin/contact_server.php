<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once('_dbconnection.php');
    $cid = "";
    $cstatus = "";




    if(isset($_POST['cid']) > 0){
        $cid = $_POST['cid'];
    
        if(isset($_POST['cstatus']) == "deleted"){
            $sql = "DELETE FROM _contactpage WHERE cid='$cid'";
            $query = mysqli_query($conn, $sql);
            if($query){
                echo "<script>window.location.href = 'contacts_view.php';</script>";
            }
            else{
                echo 'status Updating fail. plz try again';
            }
        }
        
    }
    else{
        echo "Please!, Submit Valid Data.";
    }
    


}


?>