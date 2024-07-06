<?php 
echo "array_change_key_case<br>"; 
$input = array("FirSt" => 1, "SecOnd" => 4); 
print_r(array_change_key_case($input));
echo("<br><br>"); 
// print_r(array_change_key_case($input, CASE_LOWER));
// echo("<br><br>"); 

echo "array_chunk()<br>";
$cars=array("Volvo","BMW","Swift");
print_r(array_chunk($cars,2)); 
echo("<br><br>");

echo "array_combine()<br>"; 
$a = array('green', 'red', 'yellow'); 
$b = array('green', 'pink', 'yellow'); 
$c = array_combine($a, $b);
print_r($c); 
echo("<br><br>"); 

echo "array_count_values()"; 
$fd=array("orange","mango","banan","orange"); 
print_r(array_count_values($fd)); 
echo("<br><br>"); 

echo "array_keys()<br>"; 
$ak=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander"); 
print_r(array_keys($ak)); 
echo("<br><br>"); 

//array_pop() Function Deletes the last element of an array 
$ap=array("red","green","blue"); 
array_pop($ap); 
print_r($ap); 

echo("<br><br>"); 
$a=array("a"=>10,"b"=>20); 
echo array_sum($a);

echo("<br><br>"); 
$state = array('Gujarat', 'Delhi', 'Maharashtra'); 
 echo end($state); 
?> 
