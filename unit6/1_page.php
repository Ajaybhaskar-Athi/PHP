<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "Ajay";

$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $sql = "INSERT INTO Employees (name, salary) VALUES ('$name', '$salary')";
    mysqli_query($conn, $sql);
  

}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM Employees WHERE id = $id";
    mysqli_query($conn, $sql);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $sql = "UPDATE Employees SET name='$name', salary='$salary' WHERE id=$id";
    mysqli_query($conn, $sql);
}

if (isset($_POST['delete_table'])) {
    $sql = "DROP TABLE IF EXISTS Employees";
    mysqli_query($conn, $sql);
}

if (isset($_POST['truncate_table'])) {
    $sql = "TRUNCATE TABLE Employees";
    mysqli_query($conn, $sql);
}

function getEmployeesData($conn) {
    $sql = "SELECT * FROM Employees";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['salary'] . "</td>
                    <td>
                        <form method='POST' style='display:inline;'>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <input type='submit' name='delete' value='Delete'>
                        </form>
                        <form method='POST' style='display:inline;'>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <input type='text' name='name' value='" . $row['name'] . "'>
                            <input type='number' name='salary' value='" . $row['salary'] . "'>
                            <input type='submit' name='update' value='Update'>
                        </form>
                    </td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
</head>
<body>
    <h1>Employee Table</h1>

    <form method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="number" name="salary" placeholder="Salary" required>
        <input type="submit" name="add" value="Add Employee">
    </form>

    <br><br>
    <?php getEmployeesData($conn); ?>

    <form method="POST">
        <input type="submit" name="delete_table" value="Delete Table">
    </form>

    <form method="POST">
        <input type="submit" name="truncate_table" value="Truncate Table">
    </form>
</body>
</html>

<?php mysqli_close($conn); ?>
