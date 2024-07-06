<?php
class A
{
    function showA()
    {
        echo "Super Class <br>";
    }
}
class B extends A
{
    function showB()
    {
        echo "Sub Class <br>";
    }
}
class C extends A
{
    function showC()
    {
        echo "Sub Class";
    }
}
$r1=new B();          
$r1->showA();         
$r1->showB();          

$r2=new C();
$r2->showA();
$r2->showC();
?>