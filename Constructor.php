<?php
    class rk
    {
        public $name;
        public $id;
        function __construct($name,$sallary)
        {
            $this -> name = ($name);
            $this -> sallary = ($sallary);
        }
        function km()
        {
            echo $this ->name;
            echo $this ->sallary;
        }
    }
    $a=new rk("Rushit <br>",100000);
    $a -> km();
?>