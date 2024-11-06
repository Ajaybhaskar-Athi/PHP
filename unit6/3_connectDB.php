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

// Create new table 'Departments'
$sql_create = "CREATE TABLE IF NOT EXISTS Departments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(50)
)";
if (mysqli_query($conn, $sql_create)) {
    echo "Table 'Departments' created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Insert some sample data into 'Departments'
$sql_insert = "INSERT INTO Departments (name, location) VALUES 
    ('Sales', 'New York'),
    ('HR', 'San Francisco'),
    ('IT', 'Seattle'),
    ('Finance', 'Chicago'),
    ('Marketing', 'Los Angeles')";

if (mysqli_query($conn, $sql_insert)) {
    echo "Sample data inserted into 'Departments' successfully.<br>";
} else {
    echo "Error inserting data: " . mysqli_error($conn) . "<br>";
}



// Close the connection
mysqli_close($conn);
?>
