<?php
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo $j." ";
    }echo "<br>";
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
