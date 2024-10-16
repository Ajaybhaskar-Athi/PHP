<?php
define("courses", [
  "PHP",
  "HTML",
  "CSS"
]);
echo courses[0];
?>

<!--
<?php  
const WISHES="Good day";  
echo WISHES;  
?> 



 <?php
// case-sensitive constant name
define("WISHES", "Good Evening");
echo WISHES;
?> 






<?php      
    define("WISHES", "Good Evening");  
    echo WISHES. "<br>";  
    echo constant("WISHES");  
    //both are similar  
?> 



<?php
define("courses", [
  "PHP",
  "HTML",
  "CSS"
]);
echo courses[0];
?>


<?php
const WISHES=array("PHP",
"HTML",
"CSS");  
echo WISHES[0];  
?>


<?php
define("WISHES", "Good Evening");

function test() {
  echo WISHES;
}
test();
?> 
 -->
