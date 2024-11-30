<?php

$string="I am not a regular politician";
// $pattern="/aam/";
$pattern="/^am/";//starts with am 
$pattern="[0-9]";//This matches any single digit (0-9) anywhere in the string.
$pattern="/\d/"; //This matches any single digit (0-9) anywhere in the string.
$pattern="/^\d+$/";//The pattern ^\d+$ (+indicates one or nore digits) matches the entire string from start (^) to end ($) if it contains only digits.

if(preg_match($pattern,$string)){
    echo "The pattern is found <br>";
}else echo "The pattern is not found <br>";






$string="owel ow hello owned by owaisi zoo";
$pattern="/[ow]/";//matches any characters un square box
$pattern="/ow/"; //find all ow 
$pattern="/[^a-v]/"; //find other thane characters from a to v
$pattern="/[ow]{2}/";//matches ow twice in above string. if it matches 2 or more only it will store them other wise nothing 
preg_match_all($pattern,$string,$matches);
print_r($matches);




$string="Hello world";
$pattern="/world/";
$replacement="universe";
 $result=preg_replace($pattern,$replacement,$string);
echo "After Replacing the String is : $result <br>";







$string=["apple", "grapes","banana","apricot","aronge","aaa" ];
$pattern="/^[^a]/"; //not starts with a
$pattern="/[^a]/";//it means fileter elements that contains other then a , above all elements contaisnother then a
$res=preg_grep($pattern,$string);
print_r($res);



$string = "apple, banana, cherry orange.papapay";
$pattern="/[\s,.]/";// matche swith space or comma or fullstop
$res=preg_split($pattern,$string);
print_r($res);

$pattern="/^[a-zA-Z0-9.%+-_]+@[a-zA-Z0-9.-]+[A-Za-z]{2,}$/";
$string="ajaybhaskar.athi@gmail.com";

if (preg_match($pattern, $string)) {
    echo "Valid email address!";
} else {
    echo "Invalid email address!";
}
?>