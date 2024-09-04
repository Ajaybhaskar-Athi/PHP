<?php
date_default_timezone_set('Asia/Kolkata');

$d1 = date("Y-m-d"); // Returns the current date in the format "2024-08-26".
$d2 = date("H:i:s"); // Returns the current time in the format "14:35:00".
$d3= date("Y-m-d H:i:s"); // Returns the date and time in the format "2024-08-26 14:35:00".

$day=date("D");//Mon
$day2=date("l"); //Monday

echo "<br>".$d2 ."<br>".$d3 ."<br>".$day ."<br>".$day2 ."<br>";
echo "The date is printed at last $d1 <br>";
echo "_________________________________________<br>";

?>


<?php

$d1 = date("Y-m-d"); // Current date
$d2 = date("H:i:s"); // Current time
$d3 = date("Y-m-d H:i:s"); // Date and time
$day = date("D"); // Short day (e.g., Mon)
$day2 = date("l"); // Full day (e.g., Monday)

echo $d1 . "<br>";
echo $d2 . "<br>";
echo $d3 . "<br>";
echo $day . "<br>";
echo $day2 . "<br>";

?>

