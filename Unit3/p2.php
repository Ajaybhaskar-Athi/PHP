
<?php
function print_array($arr){
foreach($arr as $ele)echo $ele." ";
echo "<br>";
}

function print_ass_arr($arr){
foreach($arr as $ele=>$val)echo "$ele-$val <br>";
    echo "<br>";
}
function print_MD($arr){ //Mulit dimensional array
    for($i=0;$i<count($arr);$i++){
        echo "[ ";
        for($j=0;$j<count($arr[$i]);$j++){
            echo $arr[$i][$j]." ";
        }echo " ]<br>";
    }
    echo "<br>";
}

?>

<?php
//shift,unshift and pop,shift
$arr=array(1,2,3,4);
// echo count($arr); 
echo "<br>";
array_push($arr,"last");
array_unshift($arr,"First");


print_array($arr);//print function
array_shift($arr);
array_pop($arr);

echo "<br>";
print_array($arr);//print functon




?>

<?php
//search=> searching a value in associated array and also in nirmal array too
$arr=["pk"=>"OG","mb"=>"SSRMB","Nani"=>"Hit3"];
echo "<br>";
echo array_search("bheemla",$arr);
echo "<br>";

print_ass_arr($arr);//print funcition

//array_search in normal array

const arr=array(1,3,2,1,5,5);
echo array_search(3,arr)."<br>";
?>

<?php
//array_count_values()=>count frequencey of all values
const arr=array(1,3,2,1,5,5);
$frq=array_count_values(arr);
print_r($frq);
echo "<br>";

foreach($frq as $ele=>$val){
    echo "$ele - $val times .. <br>";
}

$arr=["1"=>"PK","2"=>"MB","3"=>"PB","4"=>"RC","5"=>"MB"];
//as keys are equlas to unique so it equals count. find for values frequcey
$vals=array_values($arr);
$frq=array_count_values($vals);
print_r($frq);


?>

<?php
//array_merge()=>it merges two or more arrays
$a1=["AB"=>"AA","P"=>"K"];
$a2=["H"=>"S","D"=>"D"];
$a3=["AB"=>"NULL"];
$res=array_merge($a1,$a2,$a3);

print_ass_arr($res);

?>


<?php
//creating ass. array from 2 individual arrays  with equla size must
$a1=[1,2,3,4];
$a2=[5,6,7,8];
$res=array_combine($a1,$a2);
print_ass_arr($res);
?>

<?php
//chunk =>splitting array into new chunks
$arr=[1,2,3,4,5,6,7,8];

$res=array_chunk($arr,2);
print_MD($res);

?>

<?php
//diff()=> compare 2 arrays and return the elements from array1 which are not in array2 
$a1=[1,2,6,4];
$a2=[5,1,6,7];
$res=array_diff($a1,$a2);
print_array($res);

?>

<?php
//flip()=>exhanges keys wiht values
$a=["name"=>"Ajay","Roll"=>"20"];
$a=array_flip($a);
print_ass_arr($a);

?>

<?php
//intersect()=> returs the same values in both arrays
$a1=[11,42,73,44];
$a2=[12,19,42,11];
print_array(array_intersect($a1,$a2));

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"pink");
$a3=array("red","green");
$result=array_intersect($a1,$a2,$a3);
print_ass_arr($result);

?>

<?php
//Reverse ()=>reverse an array
//Reverse(arr,true)=>indexes remain same but view chnaged as reveres. if we print with foreach we can experience the difference
$a1=[1,2,3,4];
$res=array_reverse($a1);
// print_array($res);
for($i=0;$i<count($res);$i++){
    echo $i."-". $res[$i]."<br>";
}
echo"<br>";

?>

<?php
//slice()
$arr=[1,2,3,4];
print_array(array_slice($arr,1,2));
$res=array_slice($arr,1,2,true);
for( $i=0;$i<count($arr);$i++){
    echo "$i-$res[$i] <br>";
}
//making true preserves the elmenets indexes same  affter seperation
?>

<?php
//Column()=>return the values from the given coulmn
$arr=array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,11,12)
);

print_array(array_column($arr,0));


$result = array(
    array('name'=>'Manoj','cgpa'=>6.7,'status'=>'pass'),
    array('name'=>"Shalini",'cgpa'=>9.8,'status'=>'pass'),
    array('name'=>'Mani','cgpa'=>3.2,'status'=>'fail')
    );

    print_array(array_column($result,"name"));
?>




<?php
//sum and product of elements in an array
$arr=[1,2,3,4];
echo array_sum($arr)."<br>";
echo array_product($arr)."<br>";
?>


<?php

//in_array=checks if a value exists in the array.
$arr=[1,2,3,4];

$res=in_array(5,$arr);
if($res)echo "Exists";
else echo "not Exists!";


?>



<?php
//array_key_exists()    
$array = ["a" => 1, "b" => 2, "c" => 3];
$keyExists = array_key_exists("b", $array);
echo $keyExists ? "Key exists" : "Key does not exist"; 
?>

?>

