<?php

$servername="localhost";
$username="root";
$password="";

//establish connection
$conn =mysqli_connect($servername,$username,$password);

//check connection
if(!$conn){
    die("Persistent connection failed: ".mysqli_connect_error());
}

//create database
$databasename="Ajay";
$sql="CREATE DATABASE $databasename";

if(mysqli_query($conn,$sql)){
    echo "Database '$databasename' created successfully";
}else{
    echo "Error creating database : ".mysqli_error($conn);
}

//closing connection
mysqli_close($conn);

?>