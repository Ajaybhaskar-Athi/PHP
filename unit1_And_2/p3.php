
<?php

echo "<h1>Patterns!!!</h1>";
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
            echo $j." ";
        }echo "<br>";
    }
    echo "<br>";

?>

<?php

for($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }echo "<br>";
}
echo "<br>";

?>

<?php

for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){

echo "* ";    }echo "<br>";
}
echo "<br>";

?>




<?php
$n=4;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$n-$i;$j++)echo " - ";
    for($j=1;$j<=2*$i-1;$j++)echo " * ";
    for($j=1;$j<=$n-$i;$j++)echo " - ";
    echo "<br>";
}
echo "<br>";



?>

<?php
$n=3;
    for($i=$n;$i>=1;$i--){
        for($j=1;$j<=$n-$i;$j++)echo " - ";
        for($j=1;$j<=2*$i-1;$j++)echo " * ";
        for($j=1;$j<=$n-$i;$j++)echo " - ";
        echo "<br>";
    }
    echo "<br>";


?>


<?php
$n=4;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$n-$i;$j++)echo " - ";    
    for($j=1;$j<=$i;$j++)echo " * ";
    echo "<br>";
}

?>

<?php
$alphabets = range('12', '90');
 $n = 5;
 for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $alphabets[$j] . " ";
    }
    echo "<br>";
 }

 echo "<br>";
 ?>

 <?php
$alphabets=range('A','Z');
$n=5;
for($i=0;$i<$n;$i++){
    for($j=0;$j<=$i;$j++){
        echo $alphabets[$j]." ";
    }echo "<br>";
}
echo $alphabets[25]." ";
echo "<br>";

?>


<?php
 function stringLength($str) {
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
 }
 $str = "Hello, world!";
echo "Length of string: " . stringLength($str);
 ?>
 