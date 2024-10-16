<?php
session_start(); // Start the session

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session variables
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
}

// Display confirmation message
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <h1>Form Submission Successful!</h1>
    <p>Username: <?php echo $_SESSION['username']; ?></p>
    <p>Email: <?php echo $_SESSION['email']; ?></p>

    <a href="1_reset.php">Reset Session</a> <!-- Link to reset session -->
</body>
</html>
