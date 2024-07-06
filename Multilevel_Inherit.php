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
        echo "Intermidiate Super class <br>";
    }
}
class C extends B
{
    function ShowC()
    {
        echo "Sub Class";
    }
}
$r1=new C();
$r1->showA();
$r1->showB();
$r1->showC();

?>