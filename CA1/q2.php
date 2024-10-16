

<?php
echo " <b>Question 1: </b><br> ";
function count_freq($char,$str){
    $count = 0;
$n=strlen($str);

    for($i=0;$i<$n;$i++){
        if($char==$str[$i])$count++;
    } 
    return $count;
}

$str="mississippi";
echo "The String is : $str <br>";

$m_count=count_freq('m',$str);
$i_count=count_freq('i',$str);
$s_count=count_freq('s',$str);
$p_count=count_freq('p',$str);

echo "'m' appears $m_count times. <br>";
echo "'i' appears $i_count times. <br>";

echo "'s' appears $s_count times. <br>";
echo "'p' appears $p_count times. <br> <br>";



 
?>


<?php
echo " <b>Question 2: </b><br> ";


$n=4;
$c=0;
$nums=range(1,100);
for($i=1;$i<=$n;$i++){
    for($j=1;$j<$i;$j++){
        echo " &nbsp ";
    }
    for($j=1;$j<=$i;$j++){
        echo "$nums[$c] ";
        $c++;
    }
    echo "<br>";
}

?>


