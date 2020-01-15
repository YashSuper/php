<?php
session_start();
if( !isset($_SESSION['uname'])){
  header('location: validation.php');
}
?>
<?php
 if(isset($_GET['q'])){
  $a=$_GET['q'];
  header("location: $a.php");
}
?>
<!-- dummy content for test -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>2</h1>

  </body>
</html>
