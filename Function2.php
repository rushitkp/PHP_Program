<?php

class rk
{
    public $a;
    function no($a)
    {
        $this->a=$a;
    }
    function ret()
    {
        return $this->a;
  
    }
}
$obj =new rk();
$obj->no(12);
echo $obj->ret();

?>