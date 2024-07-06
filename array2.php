<?php
    $a=array("rk","kp","ak","jd","jp");

    echo "1.array pop<br>";
    print_r(array_pop($a));
    echo "<br><br>";

    echo "2.array push<br>";
    $gs=array("m"=>"rtt","r"=>"ub");
    print_r($gs);
    echo "<br><br>";

    echo "3.array reverse<br>";
    print_r(array_reverse($a));
    echo "<br><br>";
    
    echo "4.array merge<br>";
    print_r(array_merge($a));
    echo "<br><br>";

    echo "5.array count<br<";
    print_r(array_count_values($a));
?>