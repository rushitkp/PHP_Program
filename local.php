<?php
    global $a,$b;
    $a=100;
    $b=200;
    echo "<br>The value of your variable a is <b>$a</b> and b is <b>$b</b>";
    
    echo $a;
    echo $b;
    echo "<br>The value of your variable a is <b>$a</b> and b is <b>$b</b>";
    echo "<br>";
    echo var_dump($GLOBALS["a"]);
    echo var_dump($GLOBALS["b"]);
?>