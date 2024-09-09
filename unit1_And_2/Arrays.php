<!-- 
In PHP, the dot (.) operator is used for string concatenation. When you want to combine 
strings and variables (including array elements) in PHP, you use the dot operator to concatenate them. -->


<?php

$arr=["Panjaa","Balu","Kushi","Tholiprema"];
foreach($arr as $ele){
    echo "$ele<br>";
}
echo "_____*************___________<br>";

?>



<?php
//array declaration
$courses = array("PHP", "HTML", "CSS");
echo $courses[0]. "<br>";  // Outputs: PHP

//declaring array as constant using DEFINE

define("courses", [
  "PHP",
  "HTML",
  "CSS"
]);

echo courses[1]. "<br>";

//declaring array as constant using genral way


const WISHES=array("PHP",
"HTML",
"CSS");  
echo WISHES[2]. "<br>";  

//DOT Operator 
const COURSES = ["PHP", "HTML", "CSS"];
echo "My favorite course is: " . COURSES[1] . "<br>"; 
echo "Courses available are: " . COURSES[0] . ", " . COURSES[1] . ", and " . COURSES[2] . "<br>";



//Function Declaration

define("WISHS", "Good Evening");

function test() {
  echo WISHS;
}
test();





?>


<!-- --------------------------- Associative Array ------------->


<?php
// In an associative array, => separates keys from their corresponding values.
$assArr=array(
    "name" =>"Ajay",
    "email"=>"ajay@lpu.in",
    "age"=>"20"
);
$age=$assArr["age"];
echo $age+5 ."<br>";
foreach($assArr as $key => $val){
    echo "Key: $key , value : $val <br>";
}

echo "_____________********************____________________<br>";
?>



<?php  
//declare an array of string  
$number = array ("One", "Two", "Three", "Stop", "Four");  
foreach ($number as $element) {  
  if($element =="Two")continue;
if ($element == "Stop") {  
break;  
}  
echo "$element </br>";  
}  
?>  

