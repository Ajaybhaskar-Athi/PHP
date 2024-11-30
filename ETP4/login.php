


<?php

session_start();
$loginError='';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($_COOKIE['username']==$username && $_COOKIE['password']==$password){
        $_SESSION['username']=$username;
        header("Location: welcome.php");
    }else{
        $loginError="Invalid Credentials";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php require_once("header.php") ?>
<h2>Welcome To Login Page</h2>
<?php require_once("header.php") ?> <!-- //it will not inserted -->


<?php  if($loginError!=''){
    echo "<p style='color: red;'>$loginError</p>";
} ?>
<form method="POST">
<label for="username">User Name: </label>
    <input type="text" name="username" required>
    <br><br>
    <label for="password">PassWord: </label>
    <input type="password" name="password" required>
    <br><br>
    <input type="submit" name="login" value="Login" >
</form>
<p>Don't have an account <a href="register.php">Register Here</a></p>

<?php include_once("footer.php")?>
    
</body>
</html>