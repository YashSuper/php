<?php
  if(isset($_POST['username'])){
    $uname=$_POST['username'];
    //Checked for proper pattern
    if (preg_match('/^[a-z\d_]{2,20}$/i', $uname))
    {   //included database connectivity file
      include('db.php');
      $pass=base64_encode($_POST['pass']);
      $q="insert into users values ('$uname','$pass')";
      if(mysqli_query($con,$q)){
        echo "<br><h3>New account created successfully now you can login with new credentials</h3><br>";
        include('login.php');
      }
      else{
        echo "<br><h3>username already present in database.<br>type a new username</h3><br>";
        include('signup.php');
      }
    }
    else {
      echo "<br><h3>username can only contain alphabets,numbers and underscore(_)</h3>";
      include('signup.php');
    }
  }
  else {
    header('location: signup.php');
  }
 ?>
