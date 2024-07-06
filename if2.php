<?php
    $a=2;
    if($a<=5)
    {
        echo "value is small </br>";
        echo ("<body style='background-color:pink;'></body>");
        if($a%2==0)
        {
           echo "$a is EVEN";  
        }
        else
        {
            echo "$a is Odd";
            echo ("<body style='back-ground color:green;'></body>");
        }
    }
    else{
        echo "value is not found";
    }
?>