

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h2>Submit your details</h2>
    <form method="post">
        Name: <input type="text" name="name" id="name"> 
        <br>
        Email: <input type="text" name="email" id="email"> 
        <button type="submit">Submit</button>
    </form>

    <?php
    // Check if the form was submitted via POST
    if (filter_has_var(INPUT_POST, 'name') && filter_has_var(INPUT_POST, 'email')) {
        // Retrieve the values and print them
        $name = $_POST['name']; // Corrected from $GET to $_POST
        $email = $_POST['email']; // Corrected from $GET to $_POST

        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
    } else {
        // If one or both fields are missing
        echo "Please provide both your name and email";
    }
    ?>
</body>
</html>

