<?php
$servername="localhost";
$username="root";
$password="";
$database="rk";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("Connection Failed");
}
else
{
    echo "Connection Successfully";
}
?>