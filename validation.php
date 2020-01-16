<?php
  //current user flag
  $cur_user=null;
// SQL FETCH
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);

  // Check connection
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";


  if (isset($_POST['uname']))
  {
    session_start();
    mysqli_select_db($conn,'users');
    $q="select * from users WHERE uname =". $_POST['uname'];
    $res=mysqli_query($conn,$q);
      if (mysqli_num_rows($res)!=0)
      {
        $tempuser = mysqli_fetch_array($res);
          if($tempuser['pass']==base64_encode($_POST['pass']))
          {
              $_SESSION['uname']=$tempuser['uname'];
          }
      }
  }

  // redirect the session according to the details filled in the form.

  if(!isset($_SESSION['uname'])){
    echo "<h1>incorrect details</h1>";
    include('login.php');
  }
  else {
    header('location: task3.php');
  }

    ?>
