<?php
//start the session
session_start();
//current user flag
$cur_user=null;
// users array : in live project these values have to be fetched from database.
$users=array("ankit"=>"MTIzNA==","Yash"=>"MTIzNA==","hemant"=>"MTIzNA==");
// set the session variable if the entries are correct
if (isset($_POST['uname']))
{
    $cur_user=$_POST['uname'];
    if (array_key_exists($cur_user,$users))
    {
        if($users[$cur_user]==base64_encode($_POST['pass']))
        {
            $_SESSION['uname']=$cur_user;
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
