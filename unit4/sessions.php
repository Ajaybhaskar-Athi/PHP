<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "JohnDoe";
$_SESSION["email"] = "johndoe@example.com";

// Access session variables
echo "Username: " . $_SESSION["username"];
echo " email : ".$_SESSION["email"]."<br>";
// session_unset(); unset evry variables
unset($_SESSION["username"]);
// echo "Username: " . $_SESSION["username"]; //error 

session_destroy();  

?>
