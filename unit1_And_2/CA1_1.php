<?php

function isPrime($n){
    if($n<=1)return false;
    for($i=2;$i*$i<=$n;$i++){
        if($n%$i==0)return false;
    }
    return true;
}
$n=3;
if(isPrime($n)){
    echo "Prime Number";
}else echo "Not a Prime Number!!";
echo "<br>";


?>


<?php

function print_first_n_primes($n){
    $c=0;
        $i=2;
    while($c<$n){
        if(isPrime($i)){
            echo $i." ";
            $c++;
    } 
    $i++;  
}
}
$n=10;
print_first_n_primes($n);
echo "<br>";
?>


<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }echo "<br>";
}
echo "Ended <br>";
for($i=4;$i>=0;$i--){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

echo "Ended <br>";
for($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo $j." ";
    }
    echo "<br>";
}
echo "Ended <br>";



for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo $j." ";
    }
    echo "<br>";
}

echo "Ended <br>";



for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo $i." ";
    }
    echo "<br>";
}

echo "Ended <br>";


$n=5;

for($i=0;$i<$n;$i++){
    
    for($j=1;$j<=$n-$i-1;$j++)echo "-";
    for($j=1;$j<=2*$i+1;$j++)echo "*";
    for($j=1;$j<=$n-$i-1;$j++)echo "-";
    echo "<br>";
}

echo "Ended <br>";


$n=5;

for($i=0;$i<$n;$i++){
    
    for($j=1;$j<=$n-$i-1;$j++)echo "-";
    for($j=1;$j<=2*$i+1;$j++)echo "*";
    for($j=1;$j<=$n-$i-1;$j++)echo "-";
    echo "<br>";
}

echo "Ended <br>";


$n=5;

for($i=4;$i>=0;$i--){
    
    for($j=1;$j<=$n-$i-1;$j++)echo "-";
    for($j=1;$j<=2*$i+1;$j++)echo "*";
    for($j=1;$j<=$n-$i-1;$j++)echo "-";
    echo "<br>";
}



?>


<?php

$arr1=[[1,2],[3,4]];
$arr2=[[5,6],[7,8]];
$res=[];
 $r1=count($arr1);
$c2=count($arr2[0]);
$c1=count($arr1[0]);
for($i=0;$i<$r1;$i++){
    for($j=0;$j<$c2;$j++){
        $res[$i][$j]=0;
        for($k=0;$k<$c1;$k++){
            $res[$i][$j]+=$arr1[$i][$k]*$arr2[$k][$j];
        }
    }
}

foreach($res as $v1){
    foreach($v1 as $ele){
        echo $ele." ";

    }echo "<br>";
}
?>