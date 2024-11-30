<?php

// $x=10;
// function fun(){
//     global $x;
//     echo $x ."<br>";
//     $x=2;
//     echo $x;
// }
// fun();

// $x=10;
// $y=&$x;
// $y=20;
// echo $x;

// function &getRef(&$x){
//     return $x;
// }
// $x=10;
// $y=&getRef($x);
// $y=20;
// echo  $x;

    // $arr=[1,2,3,4];
    // function fun(&$arr){
    //     $arr[0]=10;
    // }
    // fun($arr);
    // print_r($arr);

    function increment(){
        static $x=10;
        $x++;
        echo $x ."<br>";
    }
    increment();
    increment();
    increment();


?>