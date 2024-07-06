<?php
class employee
{
    public $name;
    public $age;
    // public $salary;
    function __construct($n,$a)
    {
        $this->name=$n;        
        $this->age=$a;        
        // $this->salary=$s;        
    }
    function info()
    {
        echo "Name:".$this->name."<br>";        
        echo "age:".$this->age."<br>";        
        // echo "salary:".$this->salary."<br>";
    }
}
$r=new employee("Rk",20);
$r->info();
?>
