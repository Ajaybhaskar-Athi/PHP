<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_practice"; // replace with your database name

// Establish connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// WHERE clause example: Select employees from the 'Sales' department
$sql_where = "SELECT * FROM Employees2 WHERE department = 'Sales'";
$result_where = mysqli_query($conn, $sql_where);
echo "<h3>Employees in Sales Department:</h3>";
while ($row = mysqli_fetch_assoc($result_where)) {
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Salary: " . $row['salary'] . "<br>";
}

// ORDER BY example: Order employees by salary in descending order
$sql_order = "SELECT * FROM Employees2 ORDER BY salary DESC";
$result_order = mysqli_query($conn, $sql_order);
echo "<h3>Employees Ordered by Salary (Descending):</h3>";
while ($row = mysqli_fetch_assoc($result_order)) {
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Salary: " . $row['salary'] . "<br>";
}

// GROUP BY example: Count employees in each department
$sql_group = "SELECT department, COUNT(id) AS employee_count FROM Employees2 GROUP BY department";
$result_group = mysqli_query($conn, $sql_group);
echo "<h3>Employee Count by Department:</h3>";
while ($row = mysqli_fetch_assoc($result_group)) {
    echo "Department: " . $row['department'] . " - Employee Count: " . $row['employee_count'] . "<br>";
}

// HAVING example: Only show departments with more than 5 employees
$sql_having = "SELECT department, COUNT(id) AS employee_count FROM Employees2 GROUP BY department HAVING employee_count > 5";
$result_having = mysqli_query($conn, $sql_having);
echo "<h3>Departments with More Than 5 Employees:</h3>";
while ($row = mysqli_fetch_assoc($result_having)) {
    echo "Department: " . $row['department'] . " - Employee Count: " . $row['employee_count'] . "<br>";
}

// LIKE example: Select employees whose names start with 'J'
$sql_like = "SELECT * FROM Employees2 WHERE name LIKE 'J%'";
$result_like = mysqli_query($conn, $sql_like);
echo "<h3>Employees Whose Names Start with 'J':</h3>";
while ($row = mysqli_fetch_assoc($result_like)) {
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Salary: " . $row['salary'] . "<br>";
}

// AND / OR example: Select employees in the 'Sales' department with a salary over 50000
$sql_and_or = "SELECT * FROM Employees2 WHERE department = 'Sales' AND salary > 50000";
$result_and_or = mysqli_query($conn, $sql_and_or);
echo "<h3>Employees in Sales Department with Salary > 50000:</h3>";
while ($row = mysqli_fetch_assoc($result_and_or)) {
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Salary: " . $row['salary'] . "<br>";
}

// Close connection
mysqli_close($conn);
?>
