<?php
     function processMarks($marksArr){
        $sum=0;
        foreach($marksArr as $value){
            $sum+=$value;
        }
        return $value;
    }
    $rk =[34,546,56,5,305,54];
    $sumMarks=processMarks($rk);
    echo "Total is $sumMarks";
?> 