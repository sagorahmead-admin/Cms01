<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header('location: index.php');
  exit;
}
?>
<?php 
$pagetitle = "Slider Setting :: Home page"; 
$currentpage = "homepage"; 
?>

<?php 
require_once('_header.php');
require_once('_sidebar.php');
require_once('_bodyheader.php');
?>
<!-- // body Html code start from here  -->

<!-- // body Html code Ended here  -->
<?php
require_once('_footer.php');



?>