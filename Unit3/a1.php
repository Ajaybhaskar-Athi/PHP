<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieving user input
    $name = htmlspecialchars($_POST['name']);

    if (!empty($name)) {
        echo "<h2>Hello: $name!</h2>";
    } else {
        echo "Name field cannot be empty!";
    }
}
?>
