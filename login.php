<!-- login form render file -->
<?php
session_start();
//if already logged in then redirect to task page
if( isset($_SESSION['uname'])){
  header('location: task3.php');
}
?>

<!-- render the form and submit it for checking the session's username and password -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="validation.php" method="post">
      <input type="text" name="uname" placeholder="Correct User Name is Yash" required><br>
      <input type="password" name="pass" placeholder="password is 1234" required><br>
      <input type="submit" name="submit" value="Login">
    </form>
    <h6>Not a member....<a href="signup.php">Be one(SignUp)</a></h6>

  </body>
</html>
