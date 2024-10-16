<?php
session_start(); // Start the session

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

echo "Session reset successfully. <a href='1_form.php'>Go back to form</a>";
?>
