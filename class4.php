<?php
    class rkp
    {
        public $name;
        function sn($name)      //OR function set_name
        {
            $this -> name = $name;  // OR echo $name;
            
        }
        function pn()
        {
            return $this->name;
        }
    } 
    $a= new rkp();
    $a -> sn("Rushit");
    echo ($a -> pn());
?>        
