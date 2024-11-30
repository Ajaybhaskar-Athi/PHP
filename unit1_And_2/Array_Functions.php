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

echo "________________**********************___________________________________<br><br>";

function printt($arr){
    foreach($arr as $ele=>$val){
        echo "$ele - $val <br>";
    }
}

$arr=array("19"=>"Ajay","2"=>"Bhaskar","3"=>"Akhaya");

printt($arr);

$arr["4"]="kushi";
echo " <b>  After Pushing  at back: </b> <br>";
printt($arr);

array_pop($arr);
echo "<b>After popping </b><br>";
printt($arr);

$new_pair=array("12"=>"pranav");
$arr=$new_pair+$arr;
echo "<b>After pushing at front</b> <br>";
printt($arr);

reset($arr);//points to the 1st element
unset($arr[key($arr)]);
echo "<b>After shifting  at front</b> <br>";
printt($arr);


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
$result = array_chunk($array, 3);
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
echo "<br>________________**********************___________________________________<br><br>";
?>



<!-- array_column is used to extract a single column of values from a multi-dimensional associative  array. -->

<?php
$employees = [
    ['id' => 1, 'name' => 'Alice', 'role' => 'Developer'],
    ['id' => 2, 'name' => 'Bob', 'role' => 'Designer'],
    ['id' => 3, 'name' => 'Charlie', 'role' => 'Manager']
];

// Extract the 'name' column from the array
$names = array_column($employees, 'name');

print_r($names);
echo "<br>________________**********************___________________________________<br><br>";


?>


<!-- array_merge (Simulating UNION)
array_merge is used to merge two or more arrays into one. If there are duplicate values, all values are retained. -->

<?php
$array1 = [1, 2, 3];
$array2 = [3, 4, 5];

// Merge arrays (similar to UNION in SQL)
$union = array_merge($array1, $array2);

print_r($union);
echo "<br>";


// If you want unique values like SQL UNION, you can use array_unique:
$uniqueUnion = array_unique($union);

print_r($uniqueUnion);
echo "<br>________________**********************___________________________________<br><br>";


?>


<!-- array_intersect is used to find the common elements between two or more arrays. -->

<?php
$array1 = [1, 2, 3, 4];
$array2 = [3, 4, 5, 6];

// Find common elements (Intersection)
$intersection = array_intersect($array1, $array2);

print_r($intersection);
echo "<br>________________**********************___________________________________<br><br>";


?>

<!-- array_flip exchanges the keys and values of an array. -->

<?php
$originalArray = ['a' => 1, 'b' => 2, 'c' => 3];

$flippedArray = array_flip($originalArray);

print_r($flippedArray);
echo "<br>________________**********************___________________________________<br><br>";

// output :
// Array
// (
//     [1] => a
//     [2] => b
//     [3] => c
// )


?>


