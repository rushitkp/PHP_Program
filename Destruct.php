<?php
class Destruct
{
    function __construct($name)
    {
        $this->name=$name;        
    }
    function __destruct()
    {
        echo $this->name;
    }
}
$rk=new Destruct("Php");
?>
