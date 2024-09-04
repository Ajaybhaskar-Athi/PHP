<!-- <?php 
$a = 10;
echo $a; // Outputs: 10
?>

<?php 
$a = 20; // Re-declaring and assigning a new value
echo $a; // Outputs: 20
?> -->


<?php
    date_default_timezone_set('Asia/Kolkata');

    $x=10;
    if($x<20){
        echo "$x is smaller then 20 ! <br>";
        echo $x ."is smaller then 20 <br>";
    }else echo "$x is not smaller then 20 <br>";
    $d=date("D");
    echo $d."<br>";
echo "***********___________________*******************<br>";

?>

<?php 
if($d=="Mon")echo "Its a Monday!<br>";
?>


<?php

switch($d){
    case "Mon": echo "Hello Monday !!";
                break;
    case "Tue": echo "Hello Tuesday !!";
                break;
    case "Wed": echo "Hello Wednesday !!";
                break;
    case "Thu": echo "Hello Thursday !!";
                break;
    case "Fri": echo "Hello Friday !!";
                break;
    case "Sat": echo "Hello Saturday !!";
                break;
    default : echo "The input you entered is Invalid !!";


}

$a="22";
if($a<="20")echo "Yes";
else echo "No";
echo "<br>";

echo "***********___________________*******************<br>";

/* When you use comparison operators like <=, PHP performs type juggling.
 If a string looks like a number (e.g., "22" or "20"), PHP will automatically convert it to a numeric value for the comparison.
In this case:
$a is "22" (a string).
"20" is also a string.
However, PHP converts both strings to integers during the comparison:
"22" becomes 22.
"20" becomes 20. 
*/

?>



<?php
$t=date('H');
echo "The time is $t hour now!<br>";

if($t>=0 && $t<=12)echo "Its a morning , so AM";
else if($t<=15) echo "Its a Afternoon , so PM";
else if($t <=18) echo "Its a Evening , so PM";
else echo "Its a night";
echo "<br>";

$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "<br>";

echo "***********___________________*******************<br>";



?>
<?php

$z=20;
echo $z%2==0 ? "$z is : Even":" $z is :ODD";
echo "<br>";

?>

