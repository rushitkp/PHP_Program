<?php
    class rkp
    {
        public $name;
        public $age;
        function sn($name,$age)
        {
            $this -> name = $name;
            $this -> age =$age;
        }
        function pn()
        {
            echo ($this ->age);
        }
    }
    $a=new rkp();
    $a ->sn("Rushit","65");
    $a ->pn();
    echo "<br>";
    $a=new rkp();
    $a ->sn("Km","38");
    $a->pn();
?>