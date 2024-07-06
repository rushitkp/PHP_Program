<?php
    $txt="My name is Php";
    echo "$txt";
    echo "<br><br>";
    print "My name is Rk<br><hr>";

    echo strlen($txt);
    echo "<br><br>";
    
    echo str_word_count($txt);
    echo "<br><br>";

    echo strrev($txt);
    echo "<br><br>";

    echo strtolower($txt);
    echo "<br><br>";

    echo strtoupper($txt);
    echo "<br><br>";

    echo lcfirst($txt);
    echo "<br><br>";

    echo ucwords($txt);
    echo "<br><br>";

    echo ucfirst($txt);
    echo "<br><br>";

    $a="Rushit";
    echo md5($a);
    echo "<br><br>";

    $b="Hello World!";
    echo trim($b,'Hed');
    echo "<br><br>";

$number=65;
$str="Rushit";
echo ( $number);
echo "<br><br>";
echo "<br><br>";

$str="My name isRushit";
$length=strlen($str);
for($i=0;$i<$length;$i++){
    echo $str[$i];
    echo "<br><br>";
}
?>