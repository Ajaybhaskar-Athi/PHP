

<?php

session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

// if(!isset($_COOKIE['username'])){
//     header("Location: login.php"); //this is how we check using cookies also but we prefer sessions as sessiosn are from server and in case of cookies supppose in any page the user can manipulate the cookies
// }

echo "<h2>Welcome " . $_SESSION['username'] . "!</h2>";
echo '<a href="logout.php">Logout</a>'; // Logout link


?>