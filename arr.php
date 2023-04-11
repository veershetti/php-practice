<?php
$cars =array("volvo","BMW","Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
echo $age['Joe'];


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

?>