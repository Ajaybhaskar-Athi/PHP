

<?php

function swap(&$a,&$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
}
$a=2;
$b=3;
swap($a,$b);
echo "a= $a , b=$b <br>";


?>


<?php

function static_var(){
    static $a=0;
    $b=0;
    $b++;
    $a++;
    echo "a= $a ,b=$b <br>";
}
    static_var();
    static_var();


?>

<?php
 //binary to decimal
 echo "The decimal of binary 101 is : ". bindec(101)."<br>";
 //decimal to bianry
 echo "The binary of 12 is :". decbin(12) ."<br>";
//  pow() function
$base=2;
$exp=3;
echo "2 power 3 is : ".pow(2,3)."<br>";


?>

<?php

//copy str into other varibale
$str="Ajay";
$copy="";
for($i=0;$i<strlen($str);$i++){
    $copy.=$str[$i];
}

echo "The String copied is : ".$copy."<br>";

?>


<?php

$n=10;
$sum=0;
$i=0;
echo ($n*($n+1))/2;
echo "<br>";
while($i<=$n){
    $sum+=$i;
    $i++;
}

echo "The sum of natural number upto $n is: ".$sum."<br>";


?>

<?php

$ch='1';

if(ctype_alpha($ch)){
    echo "Yes its a Alphabet.<br>";
}else echo "No its Not a Alphabet<br>";


?>


<?php
//PHP Program to Print all Non Repeated Elements in an Array
$arr=[1,1,2,3,4,4,5,6,6,7];
$freq=array_count_values($arr);
foreach($freq as $ele=>$val){
    if($val==1)echo $ele ." " ;
}
echo "<br>";

?>


<!-- PHP Program to Find Missing Numbers in Array -->

<?php
$arr=[1,2,4,6];
$n=6;
$complete_arr=range(1,$n);
$res=array_diff($complete_arr,$arr);
foreach($res as $idx=>$val){
    echo " index is: $idx & value missing is:  $val <br>";
}

?>


<!-- Array Reverse --->

<?php

$arr=[1,2,3,4];

    $n=count($arr);
for($i=0;$i<$n/2;$i++){
    $temp=$arr[$n-$i-1];
    $arr[$n-$i-1]=$arr[$i];
    $arr[$i]=$temp;
}

foreach($arr as $ele){
    echo "$ele ";
}

?>


<?php
//Matrix multiplication

$arr1=[[1,2],[3,4]];
$arr2=[[5,6],[7,8]];

    $res=[];
 $rows1=count($arr1);
    $rows2=count($arr2);
    $cols1=count($arr1[0]);
    $cols2=count($arr2[0]);

    for($i=0;$i<$rows1;$i++){
        for($j=0;$j<$cols2;$j++){
           $res[$i][$j]=0;
            for($k=0;$k<$cols1;$k++){
                $res[$i][$j]+=$arr1[$i][$k]*$arr2[$k][$j];
            }
        }
    }

    foreach($res as $v1){
        echo "[ ";
        foreach($v1 as $ele){
            echo $ele." ";
        }echo " ]<br>";
    }echo "<br>";
?>

<?php
//Matrix Addition

$arr1=[[1,2],[3,4]];
$arr2=[[5,6],[7,8]];

    $res=[];
 $rows1=count($arr1);
    $rows2=count($arr2);
    $cols1=count($arr1[0]);
    $cols2=count($arr2[0]);

    for($i=0;$i<$rows1;$i++){
        for($j=0;$j<$cols2;$j++){
           $res[$i][$j]=$arr1[$i][$j]+$arr2[$i][$j];
        }
    }

    foreach($res as $v1){
        echo "[ ";
        foreach($v1 as $ele){
            echo $ele." ";
        }echo " ]<br>";
    }echo "<br>";
?>




<?php
//fibonacci
echo "Fibonacci Numbers : ";
$a=0;
$b=1;
echo $a." ".$b." ";
for($i=3;$i<10;$i++){
    $c=$a+$b;
    echo $c." ";
        $a=$b;
        $b=$c;
}
echo "<br>";

?>

<?php
//Basic switch case 
 $num1 = 10;
 $num2 = 5;
 $operator = '+';
 switch ($operator) {
    case '+':
        echo $num1 + $num2;
        break;
    case '-':
        echo $num1 - $num2;
        break;
    case '*':
        echo $num1 * $num2;
        break;
    case '/':
        if ($num2 != 0) {
            echo $num1 / $num2;
        } else {
            echo "Division by zero error.";
        }
        break;
    default:
        echo "Invalid operator";
 }
 ?>


<?php

echo "<h1>Patterns!!!</h1>";
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
            echo $j." ";
        }echo "<br>";
    }

?>

<?php

for($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }echo "<br>";
}
?>

<?php


for($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo $j;
    }echo "<br>";
}

?>

<?php
$n=6;
$col=$n+($n-1);
for($i=0;$i<$n;$i++){
    
    for($j=1;$j<=$n-$i-1;$j++)echo "-";
    for($j=1;$j<=2*$i+1;$j++)echo "*";
    for($j=1;$j<=$n-$i-1;$j++)echo "-";
    echo "<br>";
}echo "<br>";



?>

<?php


$n=5;
for($i=$n-1;$i>=0;$i--){

    for($j=1;$j<=$n-$i-1;$j++)echo "-";
    for($j=1;$j<=2*$i+1;$j++)echo "*";
    for($j=1;$j<=$n-$i-1;$j++)echo "-";
    echo "<br>";
}
echo "Ended <br><br>";


?>


<?php

// $n=3;

function upper_pyramid($n){
    for($i=0;$i<$n;$i++){

        for($j=1;$j<=$n-$i-1;$j++){
            echo "-";
        }
        for($j=1;$j<=2*$i+1;$j++)echo "*";
        for($j=1;$j<=$n-$i-1;$j++)echo "-";
        echo "<br>";
    }


}
function lower_pyramid($n){
    for($i=$n-1;$i>=0;$i--){

        for($j=1;$j<=$n-$i-1;$j++){
            echo "-";
        }
        for($j=1;$j<=2*$i+1;$j++)echo "*";
        for($j=1;$j<=$n-$i-1;$j++)echo "-";
        echo "<br>";
    }

    echo "Ended <br><br>";

}

upper_pyramid(3);
lower_pyramid(3);




?>





<?php

$n=3;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }echo "<br>";
}
for($i=$n-1;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }echo "<br>";
}

echo "Ended <br><br>";


?>


<?php
$n=5;
for($i=0;$i<$n;$i++){
    if($i%2==0)$start=1;
    else $start=0;
    for($j=0;$j<=$i;$j++){
     
        echo $start." ";
        $start=1-$start;
    }echo "<br>";
    
}

?>


<?php
$n = 5;
for ($i = $n; $i >= 1; $i--) {
 for ($j = 1; $j <= $i; $j++) {
 echo "* ";
 }
 echo "<br>";
}
?>
<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
 for ($j = 1; $j <= $i; $j++) {
 echo "* ";
 }
 echo "<br>";
}
?>



<?php
$n = 5;
for ($i = $n; $i >= 1; $i--) {
 for ($j = 1; $j <= $n - $i; $j++) {
 echo " ";
 }
 for ($k = 1; $k <= 2 * $i - 1; $k++) {
 echo "*";
 }
 echo "<br>";
}
?>

<?php
$n = 5;
for ($i = $n; $i >= 1; $i--) {
 for ($j = 1; $j <= $i; $j++) {
 echo $j . " ";
 }
 echo "<br>";
}
?>


