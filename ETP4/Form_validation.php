<?php

$email = $age = $website = $is_admin = $phone = $password = "";
$errors = []; // associative array

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate email
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $emailValid = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$emailValid) {
        $errors['email'] = "Invalid Email Format.";
    }

    // Sanitize and validate age
    $age = $_POST['age'];  // Capture age value from the form
    $age = filter_var($age, FILTER_VALIDATE_INT);
    if (!$age) {
        $errors['age'] = "Age must be a valid Integer.";
    }

    // Sanitize and validate website URL
    $website = filter_var($_POST['website'], FILTER_SANITIZE_URL);
    $websiteStatus = filter_var($website, FILTER_VALIDATE_URL);
    if (!$websiteStatus) {
        $errors['website'] = "Invalid Website URL.";
    }

    // Validate admin status
    $is_admin = filter_var($_POST['is_admin'], FILTER_VALIDATE_BOOLEAN);
    if (!$is_admin) {
        $errors['is_admin'] = "Invalid Value For Admin status";
    }

    $phone=$_POST['phone'];
    if (!preg_match('/^\d{3}-\d{3}-\d{4}$/', $phone)) {
        $errors['phone'] = "Invalid Phone Number Format. Use XXX-XXX-XXXX.";
    }

    // Validate password (at least 6 chars, one lowercase, one uppercase, and one digit)
    $password = $_POST['password'];
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{6,}$/', $password)) {
        $errors['password'] = "Password must be at least 6 characters long, with at least one lowercase letter, one uppercase letter, and one digit.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation And Sanitisation</title>
</head>
<body>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="email">Email: </label> <br>
        <input type="text" id='email' name='email' value="<?php echo htmlspecialchars($email); ?>"> <br>
        <?php echo !empty($errors['email']) ? "<small style='color:red'>{$errors['email']}</small><br>" : ""; ?>

        <label for="age">Age: </label> <br>
        <input type="text" id='age' name='age' value="<?php echo htmlspecialchars($age); ?>"> <br>
        <?php echo !empty($errors['age']) ? "<small style='color:red'>{$errors['age']}</small><br>" : ""; ?>

        <label for="website">Website: </label> <br>
        <input type="text" id='website' name='website' value="<?php echo htmlspecialchars($website); ?>"> <br>
        <?php echo !empty($errors['website']) ? "<small style='color:red'>{$errors['website']}</small><br>" : ""; ?>

        <label for="is_admin">Are You an Admin? (true/false): </label> <br>
        <input type="text" id='is_admin' name='is_admin' value="<?php echo htmlspecialchars($is_admin); ?>"> <br>
        <?php echo !empty($errors['is_admin']) ? "<small style='color:red'>{$errors['is_admin']}</small><br>" : ""; ?>

        <label for="phone">Phone Number: </label><br>
    <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" placeholder="XXX-XXX-XXXX"><br>
    <?php echo !empty($errors['phone']) ? "<small style='color:red'> {$errors['phone']} </small><br>" : ""; ?>

        <label for="password">Password: </label> <br>
        <input type="password" id='password' name='password' value="<?php echo htmlspecialchars($password); ?>" placeholder="Enter Password"> <br>
        <?php echo !empty($errors['password']) ? "<small style='color:red'>{$errors['password']}</small><br>" : ""; ?>

        <br>
        <button type="submit">Submit</button>
    </form>

    <!-- Display Submitted Data if no errors -->
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errors)): ?>
        <h2>Submitted Data</h2>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Age:</strong> <?php echo htmlspecialchars($age); ?></p>
        <p><strong>Website:</strong> <?php echo htmlspecialchars($website); ?></p>
        <p><strong>Admin Status:</strong> <?php echo $is_admin ? "True" : "False"; ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
        <p><strong>Password:</strong> <?php echo htmlspecialchars($password); ?></p>
    <?php endif; ?>

</body>
</html>
