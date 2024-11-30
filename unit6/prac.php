
<?php

$servername = "localhost";  // XAMPP runs MySQL on localhost
$username = "root";         // Default XAMPP username for MySQL
$password = "";             // Default password is empty
$db="php_practice";
// Establish connection to MySQL server
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function getEmp($conn){
    $get_sql="select * from employees2";
    $result = mysqli_query($conn,$get_sql);
    if(mysqli_num_rows($result)>0){
        echo " <h2> The Table data: </h2> <br>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<b>ID: </b>". $row['id'] . " <b>Name: </b>" . $row['name'] . "<b>Salary: </b>" . $row['salary'] ." <b>  Department: </b>". $row['department']. "<br>";
        }
    }

}

function where($conn){
    // $where_sql="SELECT * FROM employees2 where salary<=50000";
    // SELECT * FROM employees2 WHERE NOT department = 'Sales';
    //SELECT * FROM employees2 WHERE department != 'Marketing';


    // $where_sql="SELECT * FROM employees2 where salary between 50000 AND 70000  AND department  in('Sales','Marketing')"; or
    $where_sql="SELECT * FROM employees2 where salary between 50000 AND 70000  AND (department='Sales' or department='Marketing')";


    $res=mysqli_query($conn,$where_sql);
    if(mysqli_num_rows($res)>0){
        echo " <h2> Employees with Salary Between 50k and 70k in Sales and Marketing Departments </h2> <br>";
        while($row=mysqli_fetch_assoc($res)){
            echo "<b>ID: </b>". $row['id'] . " <b>Name: </b>" . $row['name'] . "<b>Salary: </b>" . $row['salary'] .  "<br>";
            
        }
    }
}
function orderBy($conn){
    $order_sql="SELECT * FROM employees2 where department='Sales' ORDER BY salary DESC ";
    $res=mysqli_query($conn,$order_sql);
    if(mysqli_num_rows($res)>0){
        echo " <h2> The Data of Employees in Descending Order Where Department=Sales : </h2> <br>";
        while($row=mysqli_fetch_assoc($res)){
            echo "<b>ID: </b>". $row['id'] . " <b>Name: </b>" . $row['name'] . "<b>Salary: </b>" . $row['salary'] .  "<br>";
            
        }
    }
}

function groupBy($conn){
    $sql="SELECT department,count(id) as employee_count from employees2 group by DEPARTMENT";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        echo "<h2>The No of Employees In Each Department : </h2> <br>";
        while($row=mysqli_fetch_assoc($res)){
            echo "<b>Department: </b>". $row['department'] . "<b>Employee count: </b>" . $row['employee_count'] .  "<br>";  
        }
    }


    $sql="SELECT  salary,count(id) as employee_count from employees2  group by Salary order by employee_count DESC";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        echo "<h2>Employee Count by Salary, Ordered by Frequency : </h2> <br>";
        while($row=mysqli_fetch_assoc($res)){
            echo "<b>Salary: </b>". $row['salary'] . "<b>Employee count: </b>" . $row['employee_count'] .  "<br>";  
        }
    }
}

function having($conn){
    $sql="SELECT *  ,count(id) as emp_count from employees2  group by department having emp_count>=3";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        echo "<h2>Departments with More Than 3 Employees : </h2> <br>";
        while($row=mysqli_fetch_assoc($res)){
            echo "<b>Department: </b>". $row['department'] . "<b>Emp_Count: </b>". $row['emp_count']."<br>";
        }
    }
    
}
function like($conn){
    $sql="SELECT * FROM employees2 WHERE name LIKE '_a%'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        echo "<h2>Employees with Names Containing 2nd letter as 'a' : </h2> <br>";
        while($row=mysqli_fetch_assoc($res)){
            echo "<b>ID: </b>". $row['id'] . " <b>Name:</b>". $row['name']. "<b>Department: </b>".$row['department']."<br>";
        }
    }

}

function getAVG_MIN_MAX($conn){
    // $sql="SELECT department,ROUND(AVG(salary), 0)as avg_salary FROM employees2 group by department";
    $sql = "SELECT 
            department, 
            ROUND(AVG(salary), 0) AS avg_salary, 
           ROUND( sum(salary),0) as total_salary, 
            MIN(salary) AS min_salary, 
            MAX(salary) AS max_salary 
        FROM employees2 
        GROUP BY department";

    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        echo "<h2>Employees Avg Salary group by Department : </h2> <br>";
        while($row=mysqli_fetch_assoc($res)){
            echo "<b>Department: </b>".$row['department']."<b>Avg Salary: </b>".$row['avg_salary'].
             "<b>Min Salary: </b>".$row['min_salary']."<b>Max Salary: </b>".$row['max_salary'].
             "<b>Total Salary: </b>".$row['total_salary'].  "<br>";
        }
    }

}

function get_lcase($conn){
    $sql="SELECT * FROM employees2 WHERE LCASE(department) = 'sales'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        echo "<h2>Employees with department sales irrespective of their Case  : </h2> <br>";
        while($row=mysqli_fetch_assoc($res)){
            echo "<b>ID: </b>". $row['id'] . " <b>Name:</b>". $row['name']. "<b>Department: </b>".$row['department']."<br>";
        }
    }
}

getEmp($conn);
where ($conn);
orderBy($conn);
groupBy($conn);
having($conn);
like($conn);
getAVG_MIN_MAX($conn);
get_lcase($conn);






mysqli_close($conn);

?>










