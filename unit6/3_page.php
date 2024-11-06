

<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "Ajay";

//if u RUN script Multipel times it may gives u error That same column exits when u try to add same col again
// Establish connection
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Add a new column 'head' to store the department head's name
$sql_add_column = "ALTER TABLE Departments ADD head VARCHAR(50)";
if (mysqli_query($conn, $sql_add_column)) {
    echo "Column 'head' added successfully.<br>";
} else {
    echo "Error adding column 'head': " . mysqli_error($conn) . "<br>";
}

// Modify 'location' column to be NOT NULL
$sql_modify_column = "ALTER TABLE Departments MODIFY location VARCHAR(50) NOT NULL";
if (mysqli_query($conn, $sql_modify_column)) {
    echo "Column 'location' modified to be NOT NULL.<br>";
} else {
    echo "Error modifying column 'location': " . mysqli_error($conn) . "<br>";
}

// Rename column 'head' to 'manager'
$sql_rename_column = "ALTER TABLE Departments CHANGE head manager VARCHAR(50)";
if (mysqli_query($conn, $sql_rename_column)) {
    echo "Column 'head' renamed to 'manager'.<br>";
} else {
    echo "Error renaming column: " . mysqli_error($conn) . "<br>";
}

// Remove the NOT NULL constraint from 'location' column
$sql_remove_not_null = "ALTER TABLE Departments MODIFY location VARCHAR(50)";
if (mysqli_query($conn, $sql_remove_not_null)) {
    echo "Column 'location' modified to allow NULL.<br>";
} else {
    echo "Error modifying column 'location': " . mysqli_error($conn) . "<br>";
}

// Close the connection
mysqli_close($conn);
?>
