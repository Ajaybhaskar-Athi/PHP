
<?php

$servername = "localhost";  // XAMPP runs MySQL on localhost
$username = "root";         // Default XAMPP username for MySQL
$password = "";             // Default password is empty

// Establish connection to MySQL server
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create a database
$databasename = "Ajay";  // Database name
$sql = "CREATE DATABASE IF NOT EXISTS $databasename";

if (mysqli_query($conn, $sql)) { //2 parameters: connection and query
    echo "Database '$databasename' created successfully.<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Select the database to use
mysqli_select_db($conn, $databasename);

// Create Employees table
$table_sql = "CREATE TABLE IF NOT EXISTS Employees (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    salary DECIMAL(10, 2) NOT NULL
)";

if (mysqli_query($conn, $table_sql)) {
    echo "Table 'Employees' created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Insert data into Employees table
$insert_sql = "INSERT INTO Employees (name, salary) VALUES 
    ('John Doe', 50000.00),
    ('Jane Smith', 60000.00),
    ('Emily Brown', 55000.00)";

if (mysqli_query($conn, $insert_sql)) {
    echo "Records inserted successfully.<br>";
} else {
    echo "Error inserting records: " . mysqli_error($conn) . "<br>";
}

// Optional: Deleting the table (if needed)
// $delete_table_sql = "DROP TABLE IF EXISTS Employees";
// if (mysqli_query($conn, $delete_table_sql)) {
//     echo "Table 'Employees' deleted successfully.<br>";
// } else {
//     echo "Error deleting table: " . mysqli_error($conn) . "<br>";
// }

// Close the connection
mysqli_close($conn);

?>
















<?php
/*
$servername = "localhost";  // XAMPP runs MySQL on localhost
$username = "root";         // Default XAMPP username for MySQL
$password = "";             // Default password is empty
$dbname = "php_practice";    // Replace with the name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL database.";


// Create Employees table
$table_sql = "CREATE TABLE IF NOT EXISTS Employees (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    salary DECIMAL(10, 2) NOT NULL
)";

if ($conn->query($table_sql) === TRUE) {
    echo "Table 'Employees' created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert data into Employees table
$insert_sql = "INSERT INTO Employees (name, salary) VALUES 
    ('John Doe', 50000.00),
    ('Jane Smith', 60000.00),
    ('Emily Brown', 55000.00)";

if ($conn->query($insert_sql) === TRUE) {
    echo "Records inserted successfully.<br>";
} else {
    echo "Error inserting records: " . $conn->error . "<br>";
}

// Close the connection
$conn->close();
*/
?>
