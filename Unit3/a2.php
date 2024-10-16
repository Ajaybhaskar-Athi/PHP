<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Retrieving user input
    $name = htmlspecialchars($_GET['name']);
    $roll = $_GET['roll'];

    // Displaying user input
    echo "<h2>Hello: $name!</h2>";
    echo "<h6>Roll No: $roll</h6>";

    // Printing to browser console
    echo "<script> 
        console.log('Name: " . addslashes($name) . "'); 
        console.log('Roll No: " . addslashes($roll) . "'); 
    </script>";
}
?>
