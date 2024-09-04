<!-- Array length
push ,pop,shift,unshift
Search
count values
merge
combine
chunk
diff
union
intersection
flip()
reverse
slice
column
sum
product
in_array  key  -->


<?php

$arr=array("a"=>"ajay","b"=>"Bhaskar");

echo "The lenght of array is : ". count($arr)."<br>";

echo "________________**********************___________________________________<br><br>";

?>

<?php

$arr=array("Pawan","Kalyan");
echo "The array is : <br> ";
 print_r($arr);
echo "<br>";

//at last
array_push($arr,"Hello","World");
//at front
array_unshift($arr,"Good ",'Morning');

echo "The new Array is :  <br>";
print_r($arr);
echo "<br><br>";

//remove last element

array_pop($arr);
array_shift($arr);
echo "The new Array is :  <br>";
print_r($arr);
echo "<br>";

echo "________________**********************___________________________________<br><br>";


?>


 <!-- how to push and unshift in associated Arrays  -->

 <?php


$arr = array("hero" => "PK", "dir" => "Sujeeth");
$new_pair = array("pro" => "DVV"); // New key-value pair

// Merge the new pair at the front of the array
$arr = array_merge($new_pair, $arr);

print_r($arr);
echo "<br><br>";


$arr=array("hero"=>"PK","dir"=>"Sujeeth");
// array_push($arr,"pro"=>"DVV");this will give u error 
//correct way to push the key value element
$arr["pro"] = "DVV"; 

foreach($arr as $ele=>$val){
    echo "$ele - $val <br>";
}

echo "Pop and shift in associated Array is same as normal One <br>";
echo "________________**********************___________________________________<br><br>";


?>

<?php

$arr= ['apple', 'banana', 'cherry'];
$key = array_search('banana', $arr);
echo "Key is : ";
echo $key ."<br>"; // Output: 1

echo "________________**********************___________________________________<br><br>";


?>




<?php

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$result = array_merge($array1, $array2);
print_r($result); // Output: [1, 2, 3, 4, 5, 6]
echo "________________**********************___________________________________<br><br>";



?>


<?php



$array = [1, 2, 3, 4, 5];
print_r($array);
$result = array_chunk($array, 2);
// print_r($result); // Output: [[1, 2], [3, 4], [5]]
echo "<br>";
for ($i = 0; $i < count($result); $i++) {
    echo "Chunk " . ($i + 1) . ": ";
    for ($j = 0; $j < count($result[$i]); $j++) {
        echo $result[$i][$j] . " ";
    }
    echo "<br>";
}
echo "________________**********************___________________________________<br><br>";


?>



<?php


$arr=[1,2,3,4,5];
$res=array_slice($arr,1,2);//index 1 to index 2
for($i=0;$i<count($res);$i++){
    echo $res[$i]." ";
}



echo "<br>________________**********************___________________________________<br><br>";

?>


<?php

$arr1=["a","b","c"];
$arr2=[10,20,30];
$res=array_combine($arr1,$arr2);

foreach($res as $key=>$val){
    echo "$key - $val <br>";
}

?>


<?php

$res=array_reverse($arr1);
print_r($res);
echo "<br>";

?>


<?php

echo array_sum($arr2) ."<br>";
echo array_product($arr2);

?>