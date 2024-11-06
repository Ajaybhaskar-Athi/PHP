<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "Ajay";

// Establish connection
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to drop the 'Departments' table
$sql_drop_table = "DROP TABLE IF EXISTS Departments";

// Execute the query
if (mysqli_query($conn, $sql_drop_table)) {
    echo "Table 'Departments' dropped successfully.<br>";
} else {
    echo "Error dropping table: " . mysqli_error($conn) . "<br>";
}

// Close the connection
mysqli_close($conn);
?>
