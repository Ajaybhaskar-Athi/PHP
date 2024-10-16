<?php
session_start(); // Start a new session or resume the existing one

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sample hardcoded username and password
    $username = "admin"; // Change this as needed
    $password = "password"; // Change this as needed

    // Get the input values from the form
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    // Verify the username and password
    if ($inputUsername === $username && $inputPassword === $password) {
        // Set a cookie that expires in 1 hour (3600 seconds)
        setcookie("user", $inputUsername, time() + 30, "/"); // "/" means available throughout the entire domain
        // Redirect to welcome page
        header("Location: cookies.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h2>Login Form</h2>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST" action="">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Login">
</form>
</body>
</html>
