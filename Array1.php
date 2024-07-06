<?php
    echo "<h1>Index Array</h1>";

    $computer[]="cpu";
    $computer[]="mouse";
    $computer[]="keyboard";
    $computer[]="monitor";
    print_r($computer);

    echo "<h1>Associative Array</h1>";
    $fruites=array("mango  <br>","banana  <br>","apple");
    foreach($fruites as $rushit)
    {
        echo "$rushit";
    }
?>