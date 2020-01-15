<?php
session_start();
// destroy the session : log out from system
session_destroy();
echo "Logging out from your account";
header('Location: login.php');

 ?>
