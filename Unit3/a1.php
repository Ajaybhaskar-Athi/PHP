<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieving user input
    $name = htmlspecialchars($_POST['name']);
    $roll = $_POST['roll'];

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

<!-- 
***__htmlspecialchars() is a PHP function used to convert special characters in a string to their HTML entities. This is important for preventing XSS (Cross-Site Scripting) attacks and ensuring that user input is displayed correctly in HTML.

Usage
Convert Characters: It converts characters such as <, >, &, and " into their HTML entity equivalents (&lt;, &gt;, &amp;, and &quot; respectively).
Prevent XSS: By escaping these characters, it prevents potentially malicious code from being executed in the browser.

***__console.log
Quotes: Enclose PHP variables in single quotes within the console.log statement to ensure they are treated as strings.
Escaping: Use addslashes() to escape any special characters in $name and $roll to prevent breaking the JavaScript code.


-->