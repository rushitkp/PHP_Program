<?php
$dob=array("Rk"=>20,"Km"=>50,"Ak"=>40);
print_r($dob);
echo "<br>";

echo ($dob["Rk"]);
echo "<br>";

$age['a']='10';
$age['b']='20';
$age['c']='30';
print_r($age);
echo "<br>";

foreach ($age as $x => $x_value) {  
    echo " key= " . $x ."value=" . $x_value;
}
?>