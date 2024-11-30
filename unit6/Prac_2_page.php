<!-- // $table_sql="CREATE TABLE IF NOT EXISTS practice(
//     id int (11) AUTO_INCREMENT PRIMARY KEY,
//     name varchar(255) NOT NULL,
//     salary Decimal(10,2) NOT NULL
// )";
// if(mysqli_query($conn,$table_sql)){
//     echo "Table created Succesfully <br>";
// }else echo "Error in Creating Table ". mysqli_error($conn) ."<br>";

// $insert_sql="INSERT INTO practice (name,salary) values ('Akshaya',990000.00),('kushi',909000.00),('kalyani',889000.00),('hemanth',80000.00),('vinay',109000.00)";

// if(mysqli_query($conn,$insert_sql)){
//     echo "Rows Inserted into Table succesfully<br>";
// }else echo "Error in Inserting the Rows into Table ". mysqli_error($conn) ."<br>";
 -->

 <!-- <td>" . $row['name'] ."</td>
 <td>". $row['salary']."</td> -->

<?php
$server="localhost";
$username="root";
$password="";
$database="Ajay";

$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
    // die("Error in connecting to the database".mysqli_connect_error()); //or below one anyhting u can use
    die("Error in connecting to the database".mysqli_error($conn));
}



if(isset($_POST['add'])){
    $name=$_POST['name'];
    $salary=$_POST['salary'];
    $insert_sql="INSERT INTO PRACTICE (name,salary) values('$name','$salary')";
    if(mysqli_query($conn,$insert_sql)){
        echo "<script>alert('Rows inserted Succesfully');</script>";
         // Redirect to avoid resubmission on page refresh
        header("Location: " . $_SERVER['PHP_SELF']);
    }else echo ("Erorr in Inserting Row into table". mysqli_error($conn). "<br>");
}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $salary=$_POST['salary'];
    $update_sql="UPDATE PRACTICE set name='$name', salary='$salary' where id='$id'";
if(mysqli_query($conn,$update_sql)){
    echo "<script>alert('Row updated Succesfully');</script>";
    header("Location: " . $_SERVER['PHP_SELF']);

}else {
        echo "Error in updating Row: " . mysqli_error($conn) . "<br>";
    }
}
if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $delete_sql="DELETE from practice where id=$id";
    mysqli_query($conn,$delete_sql);
}
function getEmp($conn){
    $get_sql = "SELECT * from practice";
    $res = mysqli_query($conn, $get_sql);
    if(mysqli_num_rows($res) > 0){
        echo "<table border=1>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>";
        while($row = mysqli_fetch_assoc($res)){
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>
                        <form method='POST'>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <input type='text' name='name' value='" . $row['name'] . "' >
                        </td>
                    <td>
                        <input type='number' name='salary' value='" . $row['salary'] . "' >
                    </td>
                    <td>
                        <input type='submit' name='update' value='Update'>
                    </form>
                    <form method='POST' style='display:inline;'>
                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                        <input type='submit' name='delete' value='DELETE'>
                    </form>
                    </td>
                </tr>";
        }
        echo "</table>";
    }
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETP Practice</title>
</head>
<body>
    
<form  method="POST">
    <label for="name">Enter Employee Name</label>
    <input type="text" name='name' placeholder='Name' required> <br>
    <label for="name">Enter Employee salary</label>

    <input type="number" name='salary' placeholder='Salary' required> <br>
    <input type="submit" name='add' value="Add To Table">

    <br>
    <br>
</form>

    <?php getEmp($conn);?>

</body>
</html>