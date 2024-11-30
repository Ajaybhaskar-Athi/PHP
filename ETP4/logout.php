<?php
// Start the session
session_start();

// Destroy the session
session_unset();//unset the all session variables(username,password) or u can set individulas also using unset($_SESSION['username])
session_destroy();

// Delete cookies by setting their expiration time in the past
setcookie("username", "", time() - 3600, "/");
setcookie("password", "", time() - 3600, "/");

// Redirect to the login page
header("Location: login.php");
exit();
?>
