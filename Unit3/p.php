<?php

define("Wishes","Good Morning!");
$year=2021;
if(($year%400==0) || ($year%4==0 && $year%100!=0)){
    echo "It is Leap Year";
}else echo "Its not a leap Year!";
echo "<br> $year";

echo "<br>";

?>


<?php

for($i=0;$i<=4;$i++){
    for($j=0;$j<=$i;$j++){
        echo "* ";
    }echo "<br>";
}
echo "<br><br>";



?>

<?php

const arr=array(1,2,3,4);

for($i=0;$i<count(arr);$i++)
{
    echo arr[$i]." ";
} echo "<br>";
?>






<?php
$arr=[23,12,24];

for($i=0;$i<count($arr);$i++)
{
    echo $arr[$i]." ";
} 
echo "<br>";
foreach($arr as $ele)echo "$ele ";
echo "<br>";
?>


<?php

$arr=array(
    "name"=>"Ajay",
    "age"=>20
);
print_r($arr);
echo "<br>";

foreach($arr as $ele=>$value){
    echo "$ele-$value ,";
}
echo "<br> $arr[name]";
$arr["name"]="Akshaya";
echo "<br>$arr[name]";

echo "______**********__________";
?>


<?php
$arr=array(
    array("akshaya"=>"Vizag",'age'=>20),
    array("Pranav"=>"KMP","age"=>20),
    array("Kushi"=>"NAD","age"=>20)
);
echo"<br>";
foreach($arr as $a1){
    foreach($a1 as $ele=>$val)echo "$ele-$val ";
    echo"<br>";
}

$keys=array_keys($arr);
$vals=array_values($arr);

print_r($keys);
print_r($vals); 


$arr=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
foreach($arr as $a1){
    foreach($a1 as $ele){
        echo "$ele ";
    }echo "<br>";
}


?>

<?php

$books = 
array("C++" => array("name" => "Beginning with C","copies" =>8),
      "PHP" => array("name" => "Basics of PHP","copies" => 10),
      "Laravel" => array("name" => "MVC","copies" => 3)
);

foreach($books as $ele=>$a1){
    echo "<h2>$ele</h2>";
    foreach($a1 as $k=>$v){
        echo "$k-$v<br>";
    }
}

?>



