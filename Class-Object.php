<?php
    class rk
    {
        public $name;
        function rr($name)
        {
            echo $name;
        }
        function rp()
        {
            return $this->name;
        }
    }
    $a =new rk;
    $a-> rr("rushit");
    echo $a->rp();
?>