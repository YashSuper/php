<?php
  session_start();
  // securing the route
  if( !isset($_SESSION['uname']))
  {
    header('location: validation.php');
  }
?>
<?php
  //enabling support for query parameters
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
