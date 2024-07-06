<?php
// $servername="localhost";
// $username="root";
// $password="";
// $database="rk";

$conn=mysqli_connect("localhost","root","","rk");
if(!$conn)
{
    die("Connection Failed".mysqli_connect_errno());
}
else
{
    echo "Connection Successfully<br>"; 
}

$sql="SELECT * FROM `mytable`";
$result=mysqli_query($conn,$sql);

echo mysqli_num_rows($result);
echo "<br>";

if($sql>0)
{
    $row=mysqli_fetch_assoc($result);
    echo var_dump($row);
}
?>