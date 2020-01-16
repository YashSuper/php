<?php
  session_start();
  //SECURING THE ROUTE
  if( !isset($_SESSION['uname'])){
    header('location: validation.php');
  }
  ?>
  <?php
  //q parameter support
   if(isset($_GET['q'])){
    $a=$_GET['q'];
    header("location: $a.php");
  }
  header('location: task3.php');
?>
