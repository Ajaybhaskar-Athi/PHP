<?php

$servername = "localhost";  
$username = "root";         
$password = "";             // Default password is empty
$databasename = "Ajay";     

$conn = mysqli_connect($servername, $username, $password, $databasename);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function getEmployeesData($conn) {
    $sql = "SELECT * FROM Employees";  
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Salary</th>
                </tr>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['salary'] . "</td>
                </tr>";
        }
        
        echo "</table>";
    } else {
        echo "No records found.";
    }
}

getEmployeesData($conn);

mysqli_close($conn);

?>
