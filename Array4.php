<?php
    echo "MultiDimensional Array <hr>";

    $mul=array(
        array(2,4,5),
        array(1,7,8),
        array(3,6,9)
    );
    // echo var_dump($mul);
    // echo $mul[1][2];
    for($i=0;$i<count($mul);$i++)
    {
        for($j=0;$j<count($mul[$i]);$j++)
        {
            echo $mul[$i][$j]." ";
        }
    }

?>

