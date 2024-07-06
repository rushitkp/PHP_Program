<?php
    class rk
    {
        public $name;
        function __construct($name)
        {
            $this -> name = $name;
        }
        function __destruct()
        {
            echo ($this -> name);
        }
    }
    $a = new rk("Rushit Prajapati");
?>