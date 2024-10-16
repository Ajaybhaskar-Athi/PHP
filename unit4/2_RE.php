<?php

$pattern = "/a.b/";
$text = " acb abc a-b adb ";
preg_match_all($pattern, $text, $matches);
echo "Matches for 'a.b' : ";
print_r($matches);
echo "<br>";

?>

<!-- preg_grep  -->
<?php

echo "________************ PREG_GREP *************_______________<br>";
$pattern = "/^ba/"; //starts with ba 
$array = ["bat","cat","ball","batman","cab","bar","bug","bagara"];
$matches=preg_grep($pattern,$array);
echo "Elements that Matches the pattern: \n";
print_r($matches);


?>


<!-- preg_split  -->

<?php

$pattern = "/[\s, ]+/";
  $text = "apple,banana,cherry orange,grape";
$parts = preg_split($pattern, $text); 
echo "Split string:\n";
print_r($parts); 
?>
