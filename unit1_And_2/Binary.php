<?php
echo "BINARY OPERATORS<br> <br>";

echo "1. Arithmetic Operators <br><br>";
$a=3;
$b=4;
echo "Value of a is ".$a." and Value of b is : ".$b."<br><br>";
echo "Addition: ". $a+$b."<br>";
echo "Subtraction: ". $a-$b."<br>";
echo "Multiplication: ". $a*$b."<br>";
echo "Division: ". $a/$b."<br>";
echo "Modulus: ". $a%$b."<br>";
echo "Exponential: ". $a**$b."<br><br>";
// -------------------------------------------------------------------------------------------------

echo "2. Comparison Operators<br><br>";


$a=5;
$b=5;

echo "Equal Operator: ".( $a==$b)."<br>";

$b='5';
$res=($a===$b);
echo "Identical Operator : <br>";
echo var_dump($a)." and ".var_dump($b). "<br>";
if($res){
    echo "They are of same type and value";
}else echo "They are not identical";
echo "<br>";



echo "Equal: " . var_export($a == $b, true) . "<br>";

echo "Identical: " . var_export($a === $b, true) . "<br><br>";

$x=10;$y=3;

echo "Not Equal: " . var_export($x != $y, true) . "<br>";
echo "Not Identical: " . var_export($x !== $y, true) . "<br>";
echo "Greater Than: " . var_export($x > $y, true) . "<br>";
echo "Less Than: " . var_export($x < $y, true) . "<br>";
echo "Greater Than or Equal To: " . var_export($x >= $y, true) . "<br>";
echo "Less Than or Equal To: " . var_export($x <= $y, true) . "<br><br>";


// -------------------------------------------------------------------------------------------------


echo "3.Bitwise Operators<br><br>";
// Bitwise Operators
$a = 6; // 0110 in binary
$b = 3; // 0011 in binary
echo "value of a and b are : ".$a." ,  ".$b."<br>";
echo "Bitwise AND: " . ($a & $b) . "<br>"; // 0010 in binary
echo "Bitwise OR: " . ($a | $b) . "<br>"; // 0111 in binary
echo "Bitwise XOR: " . ($a ^ $b) . "<br>"; // 0101 in binary
echo "Bitwise NOT: " . ~$a . "<br>"; // Inverts bits
echo "Left Shift: " . ($a << 1) . "<br>"; // 01010 in binary
echo "Right Shift: " . ($a >> 1) . "<br>"; // 0011 in binary




?>