<?php
$i = 1;
do{
    $i++;
    echo "The number is " . $i . "<br>";
}
while($i <= 3);

echo "_____*************___________<br>";
?>


<?php
for($i=1; $i<=3; $i++){
    echo "The number is " . $i . "<br>";
}
echo "_____*************___________<br>";

?>

<?php

$arr=["Panjaa","Balu","Kushi","Tholiprema"];
foreach($arr as $ele){
    echo "$ele<br>";
}
echo "_____*************___________<br>";

?>


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
echo "_____*************___________<br>";

?>



<?php  
    //php program to demonstrate the use of continue statement  
  
    echo "Even numbers between 1 to 20: </br>";  
    $i = 1;  
    while ($i<=20) {  
        if ($i %2 == 1) {  
            $i++;  
            continue;   //here it will skip rest of statements  
        }  
        echo $i;  
        echo "</br>";  
        $i++;  
    }     
?>


