<!-- <?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Handle registration form submission
if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simple registration logic (save username and password as cookies for demo)
    // Normally, you would store these values in a database
    setcookie("username", $username, time() + 86400, "/"); //time()+86400*30 is for 30 days
    setcookie("password", $password, time() + 86400, "/");

    // Redirect to login page after successful registration
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="register.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="register" value="Register">
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
</body>
</html> -->


<?php

if(isset($_POST['register'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    setcookie("username",$username,time()+86400,"/");
    setcookie("password",$password,time()+86400,"/");
    header("Location: login.php");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <h2>Welcome To Register Page</h2>
    <form method="POST">
        <label for="username">User Name: </label>
        <input type="text" name="username" required>
        <br><br>
        <label for="password">Password: </label>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" name="register" value="Register">
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
    
</body>
</html>