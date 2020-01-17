<!-- File which supports Log out -->
<?php
  session_start();
// destroy the session : log out from system
  session_destroy();
  echo "Logging out from your account";
echo "<script>setTimeout(\"location.href = 'task1.php';\",1500);</script>";

 ?>
