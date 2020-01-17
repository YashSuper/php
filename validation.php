<!-- validation file  for final task  -->
<?php
  //START THE SESSION
  session_start();
   //current user flag
  $cur_user=null;
  if (isset($_POST['uname']))
  {   $cur_user=$_POST['uname'];
      // SQL CREDENTIALS
      include('db.php');
      $q="select * from users WHERE uname ='$cur_user'";
      $res=mysqli_query($con,$q);
      if (mysqli_num_rows($res)!=0)
      {
        $tempuser = mysqli_fetch_array($res);
          if($tempuser['password']==base64_encode($_POST['pass']))
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
