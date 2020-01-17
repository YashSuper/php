<!-- Final task file -->

<?php
//Start the session
session_start();
//accept the query parameter and redirect accordingly
if(isset($_GET['q'])){
  $a=$_GET['q'];
  header("location: $a.php");
}
//secure the route from invalid login
if(!isset($_SESSION['uname']))
{
  header('location: validation.php');
}
?>

<!-- render the form if login details are correct -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">

    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>q parameters are supported upto 3 from this page</h3>
    <!-- final form for having all the tasks -->
    <form  action="3back.php" method="post" enctype="multipart/form-data">
      <input type="text" id="fname" name="fname" placeholder="Enter your first Name" ><br>
      <input type="text"  id="lname" name="lname" placeholder="Enter your last Name" ><br>
      <input type="text" id="full" name="fullname" placeholder="Full Name" disabled  ><br>
      <i>+91</i> <input type="text" name="cno" maxlength=10 minlength=10 placeholder="enter number of 10 digits"><br>
      <textarea id="marks" rows="7" cols="50" name="marks"></textarea><br>
      <input type="text" name="email" placeholder="Enter ur email id"> <br><br>
      <input type="file" name="image" ><br>
      <input type="submit" name="submit"><br>
      <a href="logout.php">Logout</a>

    </form>

    <!-- Javascript libraries -->
<!-- JQuery -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(document).ready(()=>{
    document.getElementById('lname').value="";
  })
  $('#fname').keyup(()=>{
    document.getElementById('full').value=$('#fname').val()+" "+$('#lname').val();

  })
  $('#lname').keyup(()=>{
    document.getElementById('full').value=$('#fname').val()+" "+$('#lname').val();

  })

  </script>
  </body>
</html>
