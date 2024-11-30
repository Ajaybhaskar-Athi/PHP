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
    ('Michael Clark', 58000.00, 'Sales'),
    ('Sara Johnson', 72000.00, 'IT'),
    ('Daniel Wilson', 47000.00, 'Sales'),
    ('Laura Adams', 83000.00, 'Marketing'),
    ('Peter Brown', 51000.00, 'HR'),
    ('Anna Taylor', 63000.00, 'IT'),
    ('Samuel Lee', 54000.00, 'Sales'),
    ('Grace Hall', 42000.00, 'HR'),
    ('Ethan King', 76000.00, 'Marketing'),
    ('Mia Scott', 53000.00, 'Sales'),
    ('Ava Moore', 64000.00, 'IT')";


if (mysqli_query($conn, $data_sql)) {
    echo "Sample data inserted successfully into 'Employees2' table.<br>";
} else {
    echo "Error inserting data: " . mysqli_error($conn) . "<br>";
}

// Close connection
mysqli_close($conn);
?>
