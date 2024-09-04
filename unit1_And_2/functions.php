
<?php

$name="Ajay";
$place="Andhra-Pradesh";
function greet(&$name,&$place){
    echo "HELLO Everyone , Im $name and i'm from $place <br>";
    $name="akshay";
    
}

greet($name,$place);
echo "After Function Calling name is : $name <br>";
echo "____________********************______________________<br><br>";



?>

<?php

$a = 10;
$b = 20;
function fun(){
    $a = 20;
    $num = $GLOBALS['a'];
    echo "Local variable: $a And Global Variable: $num <br>";
}
fun();
echo "____________********************______________________<br><br>";

?>


<?php
// In PHP, a static variable is a special kind of variable that retains its value between multiple calls to a function or method.
//  Unlike normal local variables, which get re-initialized every time a function is called, a static variable is initialized only once 
//  and its value is preserved for the entire script execution.

function counter() {
    static $count = 0; // Static variable
    $count++;
    echo "Count: $count<br>";
}

counter(); // Output: Count: 1
counter(); // Output: Count: 2
counter(); // Output: Count: 3

?>

<?php

function fun2(int $num=10){
    echo "The Argumnet u passed is : $num <br>";
}
fun2(20);
counter();// Output: Count: 4
?>
