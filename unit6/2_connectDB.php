<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_practice"; // replace with your actual database name

// Establish connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create Employees table
$table_sql = "CREATE TABLE IF NOT EXISTS Employees2 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    salary DECIMAL(10, 2) NOT NULL,
    department VARCHAR(50) NOT NULL
)";
if (mysqli_query($conn, $table_sql)) {
    echo "Table 'Employees2' created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Insert sample data into Employees table
$data_sql = "INSERT INTO Employees2 (name, salary, department) VALUES
    ('John Doe', 55000.00, 'Sales'),
    ('Jane Smith', 70000.00, 'IT'),
    ('Emily Brown', 45000.00, 'Sales'),
    ('Chris Green', 80000.00, 'Marketing'),
    ('Alice White', 52000.00, 'Sales'),
    ('Mark Black', 60000.00, 'IT'),
    ('Olivia Blue', 55000.00, 'Sales'),
    ('Henry Red', 40000.00, 'HR'),
    ('Sophia Gray', 75000.00, 'Marketing'),
    ('Liam Gold', 52000.00, 'Sales'),
    ('Emma Silver', 65000.00, 'IT')";

if (mysqli_query($conn, $data_sql)) {
    echo "Sample data inserted successfully into 'Employees2' table.<br>";
} else {
    echo "Error inserting data: " . mysqli_error($conn) . "<br>";
}

// Close connection
mysqli_close($conn);
?>
