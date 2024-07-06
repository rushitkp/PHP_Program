<?php
class player
{
    public $name;
    function set_name($name)
    {
        $this->name=$name;
    }
    function get_name()
    {
        return $this->name;
    }
}
$player1=new player();
$player1->set_name("Rk");
echo $player1->get_name();
?>