<?php
// Initialize variables for inputs and errors
$email = $age = $website = $booleanValue = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate email
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    // Sanitize and validate age (must be an integer)
    $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
    if (!filter_var($age, FILTER_VALIDATE_INT)) {
        $errors['age'] = "Age must be a valid integer.";
    }

    // Sanitize and validate website URL
    $website = filter_var($_POST['website'], FILTER_SANITIZE_URL);
    if (!filter_var($website, FILTER_VALIDATE_URL)) {
        $errors['website'] = "Invalid URL format.";
    }

    // Sanitize and validate boolean value (must be either 'true' or 'false')
    if (isset($_POST['boolean'])) {
        $booleanValue = filter_var($_POST['boolean'], FILTER_SANITIZE_STRING);
        if ($booleanValue !== 'true' && $booleanValue !== 'false') {
            $errors['boolean'] = "Please enter a valid boolean value (true/false).";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filter Example</title>
</head>
<body>

    <h1>PHP Filters for Validation and Sanitization</h1>
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="email">Email:</label><br>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
        <?php echo !empty($errors['email']) ? "<small style='color:red'>{$errors['email']}</small><br>" : ""; ?>

        <label for="age">Age:</label><br>
        <input type="text" name="age" value="<?php echo htmlspecialchars($age); ?>"><br>
        <?php echo !empty($errors['age']) ? "<small style='color:red'>{$errors['age']}</small><br>" : ""; ?>

        <label for="website">Website:</label><br>
        <input type="text" name="website" value="<?php echo htmlspecialchars($website); ?>"><br>
        <?php echo !empty($errors['website']) ? "<small style='color:red'>{$errors['website']}</small><br>" : ""; ?>

        <label for="boolean">Boolean Value (true/false):</label><br>
        <input type="text" name="boolean" value="<?php echo htmlspecialchars($booleanValue); ?>"><br>
        <?php echo !empty($errors['boolean']) ? "<small style='color:red'>{$errors['boolean']}</small><br>" : ""; ?>

        <br>
        <button type="submit">Submit</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errors)): ?>
        <h2>Submitted Data:</h2>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Age:</strong> <?php echo htmlspecialchars($age); ?></p>
        <p><strong>Website:</strong> <?php echo htmlspecialchars($website); ?></p>
        <p><strong>Boolean Value:</strong> <?php echo htmlspecialchars($booleanValue); ?></p>
    <?php endif; ?>

</body>
</html>
