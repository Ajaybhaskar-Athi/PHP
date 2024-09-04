<?php
//Arrays

$colors=["red","Yellow","Orange"];

echo "$colors[2] <br> ";
echo "The Original Length is ".count($colors)."<br>";

//for loop
for($i=0;$i<count($colors);$i++){
    echo $colors[$i]."<br>";
}

unset($colors[2]);
echo "The new Length is ".count($colors)."<br>";
// echo "$colors[2]"; //Warning: Undefined array key 2

//for Each Loop
echo "The new Array is : <br>";
foreach($colors as $ele){
    echo "$ele<br>";
}


echo "_______________************************______________________<br>";

?>


<?php
//Associative Arrays

$movies=array ("PK"=>" Bhemmla Nayak" ,"PB"=>"Kalki 2898AD","RC"=> "Game Changer");
echo "Pk Acted in ".$movies["PK"] ."<br> PB acted in ".$movies["PB"]."<br> RC acted in $movies[RC] <br>";
echo "<br>";
print_r($movies);
echo "<br> <br>";


//for Each
foreach($movies as  $hero=>$movie){
    echo "$hero was hero in $movie <br>";
}echo "<br";

//using for loop
$keys=array_keys($movies);
$values=array_values($movies);

// print_r($keys);

echo "<br><br>";
for($i=0;$i<count($movies);$i++){
    echo "$values[$i] - $keys[$i] <br> ";
}echo "<br";
echo "<br>_______________************************______________________<br>";


?>



<?php

//Multi Dimensional Arrays


$heros=array(
    array("Pk","MB","PB","NTR","RC"),
    array ("Nani","Ram","Nag Chaitanya","Vijay"),
    array ("Kiran Abbavaram","Suhas")
);

echo $heros[0][0];
echo $heros[0][2];


?>


<?php
$result = array(
    array("Manoj",7.8,"pass"),
    array("Aditya",8.5,"pass"),
    array("Anuj",4.9,"fail")
);
echo $result[0][0]. "----CGPA is: " . $result[0][1]." and his status is ".$result[0][2]."<br>";
echo $result[1][0]. "----CGPA is: " . $result[1][1]." and his status is ".$result[1][2]."<br>";
echo $result[2][0]. "----CGPA is: "  . $result[2][1]." and his status is ".$result[2][2]."<br><br>";


echo "Printing with loop <br>";
for($i=0;$i<count($result);$i++){
    foreach($result[$i] as $ele){
        echo $ele."<br>";
    }
}

echo "<br>_______________************************______________________<br>";


?>


<?php

$result=array(
    array(
        "name"=>"Ajay",
        "gender"=>"male",
        "age"=>20
    ),    array(
        "name"=>"Vishnu",
        "gender"=>"male",
        "age"=>20
    ),
    array(
        "name"=>"Akshaya",
        "gender"=>"female",
        "age"=>20
    )
    
    );

    
    for($i=0;$i<count($result);$i++){
        echo "The Row is : $i <br>";
        foreach ($result[$i] as $ele=>$val){
            echo $ele." - ".$val."<br>";
        }
    }
echo "<br>";
    echo "Printing with both for loop <br>";

    for($i=0;$i<count($result);$i++){
        $keys=array_keys($result[$i]);
        $vals=array_values($result[$i]);

        for($j=0;$j<count($result);$j++){
            echo "$keys[$j] - $vals[$j] <br>";
        }

    }

    echo "<br>_______________************************______________________<br>";

?>



<?php
$books = 
array("C++" => array("name" => "Beginning with C","copies" =>8),
      "PHP" => array("name" => "Basics of PHP","copies" => 10),
      "Laravel" => array("name" => "MVC","copies" => 3)
);
 
$keys = array_keys($books);
for($i = 0; $i < count($books); $i++) {
    echo "<h1>$keys[$i]</h1>";
    foreach($books[$keys[$i]] as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }
}
?>


