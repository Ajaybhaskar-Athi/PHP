<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "Ajay";
$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Error in connecting the Database: " . mysqli_error($conn) . "<br>");
}

// Add Employee
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $sql = "INSERT INTO emp (name, salary) VALUES ('$name', '$salary')";
    mysqli_query($conn, $sql);
}

// Delete Employee
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM emp WHERE id=$id";
    mysqli_query($conn, $sql);
}

// Update Employee
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $sql = "UPDATE emp SET name='$name', salary='$salary' WHERE id=$id";
    mysqli_query($conn, $sql);
}

// Truncate Table
if (isset($_POST['truncate'])) {
    $sql = "TRUNCATE TABLE emp";
    mysqli_query($conn, $sql);
}

// Drop Table
if (isset($_POST['drop'])) {
    $sql = "DROP TABLE IF EXISTS emp";
    mysqli_query($conn, $sql);
}

// Fetch and Display Employees
function getEmp($conn) {
    $get_sql = "SELECT * FROM emp";
    $res = mysqli_query($conn, $get_sql);
    if (mysqli_num_rows($res) > 0) {
        echo "<table border=1>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Actions</th>
            </tr>";
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>
                    <form method='POST'>
                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                        <input type='text' name='name' value='" . $row['name'] . "' required>
                </td>
                <td>
                        <input type='number' name='salary' value='" . $row['salary'] . "' required>
                </td>
                <td>
                        <input type='submit' name='update' value='Update'>
                    </form>
                    <form method='POST' style='display:inline;'>
                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                        <input type='submit' name='delete' value='Delete'>
                    </form>
                </td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No records found.</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicing Ajay DB</title>
</head>
<body>
    <h2>Add Employee</h2>
    <form method="POST">
        <label for="name">Enter your Name</label> 
        <input type="text" id="name" name="name" required> <br>
        <label for="salary">Enter Your Salary</label>
        <input type="number" id="salary" name="salary" required> <br>
        <input type="submit" name="add" value="Add Employee">
    </form>

    <h2>Employee Records</h2>
    <?php getEmp($conn); ?>

    <h2>Table Operations</h2>
    <form method="POST">
        <input type="submit" name="truncate" value="Truncate Table">
        <input type="submit" name="drop" value="Drop Table">
    </form>

    <?php mysqli_close($conn); ?>
</body>
</html>
