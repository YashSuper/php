<!-- DB connector file -->
<?php
  $servername="localhost";
  $dusername="root";
  $dpass="";
  $db="users";
  $con= mysqli_connect($servername,$dusername,$dpass,$db);
  if($con){
    echo "Connected to database.";
} ?>
