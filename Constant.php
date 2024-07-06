<?php
    define("PI",3.14);
    function area($r)
    {
        $area=constant("PI")*$r*$r;
        echo ("Area of circle=".$area);
        echo "<br>";
    }
    area(5);
    area(9);
    area(3.14);
?>