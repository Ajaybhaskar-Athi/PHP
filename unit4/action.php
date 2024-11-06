<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_SESSION['name']=$_POST['name'];
    // $COOKIE_NAME="User";
    // $COOKIE_VALUE=$_POST['name'];

    // setcookie($COOKIE_NAME,$COOKIE_VALUE,time()+3600);//3600 seconds

    $name=$_POST['name'];
    $email=$_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format <br>";
    } else {
        echo "Name: " . $name . "<br><br>";
    }
    if(empty($name) || strlen($name)<4 || strlen($name)>12){
        echo "Name should not be Empty And it should contain 4-12 characters <br>";
    }  

   else  echo "Email: ".$email."<br> <br>";
   echo "Description: ". $_POST["description"] ."<br><br>";
   echo "Gender: " ;
   echo  $_POST["gender"] ."<br><br>";

    // echo "cookie is set for " .$COOKIE_NAME ."<br> <br>";
    // echo "Cookie value is ".$_COOKIE[$COOKIE_NAME] ."<br> <br>";

    // setcookie($COOKIE_NAME,"",time()-36000);//destroy cookie;


        session_unset();
        session_destroy();

    


}


?>