<?php
$cookie_name = "user";
$cookie_value = "John Doe";

// Set the cookie to expire in 5 minutes (300 seconds)
setcookie($cookie_name, $cookie_value, time() + 10, "/"); // "/" means the cookie is available throughout the entire domain

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>